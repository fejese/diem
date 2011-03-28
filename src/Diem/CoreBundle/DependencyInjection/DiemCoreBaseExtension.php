<?php

namespace Diem\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class DiemCoreBaseExtension extends Extension {

  public function load(array $configs, ContainerBuilder $container) {
//        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
//        $loader->load('services.yml');
    //$this->setParameter('request.context',  $this->getService('request')->getRequestContext());
    //\var_dump($container->get('service_container'));

    //$container->setParameter('user.culture', $container->get('service_container')->get('session')->get('culture'));
  }

}
