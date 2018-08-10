<?php require './asset/php/header.php' ?>



<?php
if (!empty($_POST)){

    $error = array();

    if (empty($_POST['nom']) || !preg_match('/^[a-z0-9A-Z]/', $_POST['nom'])){
        $error['nom'] = "votre nom n'est pas valide, entrez un pseudo contenant des chiffres ou/et des lettres";
    }
    if (empty($_POST['prenom']) || !preg_match('/^[a-z0-9A-Z]/', $_POST['prenom'])){
        $error['prenom'] = "votre prénom n'est pas valide, entrez un pseudo contenant des chiffres ou/et des lettres";
    }

    if (empty($_POST['question'])) {
        $error['question'] = 'Veuillez répondre a la question relative a la demande AWIP';
    }
    if (empty($_POST['Frmtxtn'])) {
        $error['question'] = 'Veuillez sellectionner un format de texte';
    }
    if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $error['email']= "Votre adresse mail n'est pas valide";
    }
    if (empty($_POST['GDPR'])) {
        $error['GDPR'] = 'Veuillez répondre cocher la mension gdpr';
    }
    var_dump ($error);
}
//Récupération de l'image
if(!empty($_FILES)){
    $img=$_FILES['img'];
    move_uploaded_file($img['tmp_name'],"image/".$img['name']);
}
?>
    <form action="" method="POST">
        <div class="columns">
            <div class="column is-two-fifths">
                <div class="field">
                    <label class="label">Votre Nom</label>
                    <div class="control">
                        <input class="input is-info is-rounded" name="nom" type="text" placeholder="Text input">
                    </div>
                    <label class="label">Votre prénom</label>
                    <div class="control">
                        <input class="input is-info is-rounded" name="prenom" type="text" placeholder="Text input">
                    </div>

                    <label class="label"> Veuillez sellectionner une photo d'identification</label>
                    <form method="post" action="index.php" enctype="multipart/form-data">
                        <input type="file" name="img" id="fileToUpload"/>




                        <label class="label">Email</label>
                        <div class="control has-icons-left has-icons-right">
                            <input class="input is-info is-rounded " type="email" name="email" placeholder="Email input" value="">
                            <span class="icon is-small is-left">
                                <i class="fas fa-envelope"></i>
                            </span>

                            <div class="field">
                                <label class="label">Votre message</label>
                                <div class="control">
                                    <textarea class="textarea" name="message" placeholder="Textarea"></textarea>
                                </div>
                                <div class="form-check form-check-inline">
        <input class="control" type="radio" name="Frmtxt" id="html" value=".html">
        <label class="radio" for="html">.html</label>
      </div>
      <div class="control">
        <input class="form-check-input" type="radio" name="Frmtxt" id="txt" value=".txt">
        <label class="radio" for="txt">.txt</label>
      </div>
                            </div>
                        </div>
                        <p>Avez-vous déjà fait appel à l'AWIPH?</p>
                        <div class="field">
                            <div class="control">
                                <label class="radio">
                                    <input type="radio" name="question"> Oui
                                </label>
                                <label class="radio">
                                    <input type="radio" name="question"> Non
                                </label>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">votre année de naissance</label>
                            <div class="control">
                                <div class="select" name='BornYear'>
                                    <select>
                                        <option>1930</option>
                                        <option>1931</option>
                                        <option>1932</option>
                                        <option>1933</option>
                                        <option>1934</option>
                                        <option>1935</option>
                                        <option>1936</option>
                                        <option>1937</option>
                                        <option>1938</option>
                                        <option>1939</option>
                                        <option>1940</option>
                                        <option>1941</option>
                                        <option>1942</option>
                                        <option>1943</option>
                                        <option>1944</option>
                                        <option>1945</option>
                                        <option>1946</option>
                                        <option>1947</option>
                                        <option>1948</option>
                                        <option>1949</option>
                                        <option>1950</option>
                                        <option>1951</option>
                                        <option>1952</option>
                                        <option>1930</option>
                                        <option>1953</option>
                                        <option>1954</option>
                                        <option>1955</option>
                                        <option>1956</option>
                                        <option>1957</option>
                                        <option>1958</option>
                                        <option>1959</option>
                                        <option>1960</option>
                                        <option>1961</option>
                                        <option>1962</option>
                                        <option>1963</option>
                                        <option>1964</option>
                                        <option>1965</option>
                                        <option>1966</option>
                                        <option>1967</option>
                                        <option>1968</option>
                                        <option>1969</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>1974</option>
                                        <option>1975</option>
                                        <option>1976</option>
                                        <option>1977</option>
                                        <option>1978</option>
                                        <option>1979</option>
                                        <option>1980</option>
                                        <option>1981</option>
                                        <option>1982</option>
                                        <option>1983</option>
                                        <option>1984</option>
                                        <option>1985</option>
                                        <option>1986</option>
                                        <option>1987</option>
                                        <option>1988</option>
                                        <option>1989</option>
                                        <option>1990</option>
                                        <option>1991</option>
                                        <option>1992</option>
                                        <option>1993</option>
                                        <option>1994</option>
                                        <option>1995</option>
                                        <option>1996</option>
                                        <option>1997</option>
                                        <option>1998</option>
                                        <option>1999</option>
                                        <option>2000</option>
                                        <option>2001</option>
                                        <option>1930</option>
                                        <option>2002</option>
                                        <option>2003</option>
                                        <option>2004</option>
                                        <option>2005</option>
                                        <option>2006</option>
                                        <option>2007</option>
                                        <option>2008</option>
                                        <option>2009</option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                </div>
                <label class="checkbox">
                    <input type="checkbox" name="GDPR"> En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre
                    des activités de la communauté française et conformément au
                    <a href=https://fr.wikipedia.org/wiki/R%C3%A8glement_g%C3%A9n%C3%A9ral_sur_la_protection_des_donn%C3%A9es>
                        réglement général sur la protection des données </a>

                </label>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                </div>
            </div>
        </div>

    </form>

<?php require './asset/php/footer.php' ?>
