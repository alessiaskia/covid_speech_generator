<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Covid speech generator</title>
</head>

<body>
    <h1> Crée ton discours officiel COVID en quelques clics ! </h1>
    <p>N'as-tu jamais rêvé de réaliser ton discours COVID personnalisé, comme les grands politiciens de notre temps ? Mais bien sûr !</p>
    <p>Grâce à cette application, en peu de clics tu obtiendras un discours complet.</p>
    <form action="covid_speech_traitement.php" target="_blank" method="POST">

        <div class="leader">
            <h3>Choisis ton leader préféré : </h3>
            <select name="leader" required>
                <option disabled selected value> -- sélectionne une option -- </option>
                <option>Sophie Wilmès</option>
                <option>Alexander De Croo</option>
                <option>Emmanuel Macron</option>
            </select>
        </div>
        <div class="phrases">
            <h3>Choisis le debut de tes paragraphes : </h3>
            <select name=first required>
                <?php
                $phrasesDebut = [
                    "Face au virus, nous avons tous le pouvoir d’agir. ",
                    "La réussite dépend du civisme de chacune et chacun d’entre nous. ",
                    "Le coronavirus est un signal que nous ne pouvons pas ignorer. ",
                    "Nous nous retrouvons pour la présentation des nouvelles mesures décidées hier en Conseil de défense et de sécurité nationale. "
                ];

                echo "<option disabled selected value> -- sélectionne une option -- </option>";
                foreach ($phrasesDebut as $key => $phrase) {
                    echo "<option>$phrase</option>";
                };
                ?>
            </select>
            <br /> <br />
            <select name="second" required>
                <?php
                $fakeMilieu = [
                    "À nouveau, nous nous relèverons. Si nous sommes unis, et nous serons unis… ",
                    "Nous devons tenir, chacun à notre place, dans la transparence, le débat, sans oublier que… ",
                    "Mais aujourd'hui, la crise du coronavirus nous fait enfin prendre conscience de la profondeur du changement qui sera nécessaire: nous devons transformer notre mode de vie et cela... ",
                    "Nous devons impérativement continuer à respecter les règles difficiles de confinement et distanciation sociale, y compris durant cette période de retour du mauvais temps… ",
                ];

                echo "<option disabled selected value> -- sélectionne une option -- </option>";
                foreach ($fakeMilieu as $key => $phrase) {
                    echo "<option value='$key'>$phrase</option>";
                };
                ?>
            </select>
            <br /> <br />
            <select name="third" required>
                <?php
                $fakeFin = [
                    "Je compte sur chacun d’entre vous, je serai là, nous serons là… ",
                    "Nous avons besoin des uns des autres, nous sommes une nation unie et solidaire et c’est à cette condition que nous y arriverons... ",
                    "Il est évident qu’il y aura un avant et un après Covid-19, que ce soit dans la manière d’envisager notre rapport aux autres ou que ce soit dans le fonctionnement de notre société... ",
                    "Nous devons plus que jamais être soudés dans cette épreuve, et c’est ensemble que, j’en suis persuadé, nous la surmonterons... "
                ];

                echo "<option disabled selected value> -- sélectionne une option -- </option>";
                foreach ($fakeFin as $key => $phrase) {
                    echo "<option value='$key'>$phrase</option>";
                };

                ?>
            </select>
        </div>
        <br />
        <div class="send"><input type="submit" value="Génère ton discours !"></div>

    </form>
</body>

</html>