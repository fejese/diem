<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmPageTranslation
 *
 * @orm:Table(name="dm_page_translation")
 * @orm:Entity
 */
class DmPageTranslation
{
    /**
     * @var bigint $dmPageId
     *
     * @orm:Column(name="dm_page_id", type="bigint", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $dmPageId;

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
     * @orm:Column(name="title", type="string", length=255, nullable=true)
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
     * @var string $autoMod
     *
     * @orm:Column(name="auto_mod", type="string", length=6, nullable=false)
     */
    private $autoMod = 'snthdk';

    /**
     * @var boolean $isActive
     *
     * @orm:Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = true;

    /**
     * @var boolean $isSecure
     *
     * @orm:Column(name="is_secure", type="boolean", nullable=false)
     */
    private $isSecure = false;

    /**
     * @var boolean $isIndexable
     *
     * @orm:Column(name="is_indexable", type="boolean", nullable=false)
     */
    private $isIndexable = true;

    /**
     * @var DmPage
     *
     * @orm:ManyToOne(targetEntity="DmPage")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_page_id", referencedColumnName="id", nullable=false, onDelete="CASCADE", onUpdate="CASCADE")
     * })
     */
    private $dmPage;


}