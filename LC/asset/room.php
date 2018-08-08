<?php
function defineRoomStr($array)
{
  $roomStr="";
  foreach ($array as $str) {
    $roomStr .= '<p><strong>'.$str.'</strong></p>'."\n";
  }
  return $roomStr;
}

function start()
{
  $content = "";
  $empty = false;
  if(isset($_POST['submit'])){
    if(isset($_POST['room-select'])){
      // Notes : Changer les données ci-dessous pour coller au texte original :)
      switch($_POST['room-select']){

        case 'autour':
          $roomH1 = 'Autour de chez soi';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/autour-de-chez-soi.jpg" alt=""';
          $roomStr = defineRoomStr(["J'ai des difficultés pour me déplacer sur de longues distances.","Je ne sais pas aller faire mes courses.","Ma déficience visuelle ne m'incite pas à sortir de mon domicile."]);
          $roomQuotes = ["(comme une canne tactile ou un chien guide) ;","(comme un service de transport pour personnes à mobilité réduite) ;","l'aménagement des abords de mon domicile ou de mon véhicule."];
          break;

        case 'bureau':
          $roomH1 = 'Bureau';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/bureau.jpg" alt=""';
          $roomStr = defineRoomStr(["Je ne parviens pas à distinguer les petits caractères.","Je ne sais pas m'exprimer distinctement.","J'ai de plus en plus difficile à écrire lisiblement.","Je n'entends plus aussi bien qu'avant."]);
          $roomQuotes = ["(comme une loupe avec lampe ou un téléphone à amplificateur de sons ou un logiciel de lecture d'écran d'ordinateur) ;","(comme une aide familiale pour trier mes factures) ;","l'aménagement de mon domicile."];
          break;

        case 'chambre':
        $roomH1 = 'Chambres';
        $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/chambres.jpg" alt=""';
        $roomStr = defineRoomStr(["Je ne sais pas me mettre au lit sans risquer de chuter.","J'ai de grosses difficultés pour me relever du lit."]);
        $roomQuotes = ["(comme un lit réglable en hauteur ou en positionnement ou un lève-personnes);","(comme une aide ménagère qui pourrait ranger mon linge dans les armoires) ;","l'aménagement de mon domicile."];
          break;

        case 'cuisine':
          $roomH1 = 'Cuisine';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/cuisine.jpg" alt=""';
          $roomStr = defineRoomStr(["Je ne parviens pas à cuisiner, à me préparer un repas.","Je ne sais pas porter la nourriture à ma bouche.","J'ai des douleurs au niveau des mains."]);
          $roomQuotes = ["(comme les couverts adapté ou flexibles ou un ouvre-bocal adapté) ;","(comme une aide ménagère qui me ferait la cuisine ou un CPAS qui me porterait mes repas à domicile) ;","l'aménagement de mon domicile."];
          break;

        case 'escalier':
          $roomH1 = 'Escalier';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/escalier.jpg" alt=""';
          $roomStr = defineRoomStr(["Je ne parviens pas à monter l'escalier pour me rendre à l'étage.","Je manque de chuter lorsque je descends l'escalier."]);
          $roomQuotes = ["(comme un monolift) ;","(comme une aide familiale) ;","l'aménagement de mon domicile."];
          break;

        case 'garage':
          $roomH1 = 'Garage';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/garage-buanderie.jpg" alt=""';
          $roomStr = defineRoomStr(["Je ne parviens plus à conduire ma voiture, à entrer dans ma voiture.","J'ai des difficultés pour faire ma lessive."]);
          $roomQuotes = ["(comme un volant adapté ou un siège pivotant ou un système de freinage au volant ou une motorisation de la porte de garage) ;","(comme une aide ménagère qui s'occuperait de laver et repasser mon linge) ; ;","l'aménagement de mon domicile."];
          break;

        case 'jardin':
          $roomH1 = 'Jardin';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/jardin.jpg" alt=""';
          $roomStr = defineRoomStr(["Je ne sais pas m’abaisser pour entretenir mon parterre de fleurs.","Je n’ai pas la force de tondre ma pelouse.","L’arthrose de mes mains ne me permet plus de vernir les châssis de ma maison."]);
          $roomQuotes = ["(comme un outil de jardinage adapté) ;","(comme les services jardinage ou brico dépannage d’un CPAS) ;","l'aménagement des abords de mon domicile."];
          break;

        case 'bain':
          $roomH1 = 'Salle de Bain';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/sdb.jpg" alt=""';
          $roomStr = defineRoomStr(["Je ne parviens pas à enjamber le rebord de 25 cm de ma douche et encore moins celui de ma baignoire.","JJe manque d’équilibre en station debout."]);
          $roomQuotes = ["(comme une chaise haute pour me laver au lavabo ou une brosse à long manche qui me permettrait de me laver les pieds ou une brosse courbée pour le dos ou un enfile-chaussettes) ;","(comme une infirmière qui viendrait me laver quotidiennement et m’habillerait) ;","l'aménagement de mon domicile."];
          break;

        case 'manger':
          $roomH1 = 'Salle à manger';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/salon-sam.jpg" alt=""';
          $roomStr = defineRoomStr(["Mon manque de mobilité ne me permet pas de m’assoir sur le WC sans risquer de chuter.","J’ai beaucoup de mal à me relever de mon WC."]);
          $roomQuotes = ["(comme un déambulateur avec assise) ;","(comme une aide familiale) ;","l'aménagement de mon domicile."];
          break;

        case 'wc':
          $roomH1 = 'WC';
          $roomImg = 'src="http://bienvivrechezsoi.be/img/zones/wc.jpg" alt=""';
          $roomStr = defineRoomStr(["J'ai des difficultés pour me déplacer sur de longues distances.","Je ne sais pas aller faire mes courses.","Ma déficience visuelle ne m'incite pas à sortir de mon domicile."]);
          $roomQuotes = ["(comme une barre d’appui ou un rehausseur) ;","(comme une infirmière) ;","l'aménagement de mon domicile."];
          break;

        default : $empty = true;
      }
    }
    if(!$empty){
      $content = <<<HTML
        <h1>{$roomH1}</h1>
        <div id="zone-left">
          <img {$roomImg} />
        </div>
        {$roomStr}
        <p><em>En fonction de mes difficultés, je peux me renseigner sur :</em></p>
        <ul>
          <li><em>les aides matèrielles {$roomQuotes[0]} </em></li>
          <li><em>les services d'aide à domicile {$roomQuotes[1]} </em></li>
          <li><em>les aides financières pour l'achat d'une aide matérielle ou {$roomQuotes[2]} </em></li>
        </ul>
        <p><strong><em>Ces différentes informations sont regroupées dans le menu </em><a href="#"><em>Obtenir une aide</em></a>.</strong><strong><em></em></strong></p>
        <p><strong><em>Je peux également faire appel gratuitement à un service </em><a href="conseils.php"><em>conseil en aménagement</em></a></strong><em> qui va analyser les difficultés que je rencontre au quotidien et me proposera des aides techniques ou un aménagement de mon logement ou de mon véhicule afin de me rendre mon autonomie.</em></p>
HTML;
    }

echo $content;
  }
}

start();
?>
