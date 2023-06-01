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
    <link rel="stylesheet" href="css/documenten.css">

</head>
<body>

    <!-- Navmenu -->
    <?php include('navmenu.php'); ?>

    <!-- HTML -->
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <h4>U moet inloggen voordat u deze pagina kan weergeven!</h4>
            </div>
        </div>

        <form method="post">
            <div class="mt-3">
            <label class="form-label">Gebruikersnaam</label>
            <input type="text" name="gebruikersnaam" class="form-control" value="J_Bond">
            </div>

            <div class="mt-3">
            <label class="form-label">Wachtwoord</label>
            <input type="password" name="wachtwoord" class="form-control" value="NulNulZeven!">
            </div>

            <button type="submit" name="submit" class="btn btn-primary mt-3">Inloggen</button>

        </form>
    </div>

    <div class="container">
        <?php
            if(isset($_POST['submit'])) {

                $gebruikersnaam = htmlspecialchars($_POST['gebruikersnaam']);
                $wachtwoord = htmlspecialchars($_POST['wachtwoord']);
                $hardcodedPassword = password_hash("NulNulZeven!", PASSWORD_DEFAULT);

                if($gebruikersnaam == "J_Bond" && password_verify($wachtwoord, $hardcodedPassword)) {
                    header("Location: bestanden");
                } else {
                    echo "<p><br>Uw gebruikersnaam of wachtwoord is incorrect!<br></p>";
                }
            }
        ?>
    </div>

    <!-- Bootstrap 5 Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>