<?php

namespace Sendportal\Base\Interfaces;

use Sendportal\Base\Services\Messages\MessageTrackingOptions;

interface MailAdapterInterface
{
    /**
     * Send an email.
     *
     * @param string $fromEmail
     * @param string $toEmail
     * @param string $subject
     * @param MessageTrackingOptions $trackingOptions
     * @param string $content
     *
     * @return string
     */
    public function send(string $fromEmail, string $toEmail, string $subject, MessageTrackingOptions $trackingOptions, string $content): ?string;
}
