<?php

namespace Diem\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class DiemCoreBaseExtension extends Extension {

	protected $locations = array();
	protected $files = array();

	protected function addFileToLoad($location, $file) {
		$this->location[] = $location;
		$this->files[] = $file;
	}

	public function load(array $configs, ContainerBuilder $container) {
		foreach ($this->files as $key=>$file) {
			$location = $this->locations[$key];
			$loader = new YamlFileLoader($container, new FileLocator($location));
			$loader->load($file);
		}
  }

}
