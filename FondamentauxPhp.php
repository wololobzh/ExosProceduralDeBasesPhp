<?php
echo "<p>Exercie 1 </p><hr/><br/>";
echo "<p>Transformer une phrase composée de mots écrits dans des casses différentes afin que chaque mot ait son premier caractère en majuscule.<p/>";
//Chaîne de caractères à transformer.
$chaine = "bonJoUr, jE Suis Une phrAsE pOur Tester";
//Transformation et affichage.
echo ucwords($chaine);


echo "<p>Exercie 2 </p><hr/><br/>";
echo "<p>Formater l’affichage d’une suite de chaînes contenant des noms et prénoms en respectant les critères suivants : un prénom et un nom par ligne, affichés sur 20 caractères chacun ; toutes les initiales des mots doivent être alignées verticalement.</p>";
//Liste des personnes à afficher
$personnes = array(array("Cosson","Anthony"),array("Sandy","Kilo"),array("Gui","Tare"));
echo "<pre>";
foreach ($personnes as $item)
{
    printf("%-20s %-20s <br/>",$item[0],$item[1]);
}
echo "</pre>";

echo "<p>Exercie 3 </p><hr/><br/>";
echo "<p>D'après Wikipédia, « Pour des raisons d'habitudes, d'ancienneté du principe, ou de facilité de mise en œuvre, de nombreux développeurs de logiciels utilisent ou ont utilisé le classement selon l’ordre des codes dans le codage de caractères utilisé (par exemple ASCII ou UTF-8), nommé ordre lexicographique ». 
Le problème est que si l'on trie '1abc', '2def' et '10ghi', le 10 sera entre le 1 et le 2. Ce n'est pas l'ordre naturel.
</p><p>Trier un tableau suivant l'ordre naturel.</p>";

$mots = array('56dfgdfj','1abc', '10ghi','2def','3dihfshdbk');
natsort($mots);
foreach ($mots as $mot)
{
    echo $mot . "<br/>";
}

echo "<p>Exercie 4 </p><hr/><br/>";
echo "<p>Calculer votre âge à l’instant actuel à la seconde près.</p>";

echo "<p>Exercie 5 </p><hr/><br/>";
echo "<p>À quel jour de la semaine correspondait le 25 décembre 2017 ? Afficher le résultat en français.</p>";

echo "<p>Exercie 6 </p><hr/><br/>";
echo "<p>Déterminer à quel jour de la semaine correspondront tous les 1er Mai des années comprises entre 2018 et 2037.<br/> 	
Si le jour est un samedi ou un dimanche, afficher le message « Désolé ! ». 	<br/>
Si le jour est un vendredi ou un lundi afficher « Week-end prolongé ! » sinon « En semaine ».</p>";

echo "<p>Exercie 7 </p><hr/><br/>";
echo "<p>Le jour de l’Ascension est le quarantième jour après le jour de Pâques (jour de Pâques compris dans les 40 jours). Calculer les dates de l’Ascension pour les années 2018 à 2037.</p>";

echo "<p>Exercie 8 </p><hr/><br/>";
echo "<p>Afficher le calendrier du mois courant</p>";

?>

<table border="1px">
    <tr>
        <td colspan="7" >

            <?php

                switch (date('n'))
                {
                    case 1 : echo "Janvier "; break;
                    case 2 : echo "Fevrier "; break;
                    case 3 : echo "Mars "; break;
                    case 4 : echo "Avril "; break;
                    case 5 : echo "Mai "; break;
                    case 6 : echo "Juin "; break;
                    case 7 : echo "Juillet "; break;
                    case 8 : echo "Aout "; break;
                    case 9 : echo "Septembre "; break;
                    case 10 : echo "Octobre "; break;
                    case 11 : echo "Novembre "; break;
                    case 12 : echo "Decembre "; break;
                }

                echo date('Y')

            ?>


        </td>
    </tr>
    <tr>
        <td>L</td>
        <td>M</td>
        <td>M</td>
        <td>J</td>
        <td>V</td>
        <td>S</td>
        <td>D</td>
    </tr>

    <tr>

        <?php

            $timeStampPremierJour = mktime(0,0,0,date('n'),1,date('Y'));

            $NumeroPremierJour = date("N",$timeStampPremierJour);

            $compteurLigne = 0;

            for($i=0;$i<$NumeroPremierJour-1;$i++)
            {
                echo "<td></td>";
                $compteurLigne ++;
            }

            for ($i=1;$i<=date("t");$i++)
            {
                echo "<td> $i </td>";
                $compteurLigne++;

                if($compteurLigne == 7)
                {
                    $compteurLigne = 0;
                    echo "</tr><tr>";
                }
            }
        ?>
</table>









