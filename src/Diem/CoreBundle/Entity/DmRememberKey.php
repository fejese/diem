<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmRememberKey
 *
 * @orm:Table(name="dm_remember_key")
 * @orm:Entity
 */
class DmRememberKey
{
    /**
     * @var string $ipAddress
     *
     * @orm:Column(name="ip_address", type="string", length=50, nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="AUTO")
     */
    private $ipAddress = '';

    /**
     * @var string $rememberKey
     *
     * @orm:Column(name="remember_key", type="string", length=32, nullable=true)
     */
    private $rememberKey;

    /**
     * @var datetime $createdAt
     *
     * @orm:Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var DmUser
     *
     * @orm:ManyToOne(targetEntity="DmUser")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * })
     */
    private $dmUser;


}