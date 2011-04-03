<?php

namespace Diem\AdminBundle\WebService;

use Diem\CoreBundle\Core\dmConfigurable;
use Symfony\Component\DependencyInjection\Container;
use Diem\AdminBundle\WebService\dmWebBrowser;
use Diem\CoreBundle\Core\dm;

class dmDiemVersionCheck extends dmConfigurable {

  protected
  $serviceContainer,
  $cache;

  public function __construct(Container $serviceContainer, array $options) {
    $this->serviceContainer = $serviceContainer;

    $this->initialize($options);
  }

  protected function initialize(array $options) {
    $this->configure($options);

    $this->cache = array();
  }

  public function setCache($cache) {
    $this->cache = $cache;
  }

  public function shouldCheck() {
    return !$this->getService('session')->get('version_check', false);
  }

  public function isUpToDate() {
    $this->getService('session')->set('version_check', true);

    $serverVersion = $this->getLatestServerVersionForBranch(dm::getVersionBranch());

    return $this->versionCompare(dm::getVersion(), $serverVersion) >= 0;
  }

  public function getRecommendedUpgrade() {
    return $this->isUpToDate() ? null : $this->getLatestServerVersionForBranch(dm::getVersionBranch());
  }

  public function getLatestServerVersionForBranch($branch) {
    if (isset($this->cache[$branch])) {
      return $this->cache[$branch];
    }

    $client = new dmWebBrowser();
    $client->request('GET', $this->getOption('url') . '/' . str_replace('.', '_', $branch));

    return $this->cache['branch'] = $client->getResponse()->getContent();

//    return $this->cache['branch'] = $this->getService('web_browser')
//            ->get($this->getOption('url') . '/' . str_replace('.', '_', $branch))
//            ->getResponseText();
  }

  protected function getService($name) {
    return $this->serviceContainer->get($name);
  }

  protected function versionCompare($version1, $version2) {
    return version_compare($this->fixVersionName($version1), $this->fixVersionName($version2));
  }

  protected function fixVersionName($version) {
    return strtr($version, array('-ALPHA' => '.1.', '-BETA' => '.2.', '_BETA' => '.2.', '-RC' => '.3.', '_RC' => '.3.'));
  }

}