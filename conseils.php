<?php include 'header.php'; ?>
<div id="content">
    	<h1>Obtenir un conseil en aménagement</h1>
				<p>Si vous avez des capacités restreintes par l’âge ou un handicap, la Plateforme Bien Vivre Chez Soi vous recommande de faire appel GRATUITEMENT à un service conseil en aménagement.</p>
				<p>Ce service se rend à domicile pour :</p>
				<ul>
					<li>analyser vos difficultés quand vous devez effectuer certaines tâches; </li>
					<li>conseiller du matériel ou des aménagements qui répondent à vos besoins; </li>
					<li>vous accompagner dans la mise en œuvre de votre projet.</li>
				</ul>
        <!-- Notes : Chacuns des liens enverra des infos en GET. -->
      <table width="100%" style="margin:auto">
        	<caption>Territoire couvert</caption>
        <tr>
        	<th>Services conseil</th>
        	<th>Plus de 65 ans</th>
          <th>Moins de 65 ans</th>
        </tr>
        <tr>
        	<td class="th3"><a href="#">Handyinfoaménagement</a></td>
          <td>Toute la Wallonie</td>
          <td>Toute la Wallonie</td>
        </tr>
        <tr>
        	<td class="th3"><a href="#">Solival</a></td>
          <td>Toute la Wallonie</td>
          <td>Toute la Wallonie</td>
        </tr>
        <tr>
        	<td class="th3"><a href="#">ANLH</a></td>
          <td class="black"></td>
          <td>Toute la Wallonie</td>
        </tr>
        <tr>
        	<td class="th3"><a href="#">CIAS</a></td>
          <td class="black"></td>
          <td>Toute la Wallonie</td>
        </tr>
        <tr>
        	<td class="th3"><a href="#">CSD Réseau Solidaris</a></td>
          <td>Uniquement la Province de Liège</td>
          <td>Uniquement la Province de Liège</td>
        </tr>
        <tr>
        	<td class="th3"><a href="#">CPAS de Charleroi</a></td>
          <td><a href="http://www.sisdcarolo.be/pages/quisommesnous.html" target="_blank">Charleroi étendu à la zone <br />du Service Intégré de Soins à Domicile </a></td>
          <td class="black"></td>
        </tr>
      </table>
    </div>
    <!-- Notes : C'est ici que s'affichent les infos lorsqu'on clique sur les liens. -->
    <div class="detailed-link">
      <?php
        include('detailed-conseils.php');
      ?>
    </div>
<?php include 'footer.php'; ?>
