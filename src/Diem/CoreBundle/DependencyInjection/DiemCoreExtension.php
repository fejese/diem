<?php

namespace Diem\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Diem\CoreBundle\DependencyInjection\DiemCoreBaseExtension;

class DiemCoreExtension extends DiemCoreBaseExtension
{
    public function load(array $configs, ContainerBuilder $container)
    {
      parent::load($configs, $container);
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }

    public function getAlias()
    {
        return 'diem_core';
    }
}
