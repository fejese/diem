<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmUser
 *
 * @orm:Table(name="dm_user",
 * indexes={
 *  @orm:index(name="is_active", columns={"is_active"})},
 * uniqueConstraints={
 *  @orm:UniqueConstraint(name="username", columns={"username"}),
 *  @orm:UniqueConstraint(name="email", columns={"email"}),
 *  @orm:UniqueConstraint(name="forgot_password_code", columns={"forgot_password_code"})
 * })
 * @orm:Entity
 */
class DmUser
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
     * @var string $username
     *
     * @orm:Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string $email
     *
     * @orm:Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string $algorithm
     *
     * @orm:Column(name="algorithm", type="string", length=128, nullable=false)
     */
    private $algorithm = 'sha1';

    /**
     * @var string $salt
     *
     * @orm:Column(name="salt", type="string", length=128, nullable=true)
     */
    private $salt;

    /**
     * @var string $password
     *
     * @orm:Column(name="password", type="string", length=128, nullable=true)
     */
    private $password;

    /**
     * @var boolean $isActive
     *
     * @orm:Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = true;

    /**
     * @var boolean $isSuperAdmin
     *
     * @orm:Column(name="is_super_admin", type="boolean", nullable=false)
     */
    private $isSuperAdmin = false;

    /**
     * @var datetime $lastLogin
     *
     * @orm:Column(name="last_login", type="datetime", nullable=true)
     */
    private $lastLogin;

    /**
     * @var string $forgotPasswordCode
     *
     * @orm:Column(name="forgot_password_code", type="string", length=12, nullable=true)
     */
    private $forgotPasswordCode;

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
     * @orm:ManyToMany(targetEntity="DmGroup", inversedBy="dmUser")
     * @orm:JoinTable(name="dm_user_group",
     *   joinColumns={
     *     @orm:JoinColumn(name="dm_user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @orm:JoinColumn(name="dm_group_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *   }
     * )
     */
    private $dmGroup;

    /**
     * @var DmPermission
     *
     * @orm:ManyToMany(targetEntity="DmPermission", inversedBy="dmUser")
     * @orm:JoinTable(name="dm_user_permission",
     *   joinColumns={
     *     @orm:JoinColumn(name="dm_user_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *   },
     *   inverseJoinColumns={
     *     @orm:JoinColumn(name="dm_permission_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     *   }
     * )
     */
    private $dmPermission;

    public function __construct()
    {
        $this->dmGroup = new \Doctrine\Common\Collections\ArrayCollection();
    $this->dmPermission = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
}