<?php

namespace Book\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ApprovedOrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order;
    public $orderDetails;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order, $orderDetails)
    {
        $this->order        = $order;
        $this->orderDetails = $orderDetails;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.approved_order');
    }
}
