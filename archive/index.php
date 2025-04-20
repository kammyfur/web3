<!-- 

Le code source de ce site Web à intégralement été rédigé par Minteck de l'équipe de développement Minteck Projects, et nous consentons à faire passer ce message au début du code de chacune des pages de notre site comme une preuve d'authenticité du contenu du site.

moz://a 4 ever

 -->

<?php 

$docroot = $_SERVER['DOCUMENT_ROOT'];
file_put_contents($docroot . "/tools/.htaccess","AuthType Basic\nAuthName \"Password authentication is required to enter Admin area\"\nAuthUserFile " . $docroot . "/.htpasswd\nRequire valid-user");

include_once $_SERVER['DOCUMENT_ROOT'] . "/tools/logIp.php"; logIP()

?>

<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Minteck Projects™  •  Pour un Internet libre !</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="icon" href="/images/favicon.ico" />
</head>
<body class="page">
    <nav class="floating-menu hide" id="menu"><iframe src="/extensions/menu.html" class="fm-iframe">Votre navigateur n'est (toujours) pas supporté par une ou plusieurs des fonctionnalités que nous utilisons</iframe></nav>
    <nav class="menubar" id="menubar"><iframe src="/extensions/navbar.html" class="mb-iframe">Votre navigateur n'est (toujours) pas supporté par une ou plusieurs des fonctionnalités que nous utilisons</iframe></nav>
    <div class="menubutton menubar" id="menubar">
        <a onclick="menu()" title="Menu" class="menulink-button"><img title="Menu" alt="MENU" src="/images/menu.png" height="28px" width="28px" /></a>
        <span class="separator"></span>
        <span class="mobilebar-text" id="mbtxt">minteck-projects://</span>
        <script>
            document.getElementById('mbtxt').innerHTML = "minteck-projects:/" + location.pathname
        </script>
        <img class="mobilebar-image" title="Logo" style="vertical-align: middle;float: right;margin-right: 25px;" alt="Logo Minteck Projects" src="/images/icon.png" height="28px" width="28px" />
    </div>

    <!-- Début du véritable contenu de la page -->

    <!-- <video autoplay muted loop id="background-video">
        <source src="video.mp4" type="video/mp4">
    </video> -->

    <div class="main-before"></div>
    <span class="main-title" id="welcome">Chez Minteck Projects™, nous défendons Internet !</span>
    <script>
        document.getElementById('welcome').innerHTML = '<b>_</b>';
    </script>
    <div class="main-after"></div>
    Nous sommes du même côté de Mozilla : <i>"Internet est un bien commun, respectons le !".</i><br>Minteck Projects respecte la vie privée de ses utilisateurs, tout en le proposant des services de qualité... Comme quoi, la violation de la vie privée ne permet pas d'améliorer la qualité de ses services !<br><br>Nous avons les qualités et avantages suivants :<ul>
        <li>Nous respectons la vie privée de nos utilisateurs.</li>
        <li>Nous sommes très transparents vis à vis de l'utilisation faite des données des utilisateurs.</li>
        <li>Nous ne privilégions jamais la quantité à la qualité.</li>
        <li>Nous sommes très au service de notre communauté, et très à l'écoute.</li>
        <li>Pour la plus part de nos services, nous vous donnons accès au code source de ces derniers.</li>
        <li>Nous sommes décentralisés, cela signifie que où que vous soyez, vous pouvez travailler avec nous.</li>
    </ul><br>Et malheureusement, comme tout le monde, nous "disposons" des inconvénients suivants:<ul>
            <li>Quand nous ne sommes pas actifs, c'est pour une longue durée.</li>
            <li>Nos serveurs sont fiables, mais pas suffisamment à notre gout.</li>
            <li>Nous ne communiquons quand français ou anglais.</li>
            <li>Nos programmes sont très peu multi-plateformes, souvent un programme dédié à une plateforme...</li>
            <li>Nous restons assez flou concernant notre identité réelle, pour des raisons de sécurité personnelle.</li>
            <li>Nous avons tendance à plus vous demander d'informations que nous en avons réellement besoin, ce qui peut mettre en situation d'incertitude certains utilisateurs.</li>
        </ul>
        <center><table>
            <tr>
                <td class="m-pres-security" id="security">
                    <center><img src="/images/m-pres-security.png" alt="Sécurité" class="m-pres-img"><span class="m-pres-separator1"></span><span class="m-pres-title">Sécurité et intégrité</span></center><br class="m-pres-separator2"><center>Nous accordons le plus grand soin à ce que nos utilisateurs soit en sécurité en utilisant nos services, ainsi qu'au fait que nos services soit fiables et stables le plus possible...</center>
                </td>
                <td class="m-pres-advertising" id="advertising">
                    <center><img src="/images/m-pres-advertising.png" alt="Publicité" class="m-pres-img"><span class="m-pres-separator1"></span><span class="m-pres-title">Publicité et partage</span></center><br class="m-pres-separator2"><center>Le partage, la prise de parole et la promotion sont des éléments indispensables au bon fonctionnement de nos produits, mais nous savons tout de même correctement les gérer pour ne pas être trop intrusifs au possible.</center>
                </td>
                <td class="m-pres-freedom" id="freedom">
                    <center><img src="/images/m-pres-freedom.png" alt="Slogan The Web is Freedom" class="m-pres-img"><span class="m-pres-separator1"></span><span class="m-pres-title"><i>"The Web is Freedom"</i></span></center><br class="m-pres-separator2"><center>Sur Internet, vous avez tous le droit d'être indépendants ! C'est pour cela que Minteck Projects vous demande un compte pour chacun de ses services, car nous nous doutons que vous n'allez pas tous les utiliser... Ainsi, vous n'êtes jamais dépendant de nos services !</center>
                    </td>
            </tr>
        </table></center>

        <hr>
        
        <center><img src="/images/icon.png" alt="Minteck Projects" height="128px"/><br><span class="slogan">minteck-projects://</span></center>
        <h2>Dernières nouvelles :  <a class="editLink" href="/tools/editNews">modifier</a></h2>
        <p><?php echo(file_get_contents('tools/news.txt')) ?></p>
        <hr>
        <h1>Qui sommes nous ?</h1>
        Minteck Projects est une organisation à but non lucratif proposant divers services liés à l'informatique et à l'électronique. Nous proposons principalement des services sur Internet, accessibles par tous.
        <h2>Où sommes nous ?</h2>
        Nos serveurs sont répartis un peu partout dans le monde, mais nous essayons tout de même de respecter les législations françaises. Ainsi, vous n'aurez aucun problème !
        <h2>Depuis quand sommes nous ici ?</h2>
        Nous sommes ici depuis septembre 2018, et d'ailleurs : Winbuntu, un de nos premiers produits, va bientôt ou a déjà (selon la date à laquelle vous lisez ce texte) fêté son anniversaire : <a href="http://winbuntu.co.nf/">allez voir juste ici</a> !<br>
        Nous fûmes fondé pour récupérer le projet Chat'Max (qui n'existe plus aujourd'hui malheureusement...), pour qu'il ne reste que 4 mois chez nous...<br>
        En janvier 2019, nous fondons Minteck Projects Private, une entreprise privée et personnelle pour le personnel de direction de Minteck Projects.
        <h2>Qui est Minteck ?</h2>
        Minteck, c'est sûrement celui qui vous écrit en ce moment ^^... Minteck est le PDG de Minteck Projects, depuis le début. C'est d'ailleurs lui qui à mis en place le partenariat avec Numit... Il a donné toutes les idées et avance seul dans son entreprise depuis tout ce temps... <i>(je ne dois pas vous cacher que ça en fait quand même beaucoup du travail pour rien recevoir en retour... Il faut être vraiment généreux pour accepter de travailler dans des conditions pareil... mais non, je rigole !)</i>
        <h3>Pourquoi n'en connaissons nous pas plus sur lui ?</h3>
        Malheureusement, il ne souhaite pas se présenter, et préfère encore garder ces distances avec Internet. Il cherche à garder privées toutes les informations personnelles, mais peut quand même parler avec vous, ne vous inquiétez pas (bon après peut être pas si vous avez pas l'air gentil)...
        <h1>Notre slogan</h1>
        Notre slogan actuel est <i>"The Web is Freedom"</i>, littéralement <i>"Le Web est libre"</i>. Il a été choisi comme slogan car il représente bien ce que nous essayons de vendre : des services où vous être libre d'être dépendant ou non, de les utiliser ou non... Contrairement aux autres entreprises proposant des services similaires, nous respectons énormément les législations en vigueur en France, et dans plusieurs autres pays...
        
        <!-- Script de démarrage -->
        <script>
        // console.log("Chargement de l'animation...")
    var welcome = document.getElementById('welcome')
    // console.log("Chargé !")
    setTimeout(function () {
        // console.log("Étape...")
        welcome.innerHTML = 'C<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Ch<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Che<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez <b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez M<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Mi<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Min<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Mint<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Minte<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Mintec<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Minteck<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Minteck <b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Minteck P<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Minteck Pr<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Minteck Pro<b>_</b>'
        setTimeout(function () {
            // console.log("Étape...")
        welcome.innerHTML = 'Chez Minteck Proj<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Proje<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projec<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Project<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™,<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, n<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, no<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nou<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous <b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous d<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous dé<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous déf<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défe<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défen<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défend<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendo<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendon<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons <b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons I<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons In<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Int<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Inte<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Inter<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Intern<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Interne<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Internet<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Internet <b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Internet !<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Projects™, nous défendons Internet !'
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    }, 100)
    
    var m_pres_mounted = false;
    var menu_default = true;
        function menu() {
        if (menu_default == true) {
            var x = document.getElementById("menu");
            fadeIn(x);
            document.getElementById("menu").style.display = "block";
            menu_default = false;
        } else {
        var x = document.getElementById("menu");
        if (x.style.display == "none") {
            fadeIn(x);
            document.getElementById("menu").style.display = "block";
        } else {
        fadeOut(x)
        setTimeout(function (x) {
            document.getElementById("menu").style.display = "none";
         }, 500);
        }
        }}
        function fadeIn(el){
  console.log("[mprjWeb.animation.jsHandler] Affichage du menu")
  el.classList.add('show');
  el.classList.remove('hide');  
}

function fadeOut(el){
  console.log("[mprjWeb.animation.jsHandler] Masquage du menu")
  el.classList.add('hide');
  el.classList.remove('show');
}

window.onscroll = function() {
 if(checkVisible(document.getElementById('security'))) {
    sca1();
 } else if (m_pres_mounted) {
     sca2();
 }
};

function sca1() {
    console.log("[mprjWeb.animation.jsHandler] Déclenchement de l'animation 'm-pres-security'")
    document.getElementById('security').classList.add('m-pres-security-animation');
    console.log("[mprjWeb.animation.jsHandler] Déclenchement de l'animation 'm-pres-advertising'")
    document.getElementById('advertising').classList.add('m-pres-advertising-animation');
    console.log("[mprjWeb.animation.jsHandler] Déclenchement de l'animation 'm-pres-freedom'")
    document.getElementById('freedom').classList.add('m-pres-freedom-animation');
    m_pres_mounted = true;
}

function sca2() {
    // console.log("[mprjWeb.animation.jsHandler] Destruction de l'animation 'm-pres-security'")
    // document.getElementById('security').classList.remove('m-pres-security-animation');
    // console.log("[mprjWeb.animation.jsHandler] Destruction de l'animation 'm-pres-advertising'")
    // document.getElementById('advertising').classList.remove('m-pres-advertising-animation');
    // console.log("[mprjWeb.animation.jsHandler] Destruction de l'animation 'm-pres-freedom'")
    // document.getElementById('freedom').classList.remove('m-pres-freedom-animation');
    // m_pres_mounted = false;
}

function checkVisible(element) {
var ret;
    var h1 = element;
    var bounding = h1.getBoundingClientRect();
    if (
	bounding.top >= 0 &&
	bounding.left >= 0 &&
	bounding.right <= (window.innerWidth || document.documentElement.clientWidth) &&
	bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight)
) {
	ret = true;
} else {
	ret = false;
}
return ret;
}
console.log("[mprjWeb.animation.jsHandler] Déclenchement de l'animation 'welcome'")
    document.getElementById("welcome").classList.add('welcome-animation');
    </script>
    <script language="JavaScript1.2">
<!--

/*
Submitted by Marcin Wojtowicz [one_spook@hotmail.com] 
Featured on JavaScript Kit (http://javascriptkit.com)
Modified by JK to be IE7+/ Firefox compatible
For this and over 400+ free scripts, visit http://javascriptkit.com
*/

var trailLength = 8 // The length of trail (8 by default; put more for longer "tail")
var path = "/images/cursor.gif" // URL of your image

var standardbody=(document.compatMode=="CSS1Compat")? document.documentElement : document.body //create reference to common "body" across doctypes
var i,d = 0

function initTrail() { // prepares the script
	images = new Array() // prepare the image array
	for (i = 0; i < parseInt(trailLength); i++) {
		images[i] = new Image()
		images[i].src = path
	}
	storage = new Array() // prepare the storage for the coordinates
	for (i = 0; i < images.length*3; i++) {
		storage[i] = 0
	}
	for (i = 0; i < images.length; i++) { // make divs for IE and layers for Navigator
		document.write('<div id="obj' + i + '" style="position: absolute; z-Index: 100; height: 0; width: 0"><img src="' + images[i].src + '"></div>')
	}
	trail()
}
function trail() { // trailing function
	for (i = 0; i < images.length; i++) { // for every div/layer
		document.getElementById("obj" + i).style.top = storage[d]+'px' // the Y-coordinate
		document.getElementById("obj" + i).style.left = + storage[d+1]+'px' // the X-coordinate
		d = d+2
	}
	for (i = storage.length; i >= 2; i--) { // save the coordinate for the div/layer that's behind
		storage[i] = storage[i-2]
	}
	d = 0 // reset for future use
	var timer = setTimeout("trail()",10) // call recursively 
}
function processEvent(e) { // catches and processes the mousemove event 
	if (window.event) { // for IE
		storage[0] = window.event.y+standardbody.scrollTop+1
		storage[1] = window.event.x+standardbody.scrollLeft+1
	} else {
		storage[0] = e.pageY+2
		storage[1] = e.pageX+2
	}
}

function hideUnsupportedNotice() {
    document.getElementById('unsupported').classList.add('hide1')
    setTimeout(function () { document.getElementById('unsupported').classList.add('hide2') }, 700)
}

	initTrail() 
	document.onmousemove = processEvent // start capturing

//-->
</script>

        <!-- Footer -->
        <br><div class="footer-placeholder"><iframe src="/extensions/footer.php" class="ft-iframe">Votre navigateur n'est (toujours) pas supporté par une ou plusieurs des fonctionnalités que nous utilisons</iframe></div>
        <div class="mobile-footer"><?php include_once($_SERVER['DOCUMENT_ROOT'] . "/extensions/mobile.php"); renderFooter() ?></div>

        <!-- Message de non-support d'un navigateur -->
        <div class="unsupported-ph" id="unsupported">
            <div class="unsupported-div centered hide2" id="us-chrome">
                <table>
                    <tr><td><img src="/images/unsupported-chrome.png" height=36px width=36px alt="<i>(logo)</i>" style="margin-right: 10px;"></td>   <td><h1>Navigateur non supporté</h1></td></tr>
                 </table>
                 Le navigateur que vous utilisez (Google Chrome) n'est pas correctement supporté par notre site, et il se peut qu'il y ait des problèmes d'affichages avec certains éléments.<br><br>Pour un meilleur rendu, nous vous conseillons de <a href="http://firefox.com">télécharger Mozilla Firefox</a>, un navigateur sur lequel notre site à été correctement testé...
                 <center><a onclick="hideUnsupportedNotice()">Laissez moi seul, et sur le site</a></center>
            </div>
            <div class="unsupported-div centered hide2" id="us-ie">
                <table>
                    <tr><td><img src="/images/unsupported-ie.png" height=36px width=36px alt="<i>(logo)</i>" style="margin-right: 10px;"></td>   <td><h1>Navigateur non supporté</h1></td></tr>
                 </table>
                 Le navigateur que vous utilisez (Internet Explorer) n'est pas correctement supporté par notre site, et il se peut qu'il y ait des problèmes d'affichages avec certains éléments.<br><br>Pour un meilleur rendu, nous vous conseillons de <a href="http://firefox.com">télécharger Mozilla Firefox</a>, un navigateur sur lequel notre site à été correctement testé...
                 <center><a onclick="hideUnsupportedNotice()">Laissez moi seul, et sur le site</a></center>
            </div>
            <div class="unsupported-div centered hide2" id="us-other">
                <table>
                    <tr><td><img src="/images/unsupported-other.png" height=36px width=36px alt="<i>(logo)</i>" style="margin-right: 10px;"></td>   <td><h1>Navigateur non supporté</h1></td></tr>
                 </table>
                 Le navigateur que vous utilisez n'est pas correctement supporté par notre site, et il se peut qu'il y ait des problèmes d'affichages avec certains éléments.<br><br>Pour un meilleur rendu, nous vous conseillons de <a href="http://firefox.com">télécharger Mozilla Firefox</a>, un navigateur sur lequel notre site à été correctement testé...
                 <center><a onclick="hideUnsupportedNotice()">Laissez moi seul, et sur le site</a></center>
            </div>
        </div>
        <script>
        String.prototype.contains = function(it) { return this.indexOf(it) != -1; };

if (navigator.userAgent.contains(".NET")) {
    document.getElementById('us-ie').classList.remove('hide2')
} else {
    if (navigator.userAgent.contains("Chrome")) {
    document.getElementById('us-chrome').classList.remove('hide2')
} else {
    if (!navigator.userAgent.contains("Firefox")) {
        document.getElementById('us-other').classList.remove('hide2')
    }
}
}

if (navigator.userAgent.contains(".NET") || navigator.userAgent.contains("Chrome") || !navigator.userAgent.contains("Firefox")) {} else {
    document.getElementById('unsupported').classList.add('hide2')
}
</script>

</body>
</html>