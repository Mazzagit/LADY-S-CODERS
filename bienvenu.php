<?php
// Connexion à la base de données
$servername = "YOUTHCONNEKTPASS";
$username = "votre_nom_utilisateur";
$password = "votre_mot_de_passe";
$dbname = "nom_de_votre_base_de_données";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Traitement du formulaire de connexion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["Email"];
    $password = $_POST["Mot_de_passe"];

    // Vérification si l'utilisateur existe déjà dans la base de données
    $sql = "SELECT * FROM utilisateurs WHERE Email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Utilisateur existe déjà, vérification du mot de passe
        $row = $result->fetch_assoc();
        if ($password == $row["MotDePasse"]) {
            // Mot de passe valide, création de la session et redirection vers la page d'accueil
            session_start();
            $_SESSION["utilisateur_id"] = $row["ID"];
            header("Location: accueil.php");
            exit();
        } else {
            // Mot de passe incorrect, affichage d'un message d'erreur
            $erreur_message = "Mot de passe incorrect";
        }
    } else {
        // Utilisateur n'existe pas, affichage d'un message d'erreur
        $erreur_message = "Utilisateur non trouvé";
    }
}

$conn->close();
?>

<!-- Votre code HTML existant pour le formulaire de connexion -->
<!-- Ajoutez la variable $erreur_message pour afficher les messages d'erreur si nécessaire -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>BIENVENUE</title>
    <style>
         * {
            margin: 0;
            padding: 0;
        }

        body {
margin-top: 25px;
            background-image: url(images/bienvenu.jpg);
            /* ... le reste du code ... */
            background-color: rgba(0, 0, 0, 0);
            /* Couleur de fond transparente */
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Times New Roman', serif;
        }
        
        h1 {
    font-size: 40px;
    color: white;
    margin-top: 200px;
    /* Animation */
    animation: sparkle 2s linear infinite;
}

@keyframes sparkle {
    0% { text-shadow: 0 0 5px #fff; }
    50% { text-shadow: 0 0 20px #fff, 0 0 30px #fff, 0 0 40px #ff00de, 0 0 50px #ff00de, 0 0 60px #ff00de, 0 0 70px #ff00de, 0 0 80px #ff00de; }
    100% { text-shadow: 0 0 5px #fff; }
}


        p {
            font-size: 20px;
            color: white;
        }

        h3 {
            font-size: 25px;
            color: white;
        }

        .glyphicon-pencil {
            font-size: 35px;
            color: white;
            float: right;
            margin-top: 20px;
        }

        .col-md-5 {
            margin-top: 80px;
            box-shadow: -1px 1px 60px 10px black;
            background: rgba(0, 0, 0, 0.4);
        }

        .label {
            font-weight: normal;
            margin-top: 15px;
            color: white;
            font-size: 19px;
        }

        .form-control {
            background: transparent;
            border-radius: 0px;
            border: 0px;
            border-bottom: 1px solid white;
            font-size: 18px;
            margin-top: 15px;
            height: 40px;
            color: white;
        }

        input[type="checkbox"] {
            margin-top: 15px;
            width: 15px;
            height: 15px;
        }

        small {
            font-size: 18px;
            color: white;
        }

        input[type="radio"] {
            margin-top: 25px;
        }

        option {
            color: gray;
        }

        .btn-info {
            margin-top: 21px;
            font-size: 16px;
            width: 120px;
            margin-left: 80px;
            margin-bottom: 20px;
        }

        .btn-warning {
            margin-top: 21px;
            font-size: 16px;
            width: 120px;
            margin-left: 80px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1 class="text">BIENVENUE
                    A <br> YOUTHCONNEKT <br>BURKINA-FASO</h1>
                <p class="text"><em>Retrouvez des opportunités d'emploi, des formations, des amis, créez des liens, des groupes et des équipes pour accroître votre succès.<br>Soyez connectés et restez en contact avec d'autres jeunes.<br> <em>YOUTHCONNEKT_BURKINA-FASO, créé par les jeunes et pour les jeunes.</em></em></p>
            </div>
            <div class="col-md-5">
                <!-- Deuxième colonne pour l'inscription et l'enregistrement -->
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="text-left">Connexion</h3>
                    </div>
                    <div class="col-md-6">
                        <span class="glyphicon glyphicon-pencil"></span>
                    </div>
                </div>
                <hr>
                <!-- Fermeture -->
                <!-- Faire une colonne pour le texte et le formulaire -->
                <div class="row">
                    <label for="" class="label col-md-2 control-label">E-mail</label>
                    <div class="col-md-10">
                        <input type="Email" class="form-control" name="Email" placeholder="E-mail">
                    </div>
                </div>
                <br>
                <div class="row">
                    <label for="" class="label col-md-2 control-label">Password</label>
                    <div class="col-md-10">
                        <input type="Mot_de_passe" class="form-control" name="Mot_de_passe" placeholder="Mot_de_passe">
                        <input type="checkbox"> <small>Se souvenir de moi</small>
                    </div>
                </div>
                <div class="row">
                    <label for="" class="label col-md-2 control-label">Message</label>
                    <div class="col-md-10">
                       <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="row">
                    <label class="label col-md-2 control-label">Genre</label>
                    <div class="col-md-10">
                        <input type="radio" name="gn" value="Homme"> <small>Homme</small>
                        <input type="radio" name="gn" value="Femme"> <small>Femme</small>
                    </div>
                </div>
                <div class="row">
                    <label class="label col-md-2 control-label">Pays</label>
                    <div class="col-md-10">
                        <select class="form-control">
                            <option>BURKINA-FASO</option>
                            <option>CAMEROUN</option>
                            <option>CONGO</option>
                            <option>GHANA</option>
                            <option>RWANDA</option>
                            <option>GAMBIE</option>
                            <option>GUINEE</option>
                            <option>LIBERIA</option>
                            <option>MADAGASCAR</option>
                            <option>CAP VERT</option>
                            <option>TOGO</option>
                            <option>SIERRA LEONE</option>
                            <option>SAO TOME-ET-PRINCIPE</option>
                            <option>REPUBLIQUE DU CONGO</option>
                            <option>REPUBLIQUE DEMOCRATIQUE DU CONGO</option>
                            <option>ZAMBIE</option>
                            <option>ZIMBABWE</option>
                        </select>
                    </div>
                </div>
                <a href="index.php" class="btn btn-info" href="page-inscription.html">connexion</a>
                <a href="inscription.php" class="btn btn-info" href="page-inscription.html">S'inscrire</a>
                <!--fin-->
            </div>
        </div>
    </div>
</body>

</html>