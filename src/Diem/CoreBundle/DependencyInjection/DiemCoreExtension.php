<?php

namespace Diem\CoreBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;
use Diem\CoreBundle\DependencyInjection\DiemCoreBaseExtension;

class DiemCoreExtension extends DiemCoreBaseExtension
{
	public function __construct() {
		$this->addFileToLoad(__DIR__.'/../Resources/config', 'services.yml');
	}

  public function getAlias()
  {
      return 'diem_core';
  }
}
