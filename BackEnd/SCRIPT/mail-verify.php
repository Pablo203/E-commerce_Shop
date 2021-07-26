<?php
$to = $email;
$subject = "Dream account verification email";


$message = '
http://localhost/sistema/verify.php?email='.$email.'&code='.$VerCode.'

<!-- Footer Segment Area Start -->
<footer class="jumbotron-fluid footer">
        <div class="col-lg-4 col-sm-2 col-xs-2"></div>
        <div class="col-lg-4 col-sm-9 col-xs-9">
            <p class="footer-text">
                <div class="col-sm-6">
                    Kontakt z nami:<br><br>
                    <b>Email:</b><br>
                    example@gmail.com<br>
                    <b>Telefon:</b><br>
                    +48 912 912 912<br>
                    <b>Adres:</b><br>
                    Ul. Polna 12 44-928
                </div>
            </p>
        </div>
    </div>
</footer>
<!-- Footer Segment Area End -->
';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no-reply@dream.com>' . "\r\n";

if(mail($to,$subject,$message,$headers)) {
    echo 'mail send!';
} else {
    echo 'you have made a mistake';
}
?>