<?php

namespace Diem\CoreBundle\Entity;

use DoctrineExtensions\NestedSet\Node;

/**
 * Diem\CoreBundle\Entity\DmZone
 *
 * @orm:Table(name="dm_zone")
 * @orm:Entity
 */
class DmZone implements Node {

    /**
     * @var bigint $id
     *
     * @orm:Column(name="id", type="bigint", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string $cssClass
     *
     * @orm:Column(name="css_class", type="string", length=255, nullable=true)
     */
    private $cssClass;
    /**
     * @var string $width
     *
     * @orm:Column(name="width", type="string", length=15, nullable=true)
     */
    private $width;
    /**
     * @var bigint $lft
     *
     * @orm:Column(type="bigint")
     */
    private $lft;
    /**
     * @var bigint $lft
     * 
     * @orm:Column(type="bigint")
     */
    private $rgt;

    public function getId() {
        return $this->id;
    }

    public function getLeftValue() {
        return $this->lft;
    }

    public function setLeftValue($lft) {
        $this->lft = $lft;
    }

    public function getRightValue() {
        return $this->rgt;
    }

    public function setRightValue($rgt) {
        $this->rgt = $rgt;
    }

    public function __toString() {
        return $this->name;
    }

    public function getCssClass() {
        return $this->cssClass;
    }

    public function setCssClass($cssClass) {
        $this->cssClass = $cssClass;
    }

    public function getWidth() {
        return $this->width;
    }

    public function setWidth($width) {
        $this->width = $width;
    }


}