<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Covid speech generator</title>
</head>

<body>
    <?php

    $leaderChoisi = $_POST['leader'];
    $premierePhrase = $_POST['first'];
    $deuxiemePhrase = $_POST['second'];
    $troixiemePhrase = $_POST['third'];


    echo "<h2>Message de " . $leaderChoisi . " en occasion de la conférence de presse en date " . date("d/m/Y") . "</h2>";

    ?>

    <blockquote>
        <?php
        echo "<p>Mesdames et messieurs,</p> <p>" . $premierePhrase . "</p>";

        switch ($deuxiemePhrase) {
            case '0':
                echo "<p> À nouveau, nous nous relèverons. Si nous sommes unis, et nous serons unis, il faudra quand-même faire gaffe à ne pas être se retrouver collés les uns aux autres, voire ne pas respecter la distance de sécurité d'1m50. Donc oui, veillons à être unis, mais pas trop. </p>";
                break;
            case '1':
                echo "<p>Nous devons tenir, chacun à notre place, dans la transparence, le débat, sans oublier que - et je me dirige par là spécifiquement aux citoyens travaillant dans les domaines jugés non essentiels - il y aura toujours des voix qui comptent plus et d'autres moins. Je vous invite donc, mes chers concitoyens, à ne pas oublier quelle est votre place.</p>";
                break;
            case '2':
                echo "<p>Mais aujourd'hui, la crise du coronavirus nous fait enfin prendre conscience de la profondeurdu changement qui sera nécessaire: nous devons transformer notre mode de vie et cela veut dire que c'est très bien si tu as un partenaire maintenant, tu t'éviteras une grosse crise d'abstinence et tu sauras faire face à la deprime, alors que tant pis pour les autres, ciao ciao Tinder, soirées, bars et toute autre moyens modernes de draguer.</p>";
            case '3':
                echo "<p>Nous devons impérativement continuer à respecter les règles difficiles de confinement et distanciation sociale, y compris durant cette période de retour du mauvais temps, où vous serez obligés de marcher dans les parcs sous la pluie, la grêle, la boue si vous voulez voir vos amis et famille, alors que vous voudriez juste rester bien enfoncé(e)s dans vos canap avec votre thé et biscuits.</p>";
                break;
        }
        switch ($troixiemePhrase) {
            case '0':
                echo "<p> Je compte sur chacun d’entre vous, je serai là, nous serons là, et nous y arriverons tous ensemble, juste avec une dizaine de kilos de plus et (vous, carrément, pas moi) les poches vides. </p>";
                break;
            case '1':
                echo "<p>Nous avons besoin les uns des autres, nous sommes une nation unie et solidaire et c’est à cette condition que nous y arriverons, bien que personne ne sait quand ni comment ni pourquoi.</p>";
                break;
            case '2':
                echo "<p>Il est évident qu’il y aura un avant et un après Covid-19, que ce soit dans la manière d’envisager notre rapport aux autres ou que ce soit dans le fonctionnement de notre société, comme le fait que plus personne ne se fera plus la bise pour peur de se choper quelque chose, on continuera à tout acheter sur Amazon en contribuant à l'exploitation de travailleurs sans droits, ou encore  les apéros-Zoom qui auront définitivement remplacé les soirées en boîte. Ou au moins, ceci est ce que je me souhaite.</p>";
                break;
            case '3':
                echo "<p>Nous devons plus que jamais être soudés dans cette épreuve, et c’est ensemble que,j’en suis persuadé, nous la surmonterons. Sinon, vous n'avez qu'à proposer des manifs que je ne vais pas autoriser.</p>";
                break;
        }

        ?>
    </blockquote>
</body>

</html>