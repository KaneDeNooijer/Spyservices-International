<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spyservices International</title>

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/contact.css">

</head>

<body>

    <!-- Navmenu -->
    <?php include('navmenu.php'); ?>

    <!-- HTML -->
    <div class="container dark-blue mt-3">
        <div class="row gx-5">
            <div class="col-lg mt-5">
                <h4>BEZOEKADRES</h4>

                <h5>Van Moerkerkstraat 21<br>
                    1024 DG Amsterdam<br><br>
                    Tel. 020 123 456 78<br>
                    info@spyservices-int.nl<br><br>
                    KvK. 123 456 789</h5>
            </div>

            <div class="col-lg mt-5">
                <h4>CONTACTFORMULIER</h4>

                <form class="bg-white p-4" method="post">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form4Example1" class="form-control" placeholder="Naam" name="naam"/>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form4Example2" class="form-control" placeholder="Email" name="email"/>
                    </div>

                    <!-- Phone number input -->
                    <div class="form-outline mb-4">
                        <input type="tel" id="form4Example2" class="form-control" placeholder="Telefoonnummer" name="telnr"/>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <textarea class="form-control" id="form4Example3" rows="4" placeholder="Bericht" name="bericht"></textarea>
                    </div>

                    <!-- Submit button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-block" name="submit">Verstuur</button>
                    </div>
                </form>
            </div>

            <div class="col-lg my-5">
                <h4>LOCATIE</h4>

                <img src="images/map.png" alt="Image of a map" class="img-fluid w-100">
            </div>
        </div>

        <div class="container mt-3">
            <?php
                if(isset($_POST['submit'])) {

                    function getUserIP() {
                        $ip = isset($_SERVER['HTTP_CLIENT_IP']) 
                            ? $_SERVER['HTTP_CLIENT_IP'] 
                            : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) 
                            ? $_SERVER['HTTP_X_FORWARDED_FOR'] 
                            : $_SERVER['REMOTE_ADDR']);

                        return $ip;
                    }

                    $naam = htmlspecialchars($_POST['naam']);
                    $email = htmlspecialchars($_POST['email']);
                    $telnr = htmlspecialchars($_POST['telnr']);
                    $bericht = htmlspecialchars($_POST['bericht']);
                    $ip = getUserIP();

                    echo "<h5>Naam: $naam<br><br>";
                    echo "Email: $email<br><br>";
                    echo "Telefoonnummer: $telnr<br><br>";
                    echo "Bericht: $bericht<br><br>";
                    echo "IP: $ip<br><br></h5>";

                }
            ?>
        </div>

        <!-- Bootstrap 5 Script -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>