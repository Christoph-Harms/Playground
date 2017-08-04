<?php

namespace Playground\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Mail\Contracts\MailerContract;

/**
 * Short description
 *
 * Longer, more detailed description
 *
 * @author Christoph Harms-Ensink
 */
class MailController extends Controller
{
    public function send(Request $request, MailerContract $mailer)
    {
        $recipient = $request->input('recipient');
        $body = $request->input('body');
        $subject = $request->input('subject');

        $mailer->sendHtml($body, $recipient, $subject);
    }
}