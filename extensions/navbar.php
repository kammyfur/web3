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
<html lang="fr" style="height:50px;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>mprjWebModule.extensions.MenuHTML - Webkit Modules</title>
    <link rel="stylesheet" href="/styles/main.css">
    <base target="_parent">
    <script src="/lib/jquery.js"></script>
</head>
<body class="navbar" style="height:50px;">
    <a href="/" class="image"><img src="/images/icon.png" height="28px" width="28px" alt="Logo Minteck Projects" /></a>
    <a href="/"><?= $lang == 'en' ? "Home" : "Accueil" ?></a>
    <a href="/prod"><?= $lang == 'en' ? "Projects" : "Projets" ?></a>
    <a href="/inf"><?= $lang == 'en' ? "About" : "À propos" ?></a>
    <a class="moretrigger" onclick="more()" id="moretrigger"><?= $lang == 'en' ? "More" : "Plus" ?> ►</a>
    <span class="more" id="more">
        <a href="/branding" class="morelink"><?= $lang == 'en' ? "Branding" : "Charte graphique" ?></a>
        <a href="/jobs" class="morelink"><?= $lang == 'en' ? "Jobs" : "Recrutement" ?></a>
        <!-- <a href="/story" class="morelink"><?= $lang == 'en' ? "Our story (fr)" : "Notre histoire" ?></a> -->
    </span>
    <script>
        function more() {
            // console.log("<" + document.getElementById('moretrigger').innerHTML + ">")
        if (document.getElementById('moretrigger').innerHTML == "<?= $lang == 'en' ? "More" : "Plus" ?> ►") {
            document.getElementById('moretrigger').innerHTML = "<?= $lang == 'en' ? "Less" : "Moins" ?> ◄"
            document.getElementById("more").style.display = "initial";
        } else {
            document.getElementById('moretrigger').innerHTML = "<?= $lang == 'en' ? "More" : "Plus" ?> ►"
            document.getElementById("more").style.display = "none";
        }}
    </script>
</body>
</html>