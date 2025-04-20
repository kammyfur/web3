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
    <title>mprjWebModule.extensions.MenuHTML - Webkit Modules</title>
    <link rel="stylesheet" href="/styles/main.css">
    <base target="_parent">
    <style>
    
    a[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."] {
        display: none;
    }
    
    </style>
</head>
<body class="floating-menu-placeholder">
    <h3><?= $lang == 'en' ? "Browse" : "Navigation" ?></h3>
    <a href="/"><?= $lang == 'en' ? "Home" : "Accueil" ?></a>
    <a href="/prod"><?= $lang == 'en' ? "Projects" : "Projets" ?></a>
    <a href="/inf"><?= $lang == 'en' ? "About" : "À propos" ?></a>
    <a><?= $lang == 'en' ? "More" : "Plus" ?></a>
    <a style="margin-left:10px;" href="/branding"><?= $lang == 'en' ? "Branding" : "Charte graphique" ?></a>
    <a style="margin-left:10px;" href="/jobs"><?= $lang == 'en' ? "Jobs" : "Recrutement" ?></a>
    <!-- <a style="margin-left:10px;" href="/story"><?= $lang == 'en' ? "Our story (fr)" : "Notre histoire" ?></a> -->
</body>
</html>
