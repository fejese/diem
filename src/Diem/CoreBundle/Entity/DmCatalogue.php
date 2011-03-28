<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmCatalogue
 *
 * @orm:Table(name="dm_catalogue")
 * @orm:Entity
 */
class DmCatalogue
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
     * @orm:Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string $sourceLang
     *
     * @orm:Column(name="source_lang", type="string", length=15, nullable=false)
     */
    private $sourceLang;

    /**
     * @var string $targetLang
     *
     * @orm:Column(name="target_lang", type="string", length=15, nullable=false)
     */
    private $targetLang;


}