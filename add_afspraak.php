<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="sunny.png">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond|Open+Sans&display=swap" rel="stylesheet">
    <title>Afspraak maken</title>
    <link type="text/css" rel="stylesheet" href="style.css"/>
    <script src="java.js"> </script>
</head>
<body>
        <div class="loginbox2">
            <form action="http://localhost:1234/zienzijn/afspraak_added.php" method="post">
                <h2>Afspraak maken</h2>
                    <p>Voornaam:
                        <input type="text" name="input_first_name" size="30" value="" />
                    </p>

                    <p>Achternaam:
                        <input type="text" name="input_last_name" size="30" value="" />
                    </p>

                    <p>Persoon:
                        <select id="adult_select" name="input_adult" onchange="myFunction()">
                            <option value="kind">Kind</option>
                            <option value="volwassene">Volwassene</option>
                        </select>
                    </p>

                        <p id="demo"></p>

                    <p>Email:
                        <input type="text" name="input_email" size="30" value="" />
                    </p>

                    <p>Telefoon*:
                        <input type="tel" id="phone" name="input_phone" pattern="[0-9]{10}"
                               oninvalid="setCustomValidity('Please fill in a 10-digit phone number.')"
                               oninput="setCustomValidity('')"  required/>
                    </p>

                    <p>Soort afspraak:
                        <select id="type_appointment_select" name="input_type_appointment" onchange="myFunction1()">
                            <option value="training">Training</option>
                            <option value="workshop">Workshop</option>
                        </select>
                    </p>

                    <p>Opmerking:
                        <textarea id="msg" name="input_msg">Vul hier eventueel een bericht toe.</textarea>
                    </p>

                    <p>Datum:
                        <input type="date" id="date" name="input_date_appointment"
                               value= "<?php echo date('Y-m-d'); ?>"
                               min= "<?php echo date('Y-m-d'); ?>" max="<?= $date_then; ?>" required>
                    </p>

                    <p>Tijdstip:
                        <select name="input_time_appointment">
                            <option value="13:00">13:00 - 14:00</option>
                            <option value="14:00">14:00 - 15:00</option>
                            <option value="15:00">15:00 - 16:00</option>
                            <option value="16:00">16:00 - 17:00</option>
                            <option value="17:00">17:00 - 18:00</option>
                        </select>
                    </p>

                    <p>
                        <input type="submit" name="submit" value="Send" />
                    </p>
            </form>
        </div>
</body>
</html>