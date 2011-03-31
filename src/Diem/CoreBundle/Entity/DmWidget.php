<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmWidget
 *
 * @orm:Table(name="dm_widget")
 * @orm:Entity
 */
class DmWidget
{
    /**
     * @var bigint $id
     *
     * @orm:Column(name="id", type="bigint", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="IDENTITY")
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
     * @var string $cssClass
     *
     * @orm:Column(name="css_class", type="string", length=255, nullable=true)
     */
    private $cssClass;

    /**
     * @var bigint $position
     *
     * @orm:Column(name="position", type="bigint", nullable=true)
     */
    private $position;

    /**
     * @var datetime $updatedAt
     *
     * @orm:Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var DmZone
     *
     * @orm:ManyToOne(targetEntity="DmZone")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_zone_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * })
     */
    private $dmZone;


}