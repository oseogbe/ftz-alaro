<?php

namespace App\Mail;

use App\Models\Application;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ApplicationDeclinedMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public Application $application
    ) {}

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: config('app.name').' | Application Declined',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.application-declined',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
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
    //                         'subject' => config('app.name').' | Application Declined',
    //                     ],
    //                 ],
    //             ],
    //             'template_id' => config('services.sendgrid.templates.application_declined_template_id'),
    //             'categories' => ['application-declined'],
    //         ]);
    // }
}
