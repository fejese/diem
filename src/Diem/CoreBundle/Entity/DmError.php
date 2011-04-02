<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmError
 *
 * @orm:Table(name="dm_error")
 * @orm:Entity
 */
class DmError
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
     * @var string $phpClass
     *
     * @orm:Column(name="php_class", type="string", length=127, nullable=false)
     */
    private $phpClass;

    /**
     * @var string $name
     *
     * @orm:Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var text $description
     *
     * @orm:Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string $module
     *
     * @orm:Column(name="module", type="string", length=127, nullable=true)
     */
    private $module;

    /**
     * @var string $action
     *
     * @orm:Column(name="action", type="string", length=127, nullable=true)
     */
    private $action;

    /**
     * @var string $uri
     *
     * @orm:Column(name="uri", type="string", length=255, nullable=false)
     */
    private $uri;

    /**
     * @var string $env
     *
     * @orm:Column(name="env", type="string", length=63, nullable=false)
     */
    private $env;

    /**
     * @var datetime $createdAt
     *
     * @orm:Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;


}