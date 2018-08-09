<?php
header('Access-Control-Allow-Origin: *');

$content = "";
$filled = true;
if(isset($_GET['conseil'])){
  switch($_GET['conseil']){
    case 'handyinfo':
    $conseilH2 = '<h2>Handyinfoaménagement</h2>';

    $conseilImg =
    '<img src="img/logo-aide/logohandy.gif" alt="logo Handyinfoaménagement" />';

    $conseilRefP =
    '<p><strong>Handyinfoaménagement</strong><br />
					  Rue de France, 35<br />
					  5600 PHILIPPEVILLE</p>';

    $conseilCorrP =
    "<p><strong>Correspondant</strong><br />
					  Mr Benoît REMY - Coordinateur Handyinfo - Ergothérapeute<br />
					  Tél. : 081/777.100<br />
					  Fax : 081/777.829<br />
					  <a href='mailto:handyinfo@solidaris.be'>handyinfo@solidaris.be</a></p>";
    break;

    case 'solival':
    $conseilH2 = '<h2>Solival</h2>';

    $conseilImg =
    '<img src="img/logo-aide/logosolival-2017.jpg" width="200" height="auto" alt="logo solival" />';

    $conseilRefP =
    '<p><strong>asbl Solival</strong><br />
            Chaussée de Haecht, 579 bp40<br />
            1031 BRUXELLES<br />
 			Tél. : 078/15.15.00</p>';

    $conseilCorrP =
    "<p><strong>Correspondant</strong><br />
						Mr Jean-Benoît DUFOUR - Directeur<br />
						Tél. : 070/221.220<br />
						Fax : 02/243.20.57<br />
						<a href='mailto:info@solival.be'>info@solival.be</a></p>";
    break;

    case 'anlh':
    $conseilH2 = '<h2>Association Nationale pour le logement des personnes handicapées</h2>';

    $conseilImg =
    '<img src="img/logo-aide/logoSCAAT.gif" alt="logo ANLH asbl" />';

    $conseilRefP =
    "<p><strong>SCAAT - Service Conseils en Aménagements et Aides Techniques (ANLH asbl)</strong><br />
            Rue de la Fleur d'Oranger, 1/213<br />
            1150 BRUXELLES</p>";

    $conseilCorrP =
    "<p><strong>Correspondants</strong><br />
						Mme Herman Stéphanie<br />
						Mme Julie Martin<br />
						Tél. : 02/779.92.29<br />
						Fax : 02/779.26.77<br />
						<a href='mailto:scaat@anlh.be'>scaat@anlh.be</a> </p>";
    break;

    case 'cias' :
    $conseilH2 = '<h2>Centre Indépendant d’Aide Sociale des Mutualités Libres Wallonie-Bruxelles</h2>';

    $conseilImg =
    '<img src="img/logo-aide/LogoCIAS.gif" alt="logo CIAS" />';

    $conseilRefP =
    '<p><strong>asbl CIAS</strong><br />
						Boulevard Sainctelette 73 <br />
						7000 MONS</p>';

    $conseilCorrP =
    "<p><strong>Correspondant</strong><br />
						Mme Nathalie Delstanche<br />
						Tél.: 02/549.76.70<br />
						<a href='mailto:dap@partenamut.be'>dap@partenamut.be</a> </p>";
    break;

    case 'csd' :
    $conseilH2 = '<h2>La Centrale de Services à domicile</h2>';

    $conseilImg =
    '<img src="img/logo-aide/logocsd.gif" alt="logo CSD" />';

    $conseilRefP =
    '<p><strong>asbl CSD Réseau Solidaris</strong><br />
						379, rue de la Boverie<br />
						4100 SERAING</p>';

    $conseilCorrP =
    "<p><strong>Correspondante</strong><br />
						Mme Laurie GUERIN<br />
						Tél. : 04/338.20.20<br />
						<a href='mailto:laurie.guerin@solidaris.be'>laurie.guerin@solidaris.be</a>
            </p>
            <p>
						<span>Sandra Schioppa : <a href='mailto:sandra.schioppa@solidaris.be'>sandra.schioppa@solidaris.be</a></span><br />
						<span>Aleksandra Fivé : <a href='mailto:aleksandra.five@solidaris.be'>aleksandra.five@solidaris.be</a></span><br />
            </p>";
    break;

    case 'cpasChlr' :
    $conseilH2 =
    '<h2>CPAS de Charleroi</h2>';

    $conseilImg =
    '<img src="img/logo-aide/logoCPAS.gif" alt="logo CPAS de charleroi" />';

    $conseilRefP =
    '<p><strong>CPAS de Charleroi</strong><br />
    13, Boulevard Joseph II,<br />
    6000 CHARLEROI<br />
    <a href="http://www.cpascharleroi.be" target="_blank">http://www.cpascharleroi.be</a> <img alt="nouvelle fenêtre" src="img/link_blank.png"></p>';

    $conseilCorrP =
    "<p><strong>Correspondant</strong><br />
    Marie-France Stalens, chef de division des Services d'aide et de Soins à Domicile<br />
    Tél : 071/23.32.75<br />
    Fax : 071/23.32.70<br />
    <a href='mailto:coordi@cpascharleroi.be'>coordi@cpascharleroi.be</a></p>
    <p>Sylvie BAYOT - Ergothérapeute<br />
    Tél : 071/23.33.07<br />
    Fax : 071/23.32.70<br />
    <a href='mailto:sylvie.bayot@cpascharleroi.be'>sylvie.bayot@cpascharleroi.be</a></p>";
    break;

    default : $filled = false;
  }
  if($filled){
    $content = <<<HTML
    <div id="col-t">
          	<h1 id="escape">Obtenir un conseil en aménagement</h1>
            {$conseilH2}
              <div class="col-aide-img">
    	        	{$conseilImg}
            	</div>
              <div>
    						{$conseilRefP}
    					  {$conseilCorrP}
              </div>
        </div>
HTML;
  }
}
echo $content;
 ?>
