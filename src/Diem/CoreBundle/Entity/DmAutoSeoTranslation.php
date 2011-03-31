<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmAutoSeoTranslation
 *
 * @orm:Table(name="dm_auto_seo_translation")
 * @orm:Entity
 */
class DmAutoSeoTranslation
{
    /**
     * @var bigint $dmAutoSeoId
     *
     * @orm:Column(name="dm_auto_seo_id", type="bigint", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $dmAutoSeoId;

    /**
     * @var string $lang
     *
     * @orm:Column(name="lang", type="string", length=2, nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $lang;

    /**
     * @var string $slug
     *
     * @orm:Column(name="slug", type="string", length=255, nullable=false)
     */
    private $slug;

    /**
     * @var string $name
     *
     * @orm:Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string $title
     *
     * @orm:Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string $h1
     *
     * @orm:Column(name="h1", type="string", length=255, nullable=true)
     */
    private $h1;

    /**
     * @var string $description
     *
     * @orm:Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string $keywords
     *
     * @orm:Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords;

    /**
     * @var text $stripWords
     *
     * @orm:Column(name="strip_words", type="text", nullable=true)
     */
    private $stripWords;

    /**
     * @var DmAutoSeo
     *
     * @orm:ManyToOne(targetEntity="DmAutoSeo")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_auto_seo_id", referencedColumnName="id", nullable=false, onDelete="CASCADE", onUpdate="CASCADE")
     * })
     */
    private $dmAutoSeo;


}