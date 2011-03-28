<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmTransUnit
 *
 * @orm:Table(name="dm_trans_unit")
 * @orm:Entity
 */
class DmTransUnit
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
     * @var text $source
     *
     * @orm:Column(name="source", type="text", nullable=false)
     */
    private $source;

    /**
     * @var text $target
     *
     * @orm:Column(name="target", type="text", nullable=false)
     */
    private $target;

    /**
     * @var string $meta
     *
     * @orm:Column(name="meta", type="string", length=255, nullable=true)
     */
    private $meta;

    /**
     * @var datetime $createdAt
     *
     * @orm:Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @orm:Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;

    /**
     * @var DmCatalogue
     *
     * @orm:ManyToOne(targetEntity="DmCatalogue")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_catalogue_id", referencedColumnName="id")
     * })
     */
    private $dmCatalogue;


}