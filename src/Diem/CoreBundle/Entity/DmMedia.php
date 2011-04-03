<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmMedia
 *
 * @orm:Table(name="dm_media",uniqueConstraints={
 *  @orm:UniqueConstraint(name="media_folder", columns={"dm_media_folder_id", "file"})
 * })
 * @orm:Entity
 */
class DmMedia
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
     * @var string $file
     *
     * @orm:Column(name="file", type="string", length=255, nullable=false)
     */
    private $file;

    /**
     * @var string $legend
     *
     * @orm:Column(name="legend", type="string", length=255, nullable=true)
     */
    private $legend;

    /**
     * @var string $author
     *
     * @orm:Column(name="author", type="string", length=255, nullable=true)
     */
    private $author;

    /**
     * @var string $license
     *
     * @orm:Column(name="license", type="string", length=255, nullable=true)
     */
    private $license;

    /**
     * @var string $mime
     *
     * @orm:Column(name="mime", type="string", length=63, nullable=false)
     */
    private $mime;

    /**
     * @var integer $size
     *
     * @orm:Column(name="size", type="integer", nullable=true)
     */
    private $size;

    /**
     * @var string $dimensions
     *
     * @orm:Column(name="dimensions", type="string", length=15, nullable=true)
     */
    private $dimensions;

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
     * @var DmMediaFolder
     *
     * @orm:ManyToOne(targetEntity="DmMediaFolder")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_media_folder_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * })
     */
    private $dmMediaFolder;


}