<?php

namespace Diem\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\Config\FileLocator;

class DiemCoreBaseExtension extends Extension {

    protected $locations = array();

    protected function addFilesToLoad($location, array $files) {
        $this->locations[$location] = $files;
    }

    public function load(array $configs, ContainerBuilder $container) {
        foreach ($this->locations as $location => $files) {
            $loader = new YamlFileLoader($container, new FileLocator($location));
            foreach ($files as $file) {
                $loader->load($file);
            }
        }
    }

}
