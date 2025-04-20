<!-- 

Le code source de ce site Web à intégralement été rédigé par Minteck de l'équipe de développement Minteck Projects, et nous consentons à faire passer ce message au début du code de chacune des pages de notre site comme une preuve d'authenticité du contenu du site.

moz://a 4 ever

 -->

<?php

if (isset($_GET['hl'])) {
    $lang = substr($_GET['hl'], 0, 2);
    $acceptLang = ['fr', 'en']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
} else {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    $acceptLang = ['fr', 'en']; 
    $lang = in_array($lang, $acceptLang) ? $lang : 'en';
}

?>

<!DOCTYPE html5>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $lang == 'en' ? "Error" : "Erreur" ?>  •  Minteck Projects™</title>
    <link rel="stylesheet" href="/styles/main.css">
    <link rel="icon" href="/images/favicon.ico" />
    <?php 

    if (isset($_GET['eid']))
    {
	    $errorId = $_GET['eid'];
    }
        else
    {
	    echo '<script>alert("Mmm... Les informations de l\'erreur ne sont pas valides");location.href = "/"</script>';
    };
    if (isset($_GET['etxt']))
    {
	    $errorDescription = $_GET['etxt'];
    }
        else
    {
	    echo '<script>alert("Mmm... Les informations de l\'erreur ne sont pas valides");location.href = "/"</script>';
    }

    ?>
</head>
<body class="specialpage">
    <nav class="floating-menu hide" id="menu"><iframe src="/extensions/menu.php?hl=<?= $lang ?>" class="fm-iframe">Votre navigateur n'est (toujours) pas supporté par une ou plusieurs des fonctionnalités que nous utilisons</iframe></nav>
    <nav class="menubar" id="menubar"><iframe src="/extensions/navbar.php?hl=<?= $lang ?>" class="mb-iframe">Votre navigateur n'est (toujours) pas supporté par une ou plusieurs des fonctionnalités que nous utilisons</iframe></nav>
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

    <div class="error_desktop"><span class="code"><?= $errorId ?>://</span><div class="edesc"><span class="ebig"><?= $lang == 'en' ? "Oops..." : "Oups..." ?></span><br><?= $lang == 'en' ? "Sorry, an error as occured" : "Désolé, une erreur s'est produite" ?><br><br><?= $lang == 'en' ? "Here's some useful info about it:" : "Voici quelques informations utiles la concernant :" ?><br><b><?= $errorDescription ?></b><br><br><?= $lang == 'en' ? "That's all we know..." : "C'est tout ce que nous savons..." ?></div></span></div>
    <div class="error_mobile"><span class="mcode"><?= $errorId ?>://</span><div class="medesc"><span class="mebig"><?= $lang == 'en' ? "Oops..." : "Oups..." ?></span><br><?= $lang == 'en' ? "Sorry, an error as occured" : "Désolé, une erreur s'est produite" ?><br><br><?= $lang == 'en' ? "Here's some useful info about it:" : "Voici quelques informations utiles la concernant :" ?><br><b><?= $errorDescription ?></b><br><br><?= $lang == 'en' ? "That's all we know..." : "C'est tout ce que nous savons..." ?></div></span></div>

    <!-- Fin du véritable contenu de la page -->

    <script>
    var welcome = document.getElementById('welcome')
    setTimeout(function () {
        welcome.innerHTML = 'C<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Ch<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Che<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez <b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez M<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Mi<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Min<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Mint<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minte<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Mintec<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck <b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck P<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Pr<b>_</b>'
        setTimeout(function () {
        welcome.innerHTML = 'Chez Minteck Pro<b>_</b>'
        setTimeout(function () {
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
    console.log("[mprjWeb.animation.jsHandler] Destruction de l'animation 'm-pres-security'")
    document.getElementById('security').classList.remove('m-pres-security-animation');
    console.log("[mprjWeb.animation.jsHandler] Destruction de l'animation 'm-pres-advertising'")
    document.getElementById('advertising').classList.remove('m-pres-advertising-animation');
    console.log("[mprjWeb.animation.jsHandler] Destruction de l'animation 'm-pres-freedom'")
    document.getElementById('freedom').classList.remove('m-pres-freedom-animation');
    m_pres_mounted = false;
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
</body>
</html>