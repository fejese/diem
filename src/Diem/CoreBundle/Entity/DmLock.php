<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmLock
 *
 * @orm:Table(name="dm_lock")
 * @orm:Entity
 */
class DmLock
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
     * @var string $userName
     *
     * @orm:Column(name="user_name", type="string", length=255, nullable=false)
     */
    private $userName;

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
     * @var bigint $time
     *
     * @orm:Column(name="time", type="bigint", nullable=false)
     */
    private $time;

    /**
     * @var string $app
     *
     * @orm:Column(name="app", type="string", length=127, nullable=false)
     */
    private $app;

    /**
     * @var string $url
     *
     * @orm:Column(name="url", type="string", length=255, nullable=false)
     */
    private $url;

    /**
     * @var string $culture
     *
     * @orm:Column(name="culture", type="string", length=15, nullable=false)
     */
    private $culture;

    /**
     * @var DmUser
     *
     * @orm:ManyToOne(targetEntity="DmUser")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}