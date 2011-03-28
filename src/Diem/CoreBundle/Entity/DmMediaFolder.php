<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmMediaFolder
 *
 * @orm:Table(name="dm_media_folder")
 * @orm:Entity
 */
class DmMediaFolder
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
     * @var string $relPath
     *
     * @orm:Column(name="rel_path", type="string", length=255, nullable=false)
     */
    private $relPath;

    /**
     * @var integer $lft
     *
     * @orm:Column(name="lft", type="integer", nullable=true)
     */
    private $lft;

    /**
     * @var integer $rgt
     *
     * @orm:Column(name="rgt", type="integer", nullable=true)
     */
    private $rgt;

    /**
     * @var smallint $level
     *
     * @orm:Column(name="level", type="smallint", nullable=true)
     */
    private $level;


}