<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmMailTemplateTranslation
 *
 * @orm:Table(name="dm_mail_template_translation")
 * @orm:Entity
 */
class DmMailTemplateTranslation
{
    /**
     * @var bigint $dmMailTemplateId
     *
     * @orm:Column(name="dm_mail_template_id", type="bigint", nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $dmMailTemplateId;

    /**
     * @var string $lang
     *
     * @orm:Column(name="lang", type="string", length=2, nullable=false)
     * @orm:Id
     * @orm:GeneratedValue(strategy="NONE")
     */
    private $lang;

    /**
     * @var text $description
     *
     * @orm:Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var text $subject
     *
     * @orm:Column(name="subject", type="text", nullable=false)
     */
    private $subject;

    /**
     * @var text $body
     *
     * @orm:Column(name="body", type="text", nullable=false)
     */
    private $body;

    /**
     * @var text $fromEmail
     *
     * @orm:Column(name="from_email", type="text", nullable=false)
     */
    private $fromEmail;

    /**
     * @var text $toEmail
     *
     * @orm:Column(name="to_email", type="text", nullable=true)
     */
    private $toEmail;

    /**
     * @var text $ccEmail
     *
     * @orm:Column(name="cc_email", type="text", nullable=true)
     */
    private $ccEmail;

    /**
     * @var text $bccEmail
     *
     * @orm:Column(name="bcc_email", type="text", nullable=true)
     */
    private $bccEmail;

    /**
     * @var text $replyToEmail
     *
     * @orm:Column(name="reply_to_email", type="text", nullable=true)
     */
    private $replyToEmail;

    /**
     * @var text $senderEmail
     *
     * @orm:Column(name="sender_email", type="text", nullable=true)
     */
    private $senderEmail;

    /**
     * @var text $listUnsuscribe
     *
     * @orm:Column(name="list_unsuscribe", type="text", nullable=true)
     */
    private $listUnsuscribe;

    /**
     * @var boolean $isHtml
     *
     * @orm:Column(name="is_html", type="boolean", nullable=false)
     */
    private $isHtml = false;

    /**
     * @var boolean $isActive
     *
     * @orm:Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive = true;

    /**
     * @var DmMailTemplate
     *
     * @orm:ManyToOne(targetEntity="DmMailTemplate")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_mail_template_id", referencedColumnName="id", nullable=false, onDelete="CASCADE", onUpdate="CASCADE")
     * })
     */
    private $dmMailTemplate;


}