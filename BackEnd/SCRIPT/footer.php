<?php
echo '
<footer class="jumbotron-fluid footer">
<div class="row">
    <div class="col-lg-1 col-sm-1 col-xs-1"></div>
    <div class="col-lg-3 col-sm-6 col-xs-6">
        <form action="http://localhost/sistema/SCRIPT/mail-us.php" method="POST">
            <div class="form-group">
                <p class="footer-text">
                    <div class="col-sm-6 col-lg-12">
                        <label for="footer-email">Adres Email</label>
                        <input type="email" name="email-sender" class="form-control" id="footer-email" placeholder="Adres Email"
                            size="30" required>
                    </div>

                    <div class="col-lg-6 col-lg-12">
                        <label for="exampleFormControlTextarea1">Wiadomość</label>
                        <textarea name="mail-content" class="form-control textarea" id="exampleFormControlTextarea1" rows="5"
                            cols="3" size="20" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></textarea>
                    </div>
                    <div class="col-lg-6 col-lg-12">
                        <button type="submit" name="send-mail" class="btn btn-light justify-content-center">Wyślij</button>
                    </div>
                </p>
            </div>
        </form>
    </div>
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
';
?>