function languageen() {
    document.getElementById("banner_text").innerHTML = 'Everything you\'ll ever want';
    document.getElementById("log").innerHTML = "Login / <br> Register";
    console.log("English");
    document.getElementsByName("search")[0].placeholder='Search';
}

function languagepl() {
    document.getElementById("banner_text").innerHTML = 'Wszystko czego kiedykolwiek <br> możesz zapragnąć';
    document.getElementById("log").innerHTML = "Logowanie / <br> Rejestracja";
    console.log("Polish");
    document.getElementsByName("search")[0].placeholder='Szukaj';
}