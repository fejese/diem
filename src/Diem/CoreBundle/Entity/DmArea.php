<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmArea
 *
 * @orm:Table(name="dm_area")
 * @orm:Entity
 */
class DmArea
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
     * @var string $type
     *
     * @orm:Column(name="type", type="string", length=255, nullable=false)
     */
    private $type;

    /**
     * @var DmLayout
     *
     * @orm:ManyToOne(targetEntity="DmLayout")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_layout_id", referencedColumnName="id")
     * })
     */
    private $dmLayout;

    /**
     * @var DmPageView
     *
     * @orm:ManyToOne(targetEntity="DmPageView")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_page_view_id", referencedColumnName="id")
     * })
     */
    private $dmPageView;


}