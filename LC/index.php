<?php
require('../vendor/autoload.php');
include './asset/php/header.php'
;?>

<div class="column-right">
  <div class="menu-right">
    <!-- Notes : les liens ne mènent nullepart.  -->
    <h2>J'ai besoin d'aide pour</h2>
    <ul>
      <li><a href="#">Communiquer (parler, écouter, lire, écrire)</a></li>
      <li><a href="#">Porter, déplacer, manipuler des objets</a></li>
      <li><a href="#">Préparer et manger un repas</a></li>
      <li><a href="#">Entretenir ma maison</a></li>
      <li><a href="#">Me laver, m'habiller</a></li>
      <li><a href="#">Aller aux toilettes</a></li>
      <li><a href="#">M'asseoir, me relever, me coucher, rester debout</a></li>
      <li><a href="#">Marcher, monter les escaliers</a></li>
      <li><a href="#">Me déplacer à l'extérieur</a></li>
      <li><a href="#">Rompre ma solitude, parler à quelqu'un</a></li>
      <li><a href="#">Soutenir mon entourage</a></li>
    </ul>
  </div>
  <form id="room-form" class="form-right" method="post" action="#">
    <!-- Notes : form en AJAX permettant de générer le texte dans la div 'room-box' -->
    <select id="room-select" name="room-select">
      <option value="">Choisissez une pi&egrave;ce</option>
      <option value="autour">Autour de chez soi</option>
      <option value="bureau">Bureau</option>
      <option value="chambre">Chambre</option>
      <option value="cuisine">Cuisine</option>
      <option value="escalier">Escalier</option>
      <option value="garage">Garage/Buanderie</option>
      <option value="jardin">Jardin</option>
      <option value="bain">Salle de bain</option>
      <option value="manger">Salon/Salle &agrave; manger</option>
      <option value="wc">WC</option>
    </select>
    <input id="room-submit" type="submit" name="submit" value="GO">
  </form>
</div>
<div class="column-left">
  <div class="main-content">
    <h1>Bien vivre chez soi</h1>
    <img src="" alt="Image à ajouter">
    <!-- Notes : Le contenu est masqué lorsqu'on explore une partie de la maison. -->
    <div class="main-content removable <?php echo ((isset($_POST['room-select']))?'removed':''); ?> " data-toRemove="removed">
      <p>Continuer à bien vivre chez soi malgré le grand âge ou un handicap est un choix et un droit. <br /> Pour faciliter le maintien à domicile, il existe : </p>
      <ul>
        <li>des services à domicile;</li>
        <li>du matériel adapté;</li>
        <li>des solutions d’aménagement des lieux;</li>
        <li>des interventions financières.</li>
      </ul>
      <p>Pour trouver des solutions aux difficultés que vous rencontrez dans la vie quotidienne,
        <ul>
          <li>cliquez :
            <ul>
              <li>sur une pièce de la maison</li>
              <li>ou sur une difficulté reprise dans la colonne de gauche.</li>
            </ul>
          </li>
          <li>ou bien
            <ul>
              <li>adressez-vous gratuitement à un <a href="conseils.php">service conseil en aménagement</a>.</li>
            </ul>
          </li>
        </ul>
    </div>
    <div id="room-box">
      <?php include './asset/php/room.php' ?>
    </div>
  </div>
</div>
<?php include './asset/php/footer.php'; ?>
