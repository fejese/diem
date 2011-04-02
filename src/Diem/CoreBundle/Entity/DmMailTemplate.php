<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmMailTemplate
 *
 * 
 * @orm:Table(name="dm_mail_template",uniqueConstraints={
 *  @orm:UniqueConstraint(name="name", columns={"name"})
 * })
 * @orm:Entity
 */
class DmMailTemplate
{
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
     * @orm:Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var text $vars
     *
     * @orm:Column(name="vars", type="text", nullable=true)
     */
    private $vars;

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