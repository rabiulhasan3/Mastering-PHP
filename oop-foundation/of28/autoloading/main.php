<?php
namespace CloudStorage;

include 'autoload.php';

use CloudStorage\FileSystem\Files\Images\Jpeg;
use CloudStorage\FileSystem\Scanner;
use CloudStorage\Mail\Mailer;

class Main {
    public function __construct() {
        $mail = new Mailer();
        $mail->sendMail();

        $scan = new Scanner();
        $scan->scan();

        $jpeg = new Jpeg();
        $jpeg->getDimention();
    }
}
new Main();