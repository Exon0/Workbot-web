<?php

namespace App\Service;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerService
{
    private $mailer;
    public function __construct(MailerInterface $mailer){$this->mailer=$mailer;}
    #[Route('/email', name: 'app_reclamation_mail')]
    public function sendEmail($to,$content): void
    {
        $email = (new Email())
            ->from('youcef.jebahi@esprit.tn')
            ->to($to)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Reclamation')
            ->text('Sending emails is fun again!')
            ->html($content);
        $this->mailer->send($email);
    }
}