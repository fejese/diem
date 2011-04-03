<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmSetting
 *
 * @orm:Table(name="dm_setting")
 * @orm:Entity
 */
class DmSetting {

  /**
   * @var bigint $id
   *
   * @orm:Column(name="id", type="bigint", nullable=false)
   * @orm:Id
   * @orm:GeneratedValue(strategy="AUTO")
   */
  private $id;
  /**
   * @var string $name
   *
   * @orm:Column(name="name", type="string", length=127, nullable=false, unique=true)
   */
  private $name;
  /**
   * @var string $type
   *
   * @orm:Column(name="type", type="string", length=255, nullable=false)
   */
  private $type;
  /**
   * @var text $params
   *
   * @orm:Column(name="params", type="text", nullable=true)
   */
  private $params;
  /**
   * @var string $groupName
   *
   * @orm:Column(name="group_name", type="string", length=255, nullable=false)
   */
  private $groupName;
  /**
   * @var string $credentials
   *
   * @orm:Column(name="credentials", type="string", length=255, nullable=true)
   */
  private $credentials;


}