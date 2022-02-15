
<?php

use PHPMailer\PHPMailer\PHPMailer;

class SendMessage
{
    public $name;
    public $message;

    function __construct()
    {
        $this->name = $_POST["name"];
        $this->email = $_POST["email"];
        $this->message = $_POST["message"];
    }

    public function sendEmail()
    {
        if (!empty($this->name) && !empty($this->message) && !empty($this->email)) {

            require "vendor/autoload.php";
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->SMTPAuth = true;

            $mail->Username = "zeka.feedback@gmail.com";
            $mail->Password = "g1zeka82";

            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            
            $mail->IsHTML(true);
            $mail->From = "zeka.feedback@gmail.com";

            $mail->FromName = "Enviar Email com PHP-Mailer";
            $mail->Subject =  $this->name;
            $mail->Body = $this->message;
            $mail->CharSet="UTF-8";

            $mail->AddAddress($this->email);

            if ($mail->Send()) {
                echo "<script>open()</script>";
            } else {
                echo '<script>showSendError();</script>';
            }
        } else {
            echo '<script>showError();</script>';
        }
    }
}
?>


