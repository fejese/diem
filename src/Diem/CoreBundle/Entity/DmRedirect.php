<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmRedirect
 *
 * @orm:Table(name="dm_redirect",uniqueConstraints={
 *  @orm:UniqueConstraint(name="source", columns={"source"})
 * })
 * @orm:Entity
 */
class DmRedirect
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
     * @var string $source
     *
     * @orm:Column(name="source", type="string", length=255, nullable=false)
     */
    private $source;

    /**
     * @var string $dest
     *
     * @orm:Column(name="dest", type="string", length=255, nullable=false)
     */
    private $dest;

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


}