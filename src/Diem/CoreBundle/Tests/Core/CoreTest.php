<?php

namespace Diem\CoreBundle\Tests\Core;

use Diem\CoreBundle\Tests\TestCase;
use Diem\CoreBundle\Core\dm;
use Diem\AdminBundle\WebService\dmDiemVersionCheck;

class CoreTest extends TestCase {

  public function testVersionCheck() {

    print("\nWeird version numbers will be shown during this testVersionCheck.");
    print("\nDiem real version number is " . DIEM_VERSION);

    $versionCheck = $this->get('diem_version_check');
    $versionCheck->setCache(array(
        '5.0' => '5.0.4',
        '5.1' => '5.1.0-BETA2'
    ));

    dm::setVersion('5.0.0-BETA1');

    $this->assertEquals(dm::getVersion(), '5.0.0-BETA1', 'Diem version is 5.0.0-BETA1');

    $this->assertTrue($versionCheck->shouldCheck(), 'versionCheck should check');

    $this->assertEquals($versionCheck->getLatestServerVersionForBranch('5.0'), '5.0.4', 'Latest version for 5.0 is 5.0.4');

    $this->assertEquals($versionCheck->getLatestServerVersionForBranch('5.1'), '5.1.0-BETA2', 'Latest version for 5.1 is 5.1.0-BETA2');

    $this->assertEquals($versionCheck->isUpToDate(), false, 'Diem is not up to date');

    $this->assertEquals($versionCheck->getRecommendedUpgrade(), '5.0.4', 'Recommended upgrade is 5.0.4');

    dm::setVersion('5.0.4');

    $this->assertEquals(dm::getVersion(), '5.0.4', 'Diem version is 5.0.4');

    $this->assertTrue(!$versionCheck->shouldCheck(), 'versionCheck should not check');

    $this->assertEquals($versionCheck->getLatestServerVersionForBranch('5.0'), '5.0.4', 'Latest version for 5.0 is 5.0.4');

    $this->assertEquals($versionCheck->getLatestServerVersionForBranch('5.1'), '5.1.0-BETA2', 'Latest version for 5.1 is 5.1.0-BETA2');

    $this->assertEquals($versionCheck->isUpToDate(), true, 'Diem is up to date');

    $this->assertEquals($versionCheck->getRecommendedUpgrade(), null, 'Recommended upgrade is null');

    dm::setVersion('5.1.0-ALPHA4');

    $this->assertEquals(dm::getVersion(), '5.1.0-ALPHA4', 'Diem version is 5.1.0-ALPHA4');

    $this->assertTrue(!$versionCheck->shouldCheck(), 'versionCheck should not check');

    $this->assertEquals($versionCheck->getLatestServerVersionForBranch('5.0'), '5.0.4', 'Latest version for 5.0 is 5.0.4');

    $this->assertEquals($versionCheck->getLatestServerVersionForBranch('5.1'), '5.1.0-BETA2', 'Latest version for 5.1 is 5.1.0-BETA2');

    $this->assertEquals($versionCheck->isUpToDate(), false, 'Diem is not up to date');

    $this->assertEquals($versionCheck->getRecommendedUpgrade(), '5.1.0-BETA2', 'Recommended upgrade is 5.1.0-BETA2');

    dm::setVersion(DIEM_VERSION);
  }

  public function testVersion() {

    print("\nWeird version numbers will be shown during this testVersionCheck.");
    print("\nDiem real version number is " . DIEM_VERSION);

    dm::setVersion('5.2.14');

    $this->assertEquals(dm::getVersion(), '5.2.14');

    $this->assertEquals(dm::getVersionMajor(), '5');

    $this->assertEquals(dm::getVersionMinor(), '2', 'Diem version minor is 2');

    $this->assertEquals(dm::getVersionMaintenance(), '14', 'Diem version maintenance is 14');

    $this->assertEquals(dm::getVersionBranch(), '5.2', 'Diem version branch is 5.2');

    dm::setVersion('5.0.0-BETA4_DEV');

    $this->assertEquals(dm::getVersion(), '5.0.0-BETA4_DEV', 'Diem version is 5.0.0-BETA4_DEV');

    $this->assertEquals(dm::getVersionMajor(), '5', 'Diem version major is 5');

    $this->assertEquals(dm::getVersionMinor(), '0', 'Diem version minor is 0');

    $this->assertEquals(dm::getVersionMaintenance(), '0-BETA4_DEV', 'Diem version maintenance is 0-BETA4_DEV');

    $this->assertEquals(dm::getVersionBranch(), '5.0', 'Diem version branch is 5.0');

    dm::setVersion(DIEM_VERSION);

    $this->assertEquals(version_compare('5.0.0-BETA4_DEV', '5.0.0'), -1, '5.0.0-BETA4_DEV < 5.0.0');

    $this->assertEquals(version_compare('5.0.0', '5.0.1'), -1, '5.0.0 < 5.0.1');
  }

}