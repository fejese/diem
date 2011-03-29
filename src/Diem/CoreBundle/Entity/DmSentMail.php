<?php

namespace Diem\CoreBundle\Entity;

/**
 * Diem\CoreBundle\Entity\DmSentMail
 *
 * @orm:Table(name="dm_sent_mail")
 * @orm:Entity
 */
class DmSentMail
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
     * @var string $strategy
     *
     * @orm:Column(name="strategy", type="string", length=255, nullable=true)
     */
    private $strategy;

    /**
     * @var string $transport
     *
     * @orm:Column(name="transport", type="string", length=255, nullable=true)
     */
    private $transport;

    /**
     * @var string $culture
     *
     * @orm:Column(name="culture", type="string", length=16, nullable=true)
     */
    private $culture;

    /**
     * @var text $debugString
     *
     * @orm:Column(name="debug_string", type="text", nullable=true)
     */
    private $debugString;

    /**
     * @var datetime $createdAt
     *
     * @orm:Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var DmMailTemplate
     *
     * @orm:ManyToOne(targetEntity="DmMailTemplate")
     * @orm:JoinColumns({
     *   @orm:JoinColumn(name="dm_mail_template_id", referencedColumnName="id", onDelete="SET NULL")
     * })
     */
    private $dmMailTemplate;


}