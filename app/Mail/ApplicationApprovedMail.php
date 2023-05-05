<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationApprovedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Application $application,
        public $application_link
    ) {}

    public function envelope()
    {
        return new Envelope(
            subject: config('app.name').' | Application Approved',
        );
    }

    public function content()
    {
        return new Content(
            view: 'emails.application-approved',
        );
    }

    public function attachments()
    {
        return [];
    }

    // public function build()
    // {
    //     return $this
    //         ->view([])
    //         ->from('notifications@nepza.online')
    //         ->to('mohd.isma@gmail.com')
    //         ->sendgrid([
    //             'personalizations' => [
    //                 [
    //                     'dynamic_template_data' => [
    //                         'subject' => config('app.name').' | Congratulations! Application Approved',
    //                     ],
    //                 ],
    //             ],
    //             'template_id' => config('services.sendgrid.templates.application_approved_template_id'),
    //             'categories' => ['application-approved'],
    //         ]);
    // }
}
