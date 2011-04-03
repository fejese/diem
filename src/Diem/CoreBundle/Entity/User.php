<?php

namespace Diem\CoreBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;

/**
 * Diem\CoreBundle\Entity\User
 *
 * @orm:Table(name="user")
 * @orm:Entity
 */
class User extends BaseUser {

  /**
   * @orm:Id
   * @orm:Column(type="integer")
   * @orm:GeneratedValue(strategy="AUTO")
   */
  protected $id;

}
