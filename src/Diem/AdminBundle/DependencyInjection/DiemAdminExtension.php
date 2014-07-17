<?php

namespace Diem\AdminBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Diem\CoreBundle\DependencyInjection\DiemCoreBaseExtension;

class DiemAdminExtension extends DiemCoreBaseExtension
{
		public function __construct() {
			$this->addFilesToLoad(__DIR__.'/../Resources/config', array('services.yml'));
		}

    public function getAlias()
    {
        return 'diem_admin';
    }
}