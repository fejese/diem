<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmSettingTranslation
 *
 * @orm:Table(name="dm_setting_translation")
 * @orm:Entity
 */
class DmSettingTranslation
{
    /**
     * @var bigint $dmSettingId
     *
     * @orm:Column(name="dm_setting_id", type="bigint", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $dmSettingId;

    /**
     * @var string $lang
     *
     * @orm:Column(name="lang", type="string", length=2, nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $lang;

    /**
     * @var string $description
     *
     * @orm:Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var text $value
     *
     * @orm:Column(name="value", type="text", nullable=true)
     */
    private $value;

    /**
     * @var text $defaultValue
     *
     * @orm:Column(name="default_value", type="text", nullable=true)
     */
    private $defaultValue;

    /**
     * @var DmSetting
     *
     * @orm:ManyToOne(targetEntity="DmSetting")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_setting_id", referencedColumnName="id")
     * })
     */
    private $dmSetting;


}