<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmPageView
 *
 * @orm:Table(name="dm_page_view")
 * @orm:Entity
 */
class DmPageView
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
     * @var DmPage
     *
     * @orm:ManyToOne(targetEntity="DmPage")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_page_id", referencedColumnName="id")
     * })
     */
    private $dmPage;

    /**
     * @var DmLayout
     *
     * @orm:ManyToOne(targetEntity="DmLayout")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_layout_id", referencedColumnName="id")
     * })
     */
    private $dmLayout;


}