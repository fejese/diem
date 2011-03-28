<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmZone
 *
 * @orm:Table(name="dm_zone")
 * @orm:Entity
 */
class DmZone
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
     * @var bigint $position
     *
     * @orm:Column(name="position", type="bigint", nullable=true)
     */
    private $position;

    /**
     * @var DmArea
     *
     * @orm:ManyToOne(targetEntity="DmArea")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_area_id", referencedColumnName="id")
     * })
     */
    private $dmArea;


}