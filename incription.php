<?php require_once './inc/init.inc.php';
require_once './inc/haut.inc.php'; ?>
<p>Veuillez renseigner le formulaire pour vous inscrire.</p> 

   <form method="post" action="">
        <label for="pseudo">Pseudo</label><br>
        <input type="text" id="pseudo" name="pseudo" value="<?php echo $_POST['pseudo'] ?? ''; ?>"><br><br>

        <label for="mdp">Mot de passe</label><br>
        <input type="password" id="mdp" name="mdp" value="<?php echo $_POST['mdp'] ?? ''; ?>"><br><br>

        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" value="<?php echo $_POST['nom'] ?? ''; ?>"><br><br>
   
        <label for="prenom">Prénom</label><br>
        <input type="text" id="prenom" name="prenom" value="<?php echo $_POST['prenom'] ?? ''; ?>"><br><br>

        <label for="email">Email</label><br>
        <input type="text" id="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>"><br><br>

        <label>Civilité</label><br>
        <input type="radio" name="civilite" value="m" checked> Homme
        <input type="radio" name="civilite" value="f" <?php if (isset($_POST['civilite']) && $_POST['civilite'] == 'f') echo 'checked'; ?> > Femme <br><br>

        <label for="ville">Ville</label><br>
        <input type="text" id="ville" name="ville" value="<?php echo $_POST['ville'] ?? ''; ?>"><br><br>

        <label for="code_postal">Code postal</label><br>
        <input type="text" id="code_postal" name="code_postal" value="<?php echo $_POST['code_postal'] ?? ''; ?>"><br><br>

        <label for="adresse">Adresse</label><br>
        <textarea name="adresse" id="adresse" cols="30" rows="10"><?php echo $_POST['adresse'] ?? ''; ?></textarea><br><br>

        <input type="submit" value="s'inscrire" name="inscription" class="btn">
   </form> 
