 <?php
 include "config/connexion.php";
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\style_axe.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        header {
    width: 100%;
    height: 80vh;
    background: url(http://www.volvobuses.com/content/dam/volvo-buses/markets/master/coaches/complete-coaches/2326x800_Coach_buses_Top_image.jpg) no-repeat;
    background-size:cover;
}
nav {
    position: fixed;
    width: 100%;
}
nav ul {
    padding: 0;
    text-align: center;
    margin: 0;
}
nav ul li {
   display: inline-block;
   padding: 20px;
}
nav ul li a {
    text-decoration: none;
    color: #ffffff;
    font-size: 20px;
}
a {
    color: #ffffff;
}
a:hover {
    color: #EFAD10;
}
.logo {
    position: fixed;
    float: left;
    margin: 16px 36px;
}
i{
    padding: 10px;
}
.left{
    text-align: left;
    margin: 30px;
}
h3{
    text-align: center;
    padding: 10px;
}
form.formulaire{
    max-width: 550px;
    margin: 0 auto;
    
}
form h1{
    font-size: 30px;
    border-bottom: 2px solid #6d777a;
    padding: 10px;
}
form{
    max-width: 550px;
    margin: 0 auto;
    background: #EFAD10;
    padding: 20px;
    border-radius: 5px;
    display: flex;
    flex-direction: column;
    box-shadow: 10px 10px 50px 1px black;
    margin-bottom: 30px;
    margin-top: 50px;
    
}
form.groupe, .input,
.msg textarea{
    margin: 10px 0;
    background: transparent;
    border: 0;
    border-bottom: 2px solid #6d777a;
    resize: none;
    padding: 10px;
    width: 100%;
}
button{
    border: 2px solid #42494b;
    padding: 10px;
    margin: 20px;
    margin-bottom: 30px;
}
    </style>
    <title>Contact</title>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <div class="logo">
                    <img src="ressource/logo.jpg" alt="logo de nour" width="100" height="88">
                </div>
                <div class="menu">
                
                <ul>
                        <a href="index.php"><li>Accueil</li></a>
                        <a href="apropos.html"><li>APropos</li></a>
                        <a href="axe.php"><li>Axe-Routiers</li></a>
                        <a href="service.html"> <li>Service</li></a>
                        <a href="contact.php"><li>Contact</li></a> 
                    </ul>
                </div>
            </nav>
        </header>
        <div class="left">
            <h1>DIRECTION GENERALE :</h1>
            <h2>CONTACT PROFESSIONNEL</h2>
            <p>NOUR TRANSPORT VOYAGEURS</p><br>
            <p><i class="fa-solid fa-location-dot"></i>BP: E2480, Auto Gare Sogoniko, Bd de l'OUA, Bamako-Mali</p><br>
            <p><i class="fa-solid fa-phone"></i>(+223) 20 79 54 22 | 74 00 47 47</p><br>
            <p><i class="fa-solid fa-envelope"></i>nourvoyagers@hotmail.fr | nour@nour-transport.com</p><br><br>
            <h3>CONTACTS DES SERVICES COURRIER</h3>
            <table>
                <thead>
                    <tr>
                        <th>Bamako(Envoi)</th>
                        <th>Bamako(Reception)</th>
                        <th>Gao</th>
                        <th>Nouakchott</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>(+223) 66 75 50 92</td>
                            <td>(+223) 66 75 50 93</td>
                            <td>(+223) 66 75 50 78</td>
                            <td>(+222) 31 30 80 06</td>
                        </tr>
            </table>
        </div>
        <form action="php\form.php" method="post">
            <h1>Formulaire</h1>
            <div class="formulaire">
                <div class="groupe">
                    <label>Nom et Prenom:</label>
                    <input type="text" class="input" name="nom_prenom" id="nom_prenom" placeholder="Votre nom et prenom ici..." required"">
                </div>
                <div class="groupe">
                    <label>Email:</label>
                    <input type="text" class="input" name="email" maxlength="40" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" placeholder="Votre email ici..." required"">
                </div>
                <div class="groupe">
                    <label>Objet:</label>
                    <input type="text" class="input" name="objet" id="objet" placeholder="L'objet ici..." required"">
                </div>
                <div>
                    <label for="myfile">Joindre un fichier:</label>
                    <input type="file" id="myfile" name="fichier"><br><br>
                </div>
                <div class="msg">
                    <label>Message:</label>
                    <textarea name="message" id="message" placeholder="Votre message..."></textarea>
                </div>
                <div class="btn" align="right">
                    <button type="submit">Envoyer</button>
                </div>
            </div>
        </form>
        <div class="maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3893.
            765537877781!2d-7.961677686160389!3d12.597698226383077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
            1!3m3!1m2!1s0xe51cdff812f7583%3A0x8886ea5e82858fb0!2sNOUR%20TRANSPORT%20VOYAGEURS!5e0!3m2!1sfr!2sml!4v1652697937191!5m2!1sfr!2sml"
             width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col">
                        <h4>PAIEMENTS</h4>
                        <ul>
                            <li><a href="#"><img src="ressource/PAIEMENT-ORANGE-MONEY.png" alt="Orange Money" width="50" height="50"></a></li>
                            <li><a href="#"><img src="ressource/mastercard.png" alt="mastercard" width="50" height="50"></a></li>
                            <li><a href="#"><img src="ressource/PayPal-V-300x116.png" alt="paypal" width="50" height="50"></a></li>
                            <li><a href="#"><img src="ressource/visa.png" alt="visa width="50" height="50"></a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>DERNIERES ACTUS</h4>
                        <ul>
                            <li><a href="#">OUVERTURE <br> D'UN NOUVEL AXE <br> BAMAKO-TOMBOUCTOU- <br> BAMAKO</a></li>
                            <li><a href="#">OUVERTURE <br> DE L'AXE BAMAKO- <br> MOPTI-BAMAKO</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>CGV & CONFIDENTIALITE</h4>
                        <ul>
                            <li><a href="#">Condition G??n??rales</a></li>
                            <li><a href="#">Confidentialit?? et Cookies</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <form action="php\newsletter.php" method="POST"">
                        <h4>NOTRE NEWSLETTER</h4>
                        <div class="formualire">
                         <div class="groupe">
                             <label>Nom:</label>
                             <input type="text" class="input" name="nom_prenom" placeholder="Votre nom ici...">
                         </div>
                         <div class="groupe">
                             <label>Email:</label>
                             <input type="text" class="input" name="email" placeholder="Votre email ici...">
                        </div>
                        <div class="btn" align="right">
                         <button type="submit">Je m'abonne</button>
                     </form>
                     </div>
                    </div>
                </div>
            </div>
       </footer>
</html>