<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmAutoSeo
 *
 * @orm:Table(name="dm_auto_seo",uniqueConstraints={
 *  @orm:UniqueConstraint(name="module_action", columns={"module", "action"})
 * })
 * @orm:Entity
 */
class DmAutoSeo
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