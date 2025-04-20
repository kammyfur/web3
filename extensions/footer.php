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
<html lang="fr" style="overflow: hidden;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mprjWebModule.extensions.FooterHTML - Webkit Modules</title>
    <link rel="stylesheet" href="/styles/main.css">
    <base target="_parent">
</head>
<body class="footer" style="height:253px;overflow:hidden;">
<center><div><img class="footer-logo" style="vertical-align:middle" src="/images/icon.png" width=64px height=64px /><span style="margin:10px"></span><span class="footer-text-ani" style="font-size:32px;font-family:'Zilla Slab Highlight';font-weight:bold;color:black;align-content:middle;text-shadow:none;"><span class="footer-text-ani">Minteck Projects™</span></span></div></center>
<center><div class="images">
    <a style="margin-top:15px;text-decoration:none;color:#fff;" onclick="return;"><?= $lang == 'en' ? "Our partnairs:" : "Nos partenaires :" ?></a>
    <a href="https://www.mozilla.org/fr/" title="Mozilla"><img class="footer-img-moz" style="vertical-align:middle;opacity:0.75;" src="/images/footer-mozilla.png" alt="moz://a" width=86.5px height=24.625px /></a>
    <a href="https://ubports.com/fr_FR/" title="UBports"><img class="footer-img-ubp" style="vertical-align:middle;" src="/images/footer-ubports.png" alt="ubports" width=45px height=45px /></a>
</div></center>
<hr style="border-color: #0059a2;border-top-width: 0px;border-radius: 100px;margin-left: 5%;margin-right: 5%;margin-top: 18px;">
<center><div class="rights">
                 Copyright © 2013-<?= date('Y') ?> Minteck Projects LLC, <?= $lang == 'en' ? "All Rights Reserved" : "Tous droits reservés" ?>.<br>
                <?= $lang == 'en' ? "Any partial or total duplicate of the content of this website or one of our projects are strictly unallowed." : "Toute copie partielle ou totale du contenu de ce site ou de nos autres projets est strictement interdite." ?><br><br>
                <?= $lang == 'en' ? "Minteck Projects™, and any other associated name are legal marks of Minteck Projects LLC in France and other countries." : "Minteck Projects™, et tout autre nom associé sont des marques légales de Minteck Projects LLC en France et dans d'autres pays." ?>
    </div></center>
</body>
</html>