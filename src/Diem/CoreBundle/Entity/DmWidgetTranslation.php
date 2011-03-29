<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmWidgetTranslation
 *
 * @orm:Table(name="dm_widget_translation")
 * @orm:Entity
 */
class DmWidgetTranslation
{
    /**
     * @var bigint $dmWidgetId
     *
     * @orm:Column(name="dm_widget_id", type="bigint", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $dmWidgetId;

    /**
     * @var string $lang
     *
     * @orm:Column(name="lang", type="string", length=2, nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $lang;

    /**
     * @var text $value
     *
     * @orm:Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var DmWidget
     *
     * @orm:ManyToOne(targetEntity="DmWidget")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_widget_id", referencedColumnName="id", nullable=false, onDelete="CASCADE", onUpdate="CASCADE")
     * })
     */
    private $dmWidget;


}