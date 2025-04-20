<!--
Portion de code HTML5
Cette portion de code est destinée à être chargée par PHP et ne peut pas être utilisée séparément (en "standalone").

Utiliser la fonction renderFooter() du fichier mobile.php pour effectuer le rendu du contenu de cette portion de code.
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

<style>

a[title="Hosted on free web hosting 000webhost.com. Host your own website for FREE."] {
    display: none;
}

</style>

<hr>
<center><div><img style="vertical-align:middle" src="/images/icon.png" width=24px height=24px /><span style="margin:10px"></span><span style="font-size:18px;font-family:'Zilla Slab Highlight';font-weight:bold;color:black;align-content:middle;text-shadow:none;">Minteck Projects</span></div></center>
<center><div class="images">
    <a style="margin-top:15px;text-decoration:none;color:#fff;" onclick="return;"><?= $lang == 'en' ? "Our partnairs:" : "Nos partenaires :" ?></a><br>
    <a href="https://www.mozilla.org/fr/" title="Mozilla"><img style="vertical-align:middle;opacity:0.75;margin-top:15px" src="/images/footer-mozilla.png" alt="moz://a" width=86.5px height=24.625px /></a><br>
    <a href="https://ubports.com/fr_FR/" title="UBports"><img style="vertical-align:middle;" src="/images/footer-ubports.png" alt="ubports" width=45px height=45px /></a>
</div></center>
<center><div class="rights">
                Copyright © Minteck Projects LLC, <?= $lang == 'en' ? "All Rights Reserved" : "Tous droits reservés" ?>.<br>
                <?= $lang == 'en' ? "Any partial or total duplicate of the content of this website or one of our projects are strictly unallowed." : "Toute copie partielle ou totale du contenu de ce site ou de nos autres projets est strictement interdite." ?><br><br><?= $lang == 'en' ? "Minteck Projects™, and any other associated name are legal marks of Minteck Projects LLC in France and other countries." : "Minteck Projects™, et tout autre nom associé sont des marques légales de Minteck Projects LLC en France et dans d'autres pays." ?>
    </div></center>
