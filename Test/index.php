<?php

if (isset($_POST["Submit"])) {


	// 1. Sanitization
	$prenomsani = filter_var($_POST["Name"], FILTER_SANITIZE_STRING);

	$prenomIsempty = empty($prenomsani);

	$emailIsSani = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);

	$emailIsempty = empty($emailIsSani);

	$emailIsValid = filter_var($emailIsSani, FILTER_VALIDATE_EMAIL);

	$tachesani = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);

	$tacheIsempty = empty($tachesani);



	// 2. Validation

	if ($prenomIsempty == false) {

		if ($emailIsempty == false && $emailIsValid == true) {

			if ($tacheIsempty == false) {

				// 3. Exécution

				$to = "verslalune.fr@gmail.com";

				$subject = 'Message de mon site internet';

				$headers = 'Mime-Version: 1.0'."\r\n";

				$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

				$headers .= "\r\n";

				$message  = 'De: ' . $prenomsani . "<br />";

				$message .= 'Email: ' . $emailIsValid . "<br />";

				$message .= "Message:<br />" . $tachesani . "<br />";

				$envoi = mail($to, $subject, $message, $headers);

			}

		}

	}

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>

	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

	<title>Vers la Lune</title>

	<meta charset="UTF-8">
	<meta name="description" content="Vers la Lune est un site de vulgarisation et de ré-information sur le monde de la crypto-monnaie, fondé par deux amis, afin d'aider la communauté des crypto-monnaies francophone. En réunnissant les informations nécessaire aux nouveaux venus et en créant de la dissonance cognitive pour contrer la propagande des médias dominants.">
	<meta name="keywords" content="bitcoin, altcoin, ethereum, litecoin, zcash, crypto-monnaie, cryptomonnaie, trader, miner, information, graphique, ico, a propos, contact, lune, moon">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



	<style>

	body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
	body, html {
		height: 100%;
		color: black;
		line-height: 1.8;
	}

	/* Create a Parallax Effect */
	.bgimg-1, .bgimg-2, .bgimg-3 {
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	/* First image */
	.bgimg-1 {
		background-image: url('btcttm.jpg');
		min-height: 100%;
	}

	/* Second image */
	.bgimg-2 {
		background-image: url("btcttm.jpg");
		min-height: 50%;
	}

	.w3-wide {letter-spacing: 10px;}
	.w3-hover-opacity {cursor: pointer;}

	/* Turn off parallax scrolling for tablets and phones */
	@media only screen and (max-device-width: 1024px) {
		.bgimg-1, .bgimg-2 {
			background-attachment: scroll;
		}
	}

	</style>

</head>
<body>

	<!-- Navbar (sit on top) -->
	<div class="w3-top">
	  <div class="w3-bar w3-orange w3-greyscale-min">

		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-text-white" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a href="#accueil" class="w3-bar-item w3-button w3-hover-text-white"><i class="fa fa-rocket"></i> VERS LA LUNE</a>
		<a href="#cryptomonnaie" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-bitcoin"></i> CRYPTO-MONNAIE</a>
		<a href="#trader" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-balance-scale"></i> TRADER</a>
		<a href="#minage" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-plug"></i> MINAGE</a>
		<a href="#information" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-info"></i> INFORMATION</a>
		<a href="#graphique" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-line-chart"></i> GRAPHIQUE</a>
		<a href="#ico" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-bomb"></i> ICO</a>
		<a href="#apropos" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-question"></i> A PROPOS</a>
		<a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-envelope"></i> CONTACT</a>
		<a href="https://cex.io" target="_blank"><img src="https://cex.io/widget/dark/240/btc-eur" width="120" height="38" style="margin: 2px;" class="w3-hide-small w3-right"></a>

	  </div>

	  <!-- Navbar on small screens -->
	  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">

	  	<a href="#cryptomonnaie" class="w3-bar-item w3-button" onclick="toggleFunction()">CRYPTO-MONNAIE</a>
		<a href="#trader" class="w3-bar-item w3-button" onclick="toggleFunction()">TRADER</a>
		<a href="#minage" class="w3-bar-item w3-button" onclick="toggleFunction()">MINAGE</a>
		<a href="#information" class="w3-bar-item w3-button" onclick="toggleFunction()">INFORMATION</a>
		<a href="#graphique" class="w3-bar-item w3-button" onclick="toggleFunction()">GRAPHIQUE</a>
		<a href="#ico" class="w3-bar-item w3-button" onclick="toggleFunction()">ICO</a>
		<a href="#apropos" class="w3-bar-item w3-button" onclick="toggleFunction()">A PROPOS</a>
		<a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
		<a href="https://cex.io" target="_blank"><img src="https://cex.io/widget/dark/240/btc-eur" width="120" height="38" style="margin: 2px;"></a>

	  </div>
	</div>

	<!-- First Parallax -->
	<div class="bgimg-1 w3-display-container" id="accueil">

	  <div class="w3-display-middle" style="white-space:nowrap; margin-top: 40px;">

		<h1 class="w3-center w3-padding-large w3-orange w3-greyscale-min w3-xlarge w3-wide"><i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</h1>

	  </div>

	  <div class="w3-display-bottommiddle" style="white-space:nowrap; margin-bottom: 40px;">

		<a href="#cryptomonnaie" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-bitcoin"></i> CRYPTO-MONNAIE <i class="fa fa-caret-down"></i></a>

	  </div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-green w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-bullhorn w3-hover-text-grey"></i> MISE EN AVANT</h3>

		<p class="w3-center w3-large">Une crypto-monnaie, une info, un graphique prévisionnel et un ICO<br>Mise en avant par Vers la Lune</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-bitcoin w3-hover-text-grey"></i><br><a href="https://www.ethereum.org/" target="_blank">Ethereum</a></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-info w3-hover-text-grey"></i><br><a href="https://steemit.com/money/@cryptones/ether-price-prediction-1-eth-usd5300-usd-by-2020" target="_blank">steemit.com</a></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-line-chart w3-hover-text-grey"></i><br><a href="https://www.tradingview.com/chart/ETHUSD/4nOAEO1t-ETH-Is-this-the-Time-we-Get-a-Real-Breakout/" target="_blank">tradingview.com</a></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-bomb w3-hover-text-grey"></i><br><a href="https://www.envion.org/en/" target="_blank">envion.org</a></p>

		</div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64" id="cryptomonnaie">

		<h2 class="w3-center"><i class="fa fa-bitcoin w3-hover-text-grey"></i> CRYPTO-MONNAIE</h2>

		<h3 class="w3-center w3-large"><em>C'est quoi une crypto-monnaie ?</em></h3>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">Une crypto-monnaie, cryptodevise ou monnaie cryptographique est une monnaie électronique sur un réseau informatique pair à pair ou décentralisée basé sur les principes de la cryptographie pour valider les transactions et émettre la monnaie elle-même. Aujourd'hui, toutes les crypto-monnaies sont des monnaies alternatives, car elles n'ont de cours légal dans aucun pays. Les crypto-monnaies utilisent un système de preuve de travail pour les protéger des contrefaçons électroniques. De nombreuses crypto-monnaies ont été développées mais la plupart sont similaires et dérivent de la première implémentation complète : le Bitcoin (BTC).<br><a href="https://fr.wikipedia.org/wiki/Crypto-monnaie" target="_blank">wikipedia.org</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 100px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 100px;">

			 <img src="btclo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bitcoin logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 100px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			 <img src="btclo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bitcoin logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">Un site qui référence les crypto-monnaies, par exemple<br><a href="https://coinmarketcap.com/" target="_blank">coinmarketcap.com</a></p>

		<p class="w3-center w3-large">Pour appronfondir le sujet, quelques pistes:<br>La blockchain, les noeuds, les preuves de travails</p>


		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

		<h3 class="w3-center w3-large"><b>White list de Vers la Lune</b></h3>

		<p class="w3-center w3-large">-<a href="https://bitcoin.org/fr/" target="_blank">Bitcoin</a><br>-<a href="https://www.ethereum.org/" target="_blank">Ethereum</a><br>-<a href="https://litecoin.org/fr/" target="_blank">Litecoin</a><br>-<a href="https://z.cash/" target="_blank">Zcash</a></p>

			</div>

			<div class="w3-col m6 w3-padding-large">

		<h3 class="w3-center w3-large"><b>Black list de Vers la Lune</b></h3>

		<p class="w3-center w3-large">-Onecoin<br>-Bitconnect</p>

			</div>

		</div>

		<h3 class="w3-center w3-large"><em>La légalité et les crypto-monnaies ?</em></h3>

		<p class="w3-large w3-padding-large">Un site qui référence la légalité des crypto-monnaies, par exemple<br><a href="http://bitlegal.io/" target="_blank">bitlegal.io</a></p>

		<br>

		<h3 class="w3-center w3-large"><em>Quel commerce accepte les crypto-monnaies ?</em></h3>

		<p class="w3-large w3-padding-large">Un site qui référence les commerces acceptant les crypto-monnaies, par exemple<br><a href="https://coinmap.org/" target="_blank">coinmap.org</a></p>

		<p class="w3-large w3-padding-large">Un site utile aux commercants, par exemple<br><a href="https://bitpay.com/" target="_blank">bitpay.com</a></p>


		<br>

		<div class="w3-center">

		<a href="#trader" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-balance-scale"></i> TRADER <i class="fa fa-caret-down"></i></a>

		</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-orange w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-bitcoin w3-hover-text-grey"></i> COMPETENCES</h3>

		<p class="w3-center w3-large">Principales compétences des crypto-monnaies</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-globe w3-hover-text-grey"></i><br>Décentralisé</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-space-shuttle w3-hover-text-grey"></i><br>Rapidité</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-shield w3-hover-text-grey"></i><br>Sécurité</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-drivers-license w3-hover-text-grey"></i><br>Anonymat</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Satoshi Nakamoto</h3>

		<p class="w3-center w3-large"><em>"avec la monnaie électronique basée sur la preuve cryptographique,<br>l'argent peut être sécurisé et les transactions sans effort."</em><br><a href="http://p2pfoundation.ning.com/forum/topics/bitcoin-open-source" target="_blank">p2pfoundation.ning.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="trader">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-orange w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-balance-scale w3-hover-text-grey"></i> Trader</h1>

	  </div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-red w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-warning w3-hover-text-grey"></i> GARDE-FOU</h3>

		<p class="w3-center w3-large"><em>Le trading comporte des risques, investissez seulement l'argent que vous êtes capable de perdre !</em></p>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-balance-scale w3-hover-text-grey"></i> TRADER</h2>

		<h3 class="w3-center w3-large"><em>C'est quoi un trader ?</em></h3>

		<p class="w3-center w3-large">Un trader est une personne qui travaille sur les marchés financiers.<br>Son objectif est d'acheter un actif financier et de le revendre plus cher, pour dégager une plus-value.<br><a href="http://www.journaldunet.com/business/dictionnaire-economique-et-financier/1199075-trader-definition-traduction-et-synonymes/" target="_blank">journaldunet.com</a></p>

		<h3 class="w3-center w3-large"><em>Comment trader des crypto-monnaies ?</em></h3>


		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">1. Les porte-feuilles de crypto-monnaies, en ligne, en local, physique ou papier, chacuns acceptant différentes crypto-monnaies. Les porte-feuilles en ligne permettent de acheter/recevoir, vendre/envoyer, stocker (bonne sécurité) vos crypto-monnaies.<br>verslalune.fr</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 20px;">

				<img src="cowalo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="coinbase logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			 <img src="cowalo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="coinbase logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un site de porte-feuille en ligne (principales crypto-monnaies), par exemple<br><a href="https://www.coinbase.com/" target="_blank">coinbase.com</a> / Notre lien d'affiliation <a href="https://www.coinbase.com/join/59fb8ab3dd8ddd011c95cceeaJM" target="_blank">coinbase.com</a></p>


		<p class="w3-large w3-padding-large">Un site qui référence les porte-feuilles, par exemple<br><a href="https://www.cryptocompare.com/wallets/#/overview" target="_blank">cryptocompare.com</a></p>


		<p class="w3-large w3-padding-large">Un site qui référence les distributeurs de crypto-monnaie, par exemple<br><a href="https://coinatmradar.com/" target="_blank">coinatmradar.com</a></p>


		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

		<p class="w3-center w3-large"><i class="fa fa-long-arrow-up w3-hover-text-grey"></i></p>

			</div>

			<div class="w3-col m6 w3-padding-large">

		<p class="w3-center w3-large"><i class="fa fa-long-arrow-down w3-hover-text-grey"></i></p>

			</div>

		</div>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">2. Les places d'échanges de crypto-monnaies, de volumes différents, chacuns acceptant différentes crypto-monnaies. Les places d'échanges permettent de recevoir, envoyer, stocker (mauvaise sécurité) vos crypto-monnaies.<br>verslalune.fr</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 20px;">

				<img src="biexlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bittrex logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			 <img src="biexlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bittrex logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un site place d'échange (plus de 100 cryptos-monnaies), par exemple<br><a href="https://bittrex.com/" target="_blank">bittrex.com</a></p>

		<p class="w3-large w3-padding-large">Un site qui référence les places d'échanges, par exemple<br><a href="https://www.cryptocompare.com/exchanges/#/overview" target="_blank">cryptocompare.com</a></p>

		<br>

		<h3 class="w3-center w3-large"><em>comment suivre mes transactions en crypto-monnaies ?</em></h3>

		<p class="w3-large w3-padding-large">Un site qui référence les transactions des crypto-monnaies, par exemple<br><a href="https://live.blockcypher.com/" target="_blank">live.blockcypher.com</a></p>

		<p class="w3-center w3-large">Pour appronfondir le sujet, quelques pistes:<br>Le trading court, moyen, long termes, les clefs-privées, les forks</p>

		<h3 class="w3-center w3-large"><b>Conseils de Vers la Lune</b></h3>

		<p class="w3-center w3-large">-Achetez quand ca baisse<br>-Vendez quand ca monte<br>-Ne vendez pas directement apres un mauvais achat, patientez<br>-Ne tradez pas sans information<br>-Ne tradez pas sans graphique</p>

		<br>

		<div class="w3-center">

		<a href="#minage" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-plug"></i> MINAGE <i class="fa fa-caret-down"></i></a>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-red w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-warning w3-hover-text-grey"></i> GARDE-FOU</h3>

		<p class="w3-center w3-large"><em>Vers la Lune déconseille les effets de levier, les casinos, les faucets, les airdrops</em></p>

	</div>


	<!-- About Section -->
	<div class="w3-row w3-center w3-orange w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-balance-scale w3-hover-text-grey"></i> ETAPES</h3>

		<p class="w3-center w3-large">Principales étapes pour trader</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-folder-open w3-hover-text-grey"></i><br>Portefeuille</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-bank w3-hover-text-grey"></i><br>Place d'échange</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-info w3-hover-text-grey"></i><br>Information</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-line-chart w3-hover-text-grey"></i><br>Graphique</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Bill Gates</h3>

		<p class="w3-center w3-large"><em>"Bitcoin est «mieux que la monnaie»."</em><br>
		<a href="https://www.entrepreneur.com/article/238103" target="_blank">entrepreneur.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="minage">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-orange w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-plug w3-hover-text-grey"></i> Minage</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-plug w3-hover-text-grey"></i> MINAGE</h2>

		<h3 class="w3-center w3-large"><em>C'est quoi le minage ?</em></h3>

		<p class="w3-center w3-large">Lorsqu'une transaction est émise, elle est transmise et validée par les ordinateurs qui composent le réseau. Cette validation est un calcul pour la complétion duquel toute personne peut proposer son ordinateur pour participer à la résolution des calculs. Dès lors qu'une transaction est validée, chaque ordinateur ayant participé à sa validation, se voit attribuer un certain montant de monnaie électronique, au prorata de sa participation au calcul.<br><a href="https://fr.wikipedia.org/wiki/Crypto-monnaie" target="_blank">wikipedia.org</a></p>

		<h3 class="w3-center w3-large"><em>Comment miner des crypto-monnaies ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">Des sociétés de minage en crypto-monnaies, propose via des contracts, de loué a différents prix et périodes de temps, de miner différentes crypto-monnaies, via leurs lieux, matériels et fournisseurs d'éléctricités. C'est le plus simple pour miner. (le matériel est a eux)<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 20px;">

				<img src="cmlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ferme logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			 <img src="cmlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ferme logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un site proposant des contracts de minage, par exemple<br><a href="https://www.just-mining.com/" target="_blank">just-mining.com</a> / Notre lien d'affiliation <a href="https://www.just-mining.com/register/XRhEzBxd4f18GHYrxz5AawdPzvSrO8" target="_blank">just-mining.com</a></p>

		<p class="w3-large w3-padding-large">Un site référencants les contracts de minage, par exemple<br><a href="https://www.cryptocompare.com/mining/#/contracts" target="_blank">cryptocompare.com</a></p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">Des particuliers mine différentes crypto-monnaies, seul, ou en groupe via leurs prope lieux, matériels et fournisseurs d'éléctricités. C'est le plus rentable pour miner. (le matériel est a vous)<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 20px;">

				<img src="mirilo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="rig logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			 <img src="mirilo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="rig logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un site proposant du matériels de minage, par exemple<br><a href="https://www.just-mining.com/" target="_blank">just-mining.com</a> / Notre lien d'affiliation <a href="https://www.just-mining.com/register/XRhEzBxd4f18GHYrxz5AawdPzvSrO8" target="_blank">just-mining.com</a></p>

		<p class="w3-large w3-padding-large">Un site référencants les groupes de minage, par exemple<br><a href="https://www.cryptocompare.com/mining/#/pools" target="_blank">cryptocompare.com</a></p>

		<p class="w3-large w3-padding-large">Un site référencants les vendeurs de matériels de minage, par exemple<br><a href="https://www.cryptocompare.com/mining/#/equipment" target="_blank">cryptocompare.com</a></p>

		<p class="w3-large w3-padding-large">Un site pour calculer le minage, par exemple<br><a href="https://www.coinwarz.com/cryptocurrency" target="_blank">coinwarz.com</a></p>

		<br>

		<div class="w3-center">

		<a href="#information" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-info"></i> INFORMATION <i class="fa fa-caret-down"></i></a>

		</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-orange w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-plug w3-hover-text-grey"></i> RENTABILITE</h3>

		<p class="w3-center w3-large">Principales points pour calculer la rentabilité</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-arrows-v w3-hover-text-grey"></i><br>Lieu</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-arrows-v w3-hover-text-grey"></i><br>Matétiel</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-arrows-v w3-hover-text-grey"></i><br>Electricité</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-arrows-v w3-hover-text-grey"></i><br>Crypto-monnaie</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Peter Thiel</h3>

		<p class="w3-center w3-large"><em>"Je pense réellement que Bitcoin est la première monnaie cryptographique<br>qui a le potentiel de changer le monde."</em><br>
		<a href="https://www.wikiberal.org/wiki/Bitcoin" target="_blank">wikiberal.org</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="information">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-orange w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-info w3-hover-text-grey"></i> Information</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

	  <h2 class="w3-center"><i class="fa fa-info w3-hover-text-grey"></i> INFORMATION</h2>

	  <h3 class="w3-center w3-large"><em>Pourquoi m'informer sur les crypto-monnaies ?</em></h3>

	  <p class="w3-center w3-large">L'information c'est le pouvoir !<br>Anonymous</p>

	  <h3 class="w3-center w3-large"><em>comment m'informer sur les crypto-monnaies ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">1. Les sites d'informations spécialisé sur le monde des crypto-monnaies, des plus au moins généraliste, sont nombreux sur internet.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 5px;">

				<img src="cotelo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="cointelegraph logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			 <img src="cotelo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="cointelegraph logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un site d'information, par exemple<br><a href="https://cointelegraph.com/" target="_blank">cointelegraph.com</a></p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">2. Les forums spécialisé sur le monde des crypto-monnaies, des plus ou moins généraiste, sont nombreux sur internet.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 5px;">

				<img src="bitalo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bitcointalk logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			 <img src="bitalo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bitcointalk logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un forum, par exemple<br><a href="https://bitcointalk.org/" target="_blank">bitcointalk.org</a></p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">3. Les réseaux sociaux, ils permettent de suivre tous les acteurs du monde des crypto-monnaies, des plus ou moins reconnu par la communauté des crypto-monnaies. C'est le plus facile, vous trouverez les cours du marché, les informations, les avis de l'opinion publique et plus encore.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 5px;">

				<img src="twlo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="Twitter logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			 <img src="twlo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="Twitter logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un acteur du monde des crypto-monnaies sur les réseaux sociaux, par exemple<br>Twitter <a href="https://twitter.com/PowerHasheur" target="_blank">PowerHasheur</a></p>

		<h3 class="w3-center w3-large"><b>Listes d'informations de Vers la Lune</b></h3>

		<div class="w3-row-padding w3-center w3-section w3-large">

			<div class="w3-col m4">

				<p><b>Site d'informations</b></p>

				<a href="https://cointelegraph.com/" target="_blank">cointelegraph.com</a><br><a href="https://www.coindesk.com/" target="_blank">coindesk.com</a>

			</div>

	   		 <div class="w3-col m4">

	   		 	<p><b>Forums</b></p>

	     	 	<a href="https://bitcointalk.org/" target="_blank">bitcointalk.org</a><br><a href="https://www.reddit.com/r/Bitcoin/" target="_blank">reddit.com</a>

	    	</div>

	    	<div class="w3-col m4">

	    		<p><b>Réseaux sociaux</b></p>

	      		<a href="https://twitter.com/PowerHasheur" target="_blank">PowerHasheur</a><br>
	      		<a href="https://twitter.com/cryptobref" target="_blank">cryptobref</a><br>
	      		<a href="https://twitter.com/CryptonationFR" target="_blank">CryptonationFR</a><br>
	      		<a href="https://twitter.com/coinmunityfr" target="_blank">coinmunityfr</a><br>
	      		<a href="https://twitter.com/autodisciple" target="_blank">autodisciple</a><br>
	      		<a href="https://twitter.com/RousseauxTuyaux" target="_blank">RousseauxTuyaux</a><br>
	      		<a href="https://twitter.com/BaleineFR" target="_blank">BaleineFR</a><br>
	      		<a href="https://twitter.com/LaMaisonDuBTC" target="_blank">LaMaisonDuBTC</a><br>
	      		<a href="https://twitter.com/LeJournalDuCoin" target="_blank">LeJournalDuCoin</a>

	    	</div>

		</div>

		<h3 class="w3-center w3-large"><em>Existe t'il des séances d'infomations sur les crypto-monnaies ?</em></h3>

		<p class="w3-large w3-padding-large">Un site proposant des séances d'informations sur les crypto-monnaies, par exemple<br><a href="https://lamaisondubitcoin.fr/" target="_blank">lamaisondubitcoin.fr</a></p>

	  	<br>

	  	<div class="w3-center">

			<a href="#graphique" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-line-chart"></i> GRAPHIQUE <i class="fa fa-caret-down"></i></a>

	  	</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-orange w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-info w3-hover-text-grey"></i> VERIFICATION</h3>

		<p class="w3-center w3-large">Principales points pour verifier une information</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-calendar w3-hover-text-grey"></i><br>Date</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-newspaper-o w3-hover-text-grey"></i><br>Source</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-inbox w3-hover-text-grey"></i><br>Contenue</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-map-signs w3-hover-text-grey"></i><br>Recoupement</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Roger Ver</h3>

		<p class="w3-center w3-large"><em>"Bitcoin est l'invention la plus importante dans l'histoire du monde depuis Internet."</em><br>
		<a href="https://steemit.com/bitcoin/@adwike/roger-ver-bitcoin-millionaire" target="_blank">steemit.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="graphique">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-orange w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-line-chart w3-hover-text-grey"></i> Graphique</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

	  <h2 class="w3-center"><i class="fa fa-line-chart w3-hover-text-grey"></i> GRAPHIQUE</h2>

	  <h3 class="w3-center w3-large"><em>C'est quoi les graphiques ?</em></h3>

	  <p class="w3-center w3-large">Un certain nombre de phénomènes sont modélisés sous forme de données chiffrées, et ce dans de nombreux domaines : mathématiques, physiques, économiques... lorsque ces données sont abondantes, leur analyse et leur partage peut être facilitée par une représentation graphique.<br><a href="https://fr.wikipedia.org/wiki/Repr%C3%A9sentation_graphique" target="_blank">wikipedia.org</a></p>

	  <h3 class="w3-center w3-large"><em>Les différents graphiques ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">Les graphiques simples permettent d'avoir l'historique et la valeur en direct d'une crypto-monnaie. Ils sont présent sur quasi tous les sites de crypto-monnaies (porte-feuille, place d'échange, ...), également sur des sites plus proféssionel, ou il est possible de rajouter des outils d'indices utiles, par exemples MACD et RSI.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 20px;">

				<img src="chcolo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique simple" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			 <img src="chcolo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique simple" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un site de graphique simple et proféssionel, par exemple<br><a href="https://www.coinigy.com/" target="_blank">coinigy.com</a> (une période d'éssaie gratuite par inscription)</p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">Les graphiques prévisionnels permettent de voir les analyses graphique de traders plus ou moins reconnu par la communauté des crypto-monnaies. Ils sont présent sur des sites spécialisé. Les graphiques prévisionnels sont peu fiables, attention.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 20px;">

				<img src="chtvlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique prévisionelle" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			 <img src="chtvlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique prévisionelle" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Un site de graphique prévisionnel et spécialisé, par exemple<br><a href="https://www.tradingview.com/" target="_blank">tradingview.com</a></p>

		<h3 class="w3-center w3-large"><b>White list sur TradingView de Vers la Lune</b></h3>

		<p class="w3-center w3-large">-<a href="https://www.tradingview.com/u/DianKemala/" target="_blank">DianKemala</a><br>-<a href="https://www.tradingview.com/u/goldbug1/" target="_blank">goldbug1</a><br>-<a href="https://www.tradingview.com/u/bethek/" target="_blank">bethek</a></p>

	  	<br>

	  	<div class="w3-center">

			<a href="#ico" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-bomb"></i> ICO <i class="fa fa-caret-down"></i></a>

	  	</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-orange w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-line-chart w3-hover-text-grey"></i> UTILISATION</h3>

		<p class="w3-center w3-large">Principales points pour utiliser un graphique</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-hourglass-1 w3-hover-text-grey"></i><br>Temp long</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-hourglass-3 w3-hover-text-grey"></i><br>Temp court</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-balance-scale w3-hover-text-grey"></i><br>Achat/Vente</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-bar-chart w3-hover-text-grey"></i><br>Indice</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> John Donohoe</h3>

		<p class="w3-center w3-large"><em>"[La monnaie numérique va être] une chose très puissante."</em><br><a href="https://techcrunch.com/2013/11/03/ebay-ceo-john-donahoe-is-bullish-on-digital-currency-and-hes-keeping-tabs-on-bitcoin/" target="_blank">techcrunch.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="ico">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-orange w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-bomb w3-hover-text-grey"></i> Ico</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

	  <h2 class="w3-center"><i class="fa fa-bomb w3-hover-text-grey"></i> ICO</h2>

	  <h3 class="w3-center w3-large"><em>ICO, c'est quoi ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">ICO (Initial Coin Offering) est une méthode de collecte de fonds en émettant des jetons de crypto-monnaie. Au cours d'un ICO, une entreprise vend généralement une partie de ses jetons de crypto-monnaie en échange d'argent. Le financement sert de support pour distribuer des jetons au marché et financer les dépenses de l'équipe fondatrice.<br><a href="https://www.coingecko.com/ico?locale=en" target="_blank">coingecko.com</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 50px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 50px;">

				<img src="icolo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ico logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 50px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			 <img src="icolo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ico logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<p class="w3-large w3-padding-large">Pour suivre les ICO, il existe par exemple<br><a href="https://www.coingecko.com/ico?locale=en" target="_blank">coingecko.com</a></p>

		<h3 class="w3-center w3-large"><b>White liste d'ICO de Vers la Lune</b></h3>

		<p class="w3-center w3-large">-<a href="https://www.envion.org/en/" target="_blank">envion.org</a></p>

	  	<br>

	  	<div class="w3-center">

			<a href="#apropos" class="w3-button w3-orange w3-greyscale-min w3-greyscale-min w3-hover-text-white"><i class="fa fa-question"></i> A PROPOS <i class="fa fa-caret-down"></i></a>

	  	</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-orange w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-bomb w3-hover-text-grey"></i> POTENTIEL</h3>

		<p class="w3-center w3-large">Les critères principales du potentiel d'un ICO</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-smile-o w3-hover-text-grey"></i><br>Popularité</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-group w3-hover-text-grey"></i><br>Equipe</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-file-powerpoint-o w3-hover-text-grey"></i><br>Papier blanc</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-globe w3-hover-text-grey"></i><br>Site internet</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Naeem Aslam</h3>

		<p class="w3-center w3-large"><em>"le Bitcoin est, parfait pour le nouveau monde technologique."</em><br><a href="https://f-lys.com/2017/08/28/pourquoi-le-prix-du-bitcoin-nest-pas-une-bulle/" target="_blank">f-lys.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="apropos">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-orange w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-question w3-hover-text-grey"></i> A propos</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

	  <h2 class="w3-center"><i class="fa fa-question w3-hover-text-grey"></i> A PROPOS</h2>

	  <h3 class="w3-center"><em>Vers la Lune, c'est quoi ?</em></h3>

	  <p class="w3-center w3-large">Vers la Lune est un site de <b>vulgarisation</b> et de <b>ré-information</b> sur le monde de la <b>crypto-monnaie</b>, fondé par deux amis, afin d'aider la <b>communauté francophone</b> des crypto-monnaies. En réunnissant les informations nécessaire aux nouveaux venus et en créant de la dissonance cognitive pour contrer la propagande des médias dominants.</p>

	  <p class="w3-center w3-large">Vers la Lune propose une initiation au monde des cryptos-monnaies, pour plus d'informations, nous vous invitons à approfondir par vous même chaque points éxposé sur notre site.<br>verslalune.fr</p>

	  <div class="w3-row">

		<div class="w3-col m6 w3-center w3-padding-large">

		  <p class="w3-center w3-large"><b>Winny</b> <a href="https://twitter.com/WinnyCrypto" target="_blank"><i class="fa fa-twitter w3-text-blue w3-hover-text-light-grey"></i></a><br>Trader / Miner</p>

		  <br>
		  <img src="wcav.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="Photow" style="width: 300px; height: 400px;">

		</div>

		<div class="w3-col m6 w3-center w3-padding-large">

		  <p class="w3-center w3-large"><b>Bethek</b> <a href="https://twitter.com/BethekCryptoDev" target="_blank"><i class="fa fa-twitter w3-text-blue w3-hover-text-light-grey"></i></a><br>Trader / Miner</p>

		  <br>

		  <img src="pcav.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="Photob" style="width: 300px; height: 400px;">

		</div>

	  </div>

	  <br>

	  <div class="w3-center">

		<a href="#contact" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-envelope"></i> CONTACT <i class="fa fa-caret-down"></i></a>

	  </div>

	</div>

	<!-- Don -->
	<div class="w3-center w3-orange w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-bitcoin w3-hover-text-grey"></i> DON</h3>

		<p class="w3-center w3-large">Donne nous la force de continuer<br>Sans publicités, sans produits à vendre<br>ETH<br>0x218a61ab4db96e769f6f9800c31cfdb8cd900f16<br>LTC<br>LKcjs1XGxS7Np5ajoY1ixySn2wppoBJ5ua<br>ZEC<br>t1UF95rxJyTWLa5ivsQ3m3GfBAoPS3BsoFx</p>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Julian Assange</h3>

		<p class="w3-center w3-large"><em>"toutes les personnes et tous les états amoureux de la liberté ont besoin du Bitcoin."</em><br>
		<a href="https://cointelegraph.com/news/julian-assange-supports-bitcoin-as-ways-to-free-catalonia-from-spains-dictate" target="_blank">cointelegraph.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="contact">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-orange w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-envelope w3-hover-text-grey"></i> Contact</h1>

	  </div>

	</div>

	<!-- Container  -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-envelope w3-hover-text-grey"></i> CONTACT</h2>

		<p class="w3-center w3-large">Contacter Vers la Lune</p>

		<div class="w3-row w3-padding-32 w3-section">

			<div class="w3-col m4 w3-container">

				<!-- Add Google Maps -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d33393.428594891855!2d-80.62010247079893!3d28.387503385104196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e0a5ab39504c9b%3A0xbb0bb0f57a55d19e!2sCape+Canaveral%2C+FL+32920!5e0!3m2!1sen!2sus!4v1506283743036" width="auto" height="266" frameborder="0" style="border:0" class="w3-opacity-min w3-hover-opacity-off" alt="google map" allowfullscreen></iframe>

			</div>

			<div class="w3-col m8 w3-panel">

				<div class="w3-large w3-margin-bottom">

					<i class="fa fa-map-marker fa-fw w3-hover-text-grey w3-xlarge w3-margin-right"></i> Cape Canaveral, Florida<br>
					<i class="fa fa-envelope fa-fw w3-hover-text-grey w3-xlarge w3-margin-right"></i> Email: verslalune.fr@gmail.com

				</div>

				<form action="" method="POST">

					<div class="w3-row-padding" style="margin:0 -16px 8px -16px">

						<div class="w3-half">

							<input class="w3-input w3-border" type="text" placeholder="Nom" name="Name">

						</div>

						<div class="w3-half">

							<input class="w3-input w3-border" type="text" placeholder="Email" name="Email">

						</div>

					</div>

					<input class="w3-input w3-border" type="text" placeholder="Message" name="Message">

					<button class="w3-button w3-dark-grey w3-right w3-section w3-text-black w3-hover-text-white" type="submit" name="Submit">

						<i class="fa fa-paper-plane"></i> ENVOYER

					</button>

				</form>

			</div>

		</div>

	</div>

	<!-- Collaboration -->
	<div class="w3-row w3-center w3-blue w3-text-black w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-newspaper-o w3-hover-text-grey"></i> COMMENTAIRE</h3>

		<p class="w3-center w3-large">Quelques commentaires sur Vers la Lune</p>

		<div class="w3-quarter w3-large">

			<p><i>"Pas de commentaire"</i></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i>"Pas de commentaire"</i></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i>"Pas de commentaire"</i></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i>"Pas de commentaire"</i></p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Eric Schmidt</h3>

		<p class="w3-center w3-large"><em>"la capacité de créer quelque chose qui n'est pas duplicable dans le monde numérique a une valeur énorme."</em><br><a href="http://www.newsbtc.com/2014/03/16/google-chairman-eric-schmidt-bitcoin-architecture-amazing-advancement/" target="_blank">newsbtc.com</a></p>

	</div>

	<!-- Footer -->
	<footer class="w3-center w3-orange w3-greyscale-min w3-padding-64">

	  <a href="#accueil" class="w3-button w3-dark-grey w3-hover-grey w3-text-black w3-hover-text-white"><i class=" fa fa-rocket"></i> VERS LA LUNE <i class="fa fa-caret-up"></i></a>

	  <p class="w3-center w3-large" style="margin-bottom: 0;"><i class="fa fa-laptop w3-hover-text-grey"></i> <i class="fa fa-tablet w3-hover-text-grey"></i> <i class="fa fa-mobile w3-hover-text-grey"></i><br>Vers la Lune <i class="fa fa-copyright w3-hover-text-grey"></i> 2017</p>

	</footer>
 
	<script>

		// Modal Image Gallery
		function onClick(element) {
		  document.getElementById("img01").src = element.src;
		  document.getElementById("modal01").style.display = "block";
		  var captionText = document.getElementById("caption");
		  captionText.innerHTML = element.alt;
		}

		// Change style of navbar on scroll
		window.onscroll = function() {myFunction()};
		function myFunction() {
			var navbar = document.getElementById("myNavbar");
			if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
				navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-orange";
			} else {
				navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-orange", "");
			}
		}

		// Used to toggle the menu on small screens when clicking on the menu button
		function toggleFunction() {
			var x = document.getElementById("navDemo");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}

	</script>

</body>
</html>