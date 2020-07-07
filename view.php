<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>client</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body class="text-center marge">
    <h1 class="bg-blue">AUTO - COMPLETION PHP-AJAX-JS </h1>
    <div class="flex-row flex-center">
        <form  method="post" id="form">
            <fieldset>
                <legend class="text-center"><h2>Nouvelle Personne </h2></legend>
                <div class="">
                    <div class="group" id="resultat">

                    </div>
                    <input type="hidden" name="id">
                    <div class="group flex-row-between">
                        <label for="">CNI</label>
                        <input type="text" id="cni" name="cni" class="input" required>
                    </div>
                    <div class="group flex-row-between">
                        <label for="">Prenom &MediumSpace;&MediumSpace;</label>
                        <input type="text" id="prenom" name="prenom" class="input" required>
                    </div>
                    <div class="group flex-row-between">
                        <label for="">Nom</label>
                        <input type="text" id="nom" name="nom" class="input" required>
                    </div>
                    <div class="group flex-row-between">
                        <label for="">Age</label>
                        <input type="number" id="age" name="age" class="input" required>
                    </div>
                    <div class="button">
                        <input type="button" value="Valider" name="valider" id="valider"  onclick="FormValider()" />
                    </div>
                </div>
            </fieldset>
        </form>
        <div class="form">
            <fieldset class="field">
                <legend><h2>Recherche Personne </h2></legend>
                <div class="group flex-row-between">
                    <label for="">CNI &MediumSpace;&MediumSpace; </label>
                    <input list="trouve" type="text" name="search" id="search"  onkeyup="searchValid()" class="input"/>
                    <datalist id="trouve">

                    </datalist>
                </div>
                <div class="field" id="info">
                    <img src="ok.png" alt="ok">
                </div>
            </div>
            </fieldset>
        <script src="ajax.js"></script>
</body>
</html>