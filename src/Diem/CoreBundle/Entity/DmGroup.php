<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmGroup
 *
 * @orm:Table(name="dm_group",uniqueConstraints={
 *  @orm:UniqueConstraint(name="name", columns={"name"})
 * })
 * @orm:Entity
 */
class DmGroup
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
     * @var DmPermission
     *
     * @orm:ManyToMany(targetEntity="DmPermission", inversedBy="dmGroup")
     * @orm:JoinTable(name="dm_group_permission",
     *   joinColumns={
     *     @orm:JoinColumn(name="dm_group_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @orm:JoinColumn(name="dm_permission_id", referencedColumnName="id")
     *   }
     * )
     */
    private $dmPermission;

    /**
     * @var DmUser
     *
     * @orm:ManyToMany(targetEntity="DmUser", mappedBy="dmGroup")
     */
    private $dmUser;

    public function __construct()
    {
        $this->dmPermission = new \Doctrine\Common\Collections\ArrayCollection();
    $this->dmUser = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}