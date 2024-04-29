<?php
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize($_POST["name"]);
    $jobTitle = sanitize($_POST["jobTitle"]);
    $email = sanitize($_POST["email"]);
    $phone = sanitize($_POST["phone"]);
    $address = sanitize($_POST["address"]);
    $objective = sanitize($_POST["objective"]);
    $education = sanitize($_POST["education"]);
    $experience = sanitize($_POST["experience"]);
    $skills = sanitize($_POST["skills"]);

    // Burada özgeçmiş bilgilerini bir HTML içinde doldurup gösteriyoruz
    echo "<!DOCTYPE html>
    <html lang='tr'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel='stylesheet' href='styles.css'>
        <title>Özgeçmiş - $name</title>
    </head>
    <body onload='window.parent.hideFormAndShowResume();'>
        <div class='Özgeçmiş'>
            <header>
                <h1>$name</h1>
                <h2>$jobTitle</h2>
            </header>
            <main>
                <section id='contact-info'>
                    <h3>İletişim Bilgileri</h3>
                    <p>E-posta: $email</p>
                    <p>Telefon: $phone</p>
                    <p>Adres: $address</p>
                </section>
                <section id='objective'>
                    <h3>Hedef</h3>
                    <p>$objective</p>
                </section>
                <section id='education'>
                    <h3>Eğitim</h3>
                    <p>$education</p>
                </section>
                <section id='experience'>
                    <h3>Deneyim</h3>
                    <p>$experience</p>
                </section>
                <section id='skills'>
                    <h3>Yetenekler</h3>
                    <p>$skills</p>
                </section>
            </main>
        </div>
    </body>
    </html>";
}
?>
