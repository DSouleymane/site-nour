<?php
 include "config/connexion.php";
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <title>Axe Routier</title>
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
        <h1>TOUTES NOS ESCALES</h1>
        <div class="tab">
            <table>
                <h2>DEPARTS DE BAMAKO</h2>
                <thead>
                <tr>
                    <th>Depart</th>
                    <th>Destination</th>
                    <th>Convocation</th>
                    <th>Horaire</th>
                    <th>Tarif</th>
                    <th>Reserve/Payer</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bamako</td>
                        <td>Abidjan</td>
                        <td>17h</td>
                        <td>18h</td>
                        <td>25000 F CFA/38€</td>
                        <td>Allez</td>
                    </tr>
                    <tr>
                        <td>Bamako</td>
                        <td>Dakar</td>
                        <td>16h</td>
                        <td>17h</td>
                        <td>25000 F CFA/38€</td>
                        <td>Allez</td>
                    </tr>
                    <tr>
                        <td>Bamako</td>
                        <td>Gao</td>
                        <td>06h</td>
                        <td>07h</td>
                        <td>22000 F CFA/34€</td>
                        <td>Allez</td>
                    </tr>
                    <tr>
                        <td>Bamako</td>
                        <td>Kayes</td>
                        <td>16h</td>
                        <td>17h</td>
                        <td>9000 F CFA/14€</td>
                        <td>Allez</td>
                    </tr>
                    <tr>
                        <td>Bamako</td>
                        <td>Niamey</td>
                        <td>05h</td>
                        <td>06h</td>
                        <td>25000 F CFA/38€</td>
                        <td>Allez</td>
                    </tr>
                    <tr>
                        <td>Bamako</td>
                        <td>Niono</td>
                        <td>13h</td>
                        <td>14h</td>
                        <td>4000 F CFA/06€</td>
                        <td>Allez</td>
                    </tr>
                    <tr>
                        <td>Bamako</td>
                        <td>Nioro</td>
                        <td>06h</td>
                        <td>07h</td>
                        <td>7000 F CFA/11€</td>
                        <td>Allez</td>
                    </tr>
                    <tr>
                        <td>Bamako</td>
                        <td>Nouakchott</td>
                        <td>15h</td>
                        <td>16h</td>
                        <td>25000 F CFA/38€</td>
                        <td>Allez</td>
                    </tr>
                    <tr>
                        <td>Bamako</td>
                        <td>Tombouctou</td>
                        <td>06h(jeudis et samedis)</td>
                        <td>07h</td>
                        <td>25000 F CFA/38€</td>
                        <td>Allez</td>
                    </tr>
                </tbody>
            </table>
                <h2>DESTINATIONS VERS BAMAKO</h2>
                <table>
                <thead>
                    <tr>
                        <th>Depart</th>
                        <th>Destination</th>
                        <th>Convocation</th>
                        <th>Horaire</th>
                        <th>Tarif</th>
                        <th>Reserve/Payer</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Abidjan</td>
                            <td>Bamako</td>
                            <td>03h</td>
                            <td>04h</td>
                            <td>25000 F CFA/38€</td>
                            <td>Allez</td>
                        </tr>
                        <tr>
                            <td>Dakar</td>
                            <td>Bamako</td>
                            <td>16h</td>
                            <td>18h</td>
                            <td>25000 F CFA/38€</td>
                            <td>Allez</td>
                        </tr>
                        <tr>
                            <td>Gao</td>
                            <td>Bamako</td>
                            <td>04h</td>
                            <td>05h</td>
                            <td>19000 F CFA/29€</td>
                            <td>Allez</td>
                        </tr>
                        <tr>
                            <td>Kayes</td>
                            <td>Bamako</td>
                            <td>16h</td>
                            <td>17h</td>
                            <td>9000 F CFA/14€</td>
                            <td>Allez</td>
                        </tr>
                        <tr>
                            <td>Niamey</td>
                            <td>Bamako</td>
                            <td>03h30</td>
                            <td>04h</td>
                            <td>25000 F CFA/38€</td>
                            <td>Allez</td>
                        </tr>
                        <tr>
                            <td>Niono</td>
                            <td>Bamako</td>
                            <td>05h</td>
                            <td>06h</td>
                            <td>4000 F CFA/06€</td>
                            <td>Allez</td>
                        </tr>
                        <tr>
                            <td>Nioro</td>
                            <td>Bamako</td>
                            <td>06h</td>
                            <td>07h</td>
                            <td>7000 F CFA/11€</td>
                            <td>Allez</td>
                        </tr>
                        <tr>
                            <td>Bamako</td>
                            <td>Nouakchott</td>
                            <td>06h</td>
                            <td>07h</td>
                            <td>14817 MRO/38€</td>
                            <td>Allez</td>
                        </tr>
                        <tr>
                            <td>Tombouctou</td>
                            <td>Bamako</td>
                            <td>04h(jeudis et samedis)</td>
                            <td>05h</td>
                            <td>25000 F CFA/38€</td>
                            <td>Allez</td>
                        </tr>
                    </tbody>
                </table>
                    <h2>AUTRES DESTINATIONS</h2>
                    <table>
                    <thead>
                        <tr>
                            <th>Depart</th>
                            <th>Destination</th>
                            <th>Convocation</th>
                            <th>Horaire</th>
                            <th>Tarif</th>
                            <th>Reserve/Payer</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Abidjan</td>
                                <td>Niamey</td>
                                <td>03h</td>
                                <td>04h</td>
                                <td>35000/54€</td>
                                <td>Allez</td>
                            </tr>
                            <tr>
                                <td>Niamey</td>
                                <td>Abidjan</td>
                                <td>03h30</td>
                                <td>04h</td>
                                <td>35000/54€</td>
                                <td>Allez</td>
                            </tr>
                            <tr>
                                <td>Gao</td>
                                <td>Niamey</td>
                                <td>04h30</td>
                                <td>05h</td>
                                <td>8500/13€</td>
                                <td>Allez</td>
                            </tr>
                            <tr>
                                <td>Niamey</td>
                                <td>Gao</td>
                                <td>03h30</td>
                                <td>04h</td>
                                <td>8500/13€</td>
                                <td>Allez</td>
                            </tr>
                            <tr>
                                <td>Bamako</td>
                                <td>Niamey</td>
                                <td>05h</td>
                                <td>06h</td>
                                <td>25000/38€</td>
                                <td>Allez</td>
                            </tr>
                            <tr>
                                <td>Bamako</td>
                                <td>Niono</td>
                                <td>13h</td>
                                <td>14h</td>
                                <td>4000/06€</td>
                                <td>Allez</td>
                            </tr>
                            <tr>
                                <td>Abidjan</td>
                                <td>Ouaga</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Ouaga</td>
                                <td>Abidjan</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>Niamey</td>
                                <td>Ouaga</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <td>Ouaga</td>
                            <td>Niamey</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tbody>
            </table>
        </div>
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
  	 				<li><a href="#">Condition Générales</a></li>
  	 				<li><a href="#">Confidentialité et Cookies</a></li>
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
</body>
</html>