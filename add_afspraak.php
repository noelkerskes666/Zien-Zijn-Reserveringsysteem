<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="sunny.png">
    <title>Zien & Zijn</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="java.js"> </script>
</head>
<body>
    <div class="topnav" id="myTopnav">
        <a href="index.php"class="active">Home</a>
        <a href="mindfulness.php" class="active">Mindfulness</a>
        <a href="yinyoga.php"class="active">Yin yoga</a>
        <a href="add_afspraak.php" style="background: limegreen" class="active">Reserveren</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <div class="content">
        <h1> Reserveren of afspraak maken </h1>
        <img src='mindfoes2.JPG'/>
    </div>
    <div class="content3">
        <h2>  <i> Pracktishe informatie </i> </h2>
    </div>
    <div class="flex-container6">
        <div> <p3> <b>Mindfulness</b> </p3>
            <p> Start wekelijks donderdag vanaf 11-2-2021 </p>
            <p> 19:00-20:00 uur en 20:00-21:00 uur </p>
            <p> Locatie: SiSu Centrum </p>
            <p> Meerwedesingel 48 </p>
            <p> 2993 TG Barendrecht </p>
            <p> Kosten € 10,00 per les (eerste les gratis) </p>
            <p> € 100,00 per 3 maanden, 13 lessen </p>
        </div>
        <div>
            <img src='boeddha%201.jpg'/>
            <p3> <b>Aanmelden</b> </p3>
            <p> Meld je van te voren aan (liefst 5 dagen),
                door een mailtje te sturen naar info@mindfulness-barendrecht.nl of stuur een berichtje naar Monica (06-11073140).
            </p>
        </div>
        <div> <p3> <b> Yin Yoga </b> </p3>
            <p> Start wekelijks dinsdag en vrijdag vanaf 9-2-2020 </p>
            <p> 19:30-21:30 uur </p>
            <p> Locatie: SiSu Centrum </p>
            <p> Meerwedesingel 48 </p>
            <p> 2993 TG Barendrecht </p>
            <p> Kosten € 12,50 per les (eerste les gratis) </p>
            <p> € 125,00 per 3 maanden, 13 lessen </p>
        </div>
    </div>
    <div class="content3">
        <h2> <i> Reserveren </i> </h2>
    </div>
    <div class="flex-container5">
        <div>
             <img src='monk2.webp' class="img1"/>
        </div>
        <div>
        <form action="http://localhost/zienzijn/afspraak_added.php" method="post">
            <h2> Afspraak maken </h2>
                <p> Voornaam:
                    <input type="text" name="input_first_name" size="21" value="" />
                </p>
                <p> Achternaam:
                    <input type="text" name="input_last_name" size="19" value="" />
                </p>
                    <p id="demo"></p>
                <p> Telefoon*:
                    <input type="tel" id="phone" name="input_phone" pattern="[0-9]{10}"
                           oninvalid="setCustomValidity('Please fill in a 10-digit phone number.')"
                           oninput="setCustomValidity('')"  required/>
                </p>
                <p> Email:
                    <input type="text" name="input_email" size="25" value="" />
                </p>
                <p> Soort training:
                    <select id="type_appointment_select" name="input_type_appointment" onchange="myFunction1()">
                        <option value="Ying-Yoga les">Ying-Yoga les</option>
                        <option value="Mindfulness les">Mindfulness les</option>
                    </select>
                </p>
                <p> Datum:
                    <input type="date" id="date" name="input_date_appointment"
                           value= "<?php echo date('Y-m-d'); ?>"
                           min= "<?php echo date('Y-m-d'); ?>" max="<?= $date_then; ?>" required>
                </p>

                <p> Tijdstip:
                    <select name="input_time_appointment">
                        <option value="13:00">19:00 - 20:00</option>
                        <option value="14:00">19:30 - 20:30</option>
                        <option value="15:00">20:00 - 21:00</option>
                    </select>
                </p>
                <p>
                    <input type="submit" name="submit" value="Send" id="submit"/>
                </p>
        </form>
        </div>
    </div>
    <div class="content3">
        <h2> <i>Direct Contact</i> </h2>
    </div>
    <div style="border-left: 1px solid black;" class="flex-container3">
        <div>
            <img src="buddha1.jpg" class="img1" />
        </div>
        <div>
            <p2> <b> Naam: </b>Monica Kerskes </p2>
            <br>
            <p2> <b> Telefoon:</b>06-11073140 </p2>
            <br>
            <p2> <b> Mail:</b>info@mindfulness-barendrecht.nl </p2>
            <p2> <b> locatie:</b>Meerwedesingel 48, Barendrecht </p2>
            <br>
            <p> Heb je vragen, opmerkingen of wil je graag meer informatie over Zien en Zijn Mindfulness? Neem gerust contact met ons op. </p>
        </div>
    </div>
    <script type="text/javascript" src="java.js"> </script>
    <footer>
        <div class="footer3">
            <p1> ZIEN & ZIJN MINDFULNESS </p1>
            <p1>locatie:  Praktijk Centrum Carnisse </p1>
            <p1> Middeldijkerplein 3A, Barendrecht </p1>
            <p1> E-mail: info@mindfulness-barendrecht.nl </p1>
            <p1> Tel: 06-11073140 (Monica) </p1>
            <p1> KvK: 53674480, Vestigingsnummer: 000023538023 </p1>
            <p1> BTWnr: 850971287B01 </p1>
            <p1> Bank: NL10 INGB 0758 0216 66 </p1>
        </div>
        <div class="footer2">
            <p1> Designed door Ramon Grava en Noël Kerskes | Copyright 2015-2021 Zien en Zijn | Alle rechten voorbehouden | Privacyverklaring </p1>
        </div>
    </footer>
</body>
</html>