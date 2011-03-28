<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmLayout
 *
 * @orm:Table(name="dm_layout")
 * @orm:Entity
 */
class DmLayout
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
     * @var string $template
     *
     * @orm:Column(name="template", type="string", length=255, nullable=false)
     */
    private $template;

    /**
     * @var string $cssClass
     *
     * @orm:Column(name="css_class", type="string", length=255, nullable=true)
     */
    private $cssClass;


}