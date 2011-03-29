<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmArea
 *
 * @orm:Table(name="dm_area")
 * @orm:Entity
 */
class DmArea
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
     * @var string $type
     *
     * @orm:Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

}