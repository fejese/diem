<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmPage
 *
 * @orm:Table(name="dm_page",uniqueConstraints={
 *  @orm:UniqueConstraint(name="module_action", columns={"module", "action", "record_id"})
 * })
 * @orm:Entity(repositoryClass="Diem\CoreBundle\Entity\DmPageRepository")
 */
class DmPage {

  /**
   * @var bigint $id
   *
   * @orm:Column(name="id", type="bigint", nullable=false)
   * @orm:Id
   * @orm:GeneratedValue(strategy="AUTO")
   */
  private $id;
  /**
   * @var string $module
   *
   * @orm:Column(name="module", type="string", length=127, nullable=false)
   */
  private $module;
  /**
   * @var string $action
   *
   * @orm:Column(name="action", type="string", length=127, nullable=false)
   */
  private $action;
  /**
   * @var bigint $recordId
   *
   * @orm:Column(name="record_id", type="bigint", nullable=false)
   */
  private $recordId;
  /**
   * @var string $credentials
   *
   * @orm:Column(name="credentials", type="string", length=255, nullable=true)
   */
  private $credentials;
  /**
   * @var integer $lft
   *
   * @orm:Column(name="lft", type="integer", nullable=true)
   */
  private $lft;
  /**
   * @var integer $rgt
   *
   * @orm:Column(name="rgt", type="integer", nullable=true)
   */
  private $rgt;
  /**
   * @var smallint $level
   *
   * @orm:Column(name="level", type="smallint", nullable=true)
   */
  private $level;
  /**
   * @var DmPageTranslation
   *
   * @orm:OneToMany(targetEntity="DmPageTranslation", mappedBy="dmPage", orphanRemoval=true)

   */
  private $dmPageTranslation;

  public function isModuleAction($module, $action) {
    return ($this->module == $module) && ($this->action == $action);
  }

  public function getTemplate() {
    return 'default';
  }

}