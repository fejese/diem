<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmPermission
 *
 * @orm:Table(name="dm_permission")
 * @orm:Entity
 */
class DmPermission
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
     * @var string $name
     *
     * @orm:Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var text $description
     *
     * @orm:Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @var DmGroup
     *
     * @orm:ManyToMany(targetEntity="DmGroup", mappedBy="dmPermission")
     */
    private $dmGroup;

    /**
     * @var DmUser
     *
     * @orm:ManyToMany(targetEntity="DmUser", mappedBy="dmPermission")
     */
    private $dmUser;

    public function __construct()
    {
        $this->dmGroup = new \Doctrine\Common\Collections\ArrayCollection();
    $this->dmUser = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}