<?php
namespace CloudStorage\FileSystem\Files\Images;

use CloudStorage\FileSystem\Files\Contracts\ImageContract;
use CloudStorage\Mail\Mailer;

class Jpeg implements ImageContract{
    public function getDimention(){
        echo "100*100 \n";
        $mailer = new Mailer();
        $mailer->sendMail();
    }
}