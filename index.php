<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">   
        <link rel="stylesheet" href="style.css" />
        <script type="text/javascript" src="functions.js"></script>
        <title>Practive Time</title>

    </head>


    <body>

<div class="boutons_nav">
    <input class="Mes_entraînements"
       type="button" onclick="window.location.href = 'mes_entrainements.php';"
       value="Mes entraînements">

    <input class="Mon_évolution"
       type="button" onclick="window.location.href = 'mon_evolution.php';"
       value="Mon évolution">
</div>

<br><br><br>

<div class="exercices_choice">
    <form method="post" required>
        <div>
            <label for="Date AAAA-MM-NN">Nom :</label>
            <input type="date" id="date" name="dateuser_name">
        </div><br>

        <select for="selectionner exercice" name="select" id= "select" required>
            <option value="selectionner_exercice">selectionner exercice</option>
            <!-- Index = 0
            Valeur = selectionner_exercice
            Texte = selectionner exercice -->
            <option value="developpe_couche">Developpé couché</option>
            <option value="souleve_de_terre">Soulevé de terre</option>
            <option value="traction">Traction</option>
            <option value="souleve_militaire">Soulevé militaire</option>
            <option value="squat">Squat</option>
            <option value="fente">Fente</option>
            <option value="corde">Corde traction triceps</option>
            <option value="tirage">Tirage poitrine</option>
            <option value="lombaire">Extension lombaire</option>
            <option value="abdos_jambes">Abdos sur banc : levé de jambes</option>
            <option value="abdos_buste">Abdos sur banc : levé de buste</option>
            <option value="tapis">Tapis de course</option>
            <option value="velo">Vélo</option>
            <option value="escalier">Monte marches</option>
            <option value="velo_el">Vélo élliptique</option>
            <option value="plg">Planche latérale gauche</option>
            <option value="pld">Planche latérale droite</option>
            <option value="psc">Planche face au sol sur coude</option>
            <option value="psb">Planche face au sol bras tendus</option>
            <option value="pont_sol">Pont bras au sol</option>
            <option value="pont_bras">Pont bras tendus</option>
        </select><br><br>
        
        <button type="button" onclick="choose()" id="button">Sélectionné</button>
    </form>
</div>

<br>
<br>
<img class="image" src="https://www.sport-passion.fr/pictures/alteres.jpg" />
<br>
<br>

<div class="afficher_exercice" id="flexbox">
    <form for="/truc" method="post">
        <div>
            <label for="Kg">Poids ajoutés :</label>
            <input type="number" step="0.25" id="poids" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Nombre de levées :</label>
            <input type="number" id="levees" name="dateuser_name">
        </div>
        <div>
            <label for="Degrès">Pente ou inclinaison :</label>
            <input type="number" id="pente" name="dateuser_name">
        </div>
        <div>
            <label for="Minutes">Durée de l'exercice :</label>
            <input type="entier" id="minutes" name="dateuser_name">
        </div>
        <div>
            <label for="Km/h">Vitesse de l'exercice :</label>
            <input type="number" step="0.25"  id="vitesse" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Difficulté choisie :</label>
            <input type="number" id="difficulte" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Distance réalisée :</label>
            <input type="number" step="0.25" id="difficulte" name="dateuser_name">
        </div>
        <div>
            <label for="Nombre entier">Nombre de marches :</label>
            <input type="number" id="difficulte" name="dateuser_name">
        </div>
        <div>
            <label for="Oui ou Non">Active :</label>
            <SELECT>
            <OPTION>Non
            <OPTION>Oui
            </SELECT>
        </div>
    </form>

    <br><br>

    <div class="boutons_valider">
        <input class="Valider"
        type="button"
        value="Valider">
    </div>

</div>


<!-- https://enacit.epfl.ch/cours/html/exercices/ex_boutons.html*/ 
     https://cssdeck.com/labs/css3-flexbox-flexible-box-layouts-flex-website -->

    </body>

</html>