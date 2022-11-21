<!-- Créer un formulaire qui contient une liste déroulante nommée “style” et un bouton
submit. La liste déroulante doit proposer au moins “style1”, “style2” et “style3. Créer 3
fichiers css nommés “style1.css”, “style2.css” et “style3.css”. Chaque style doit avoir
des effets sur le design du formulaire, la couleur de background, la police d’écriture...
Lorsque l’on valide le formulaire, le style sélectionné doit être inclus et donc le visuel
doit changer. -->

<link rel="stylesheet" href="style<?php echo $_POST['style'] . '.css' ?>">

<form action="" method="post">
    <select name="style" id="style">
        <option value="" selected>---sélectionnez le style---</option>
        <option value="1">style 1</option>
        <option value="2">style 2</option>
        <option value="3">style 3</option>
    </select>
    <input type="submit" value="switch">
</form>
