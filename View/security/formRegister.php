<form method="post">
    <label for="Username">Pseudo :</label>
    <input type="text" id="Username" name="username" placeholder="Votre Pseudo" required>
    <div class="error">
            <?php if (isset($errors['username'])) {
                echo($errors['username']);
            }
            ?>
        </div>


    <label for="mot_de_Passe">Mot de Passe:</label>
    <input type="password" id="mot_de_Passe" name="mot_de_Passe" placeholder="Votre Mot de Passe" required>
    <div class="error">
            <?php if (isset($errors['mot_de_Passe'])) {
                echo($errors['mot_de_Passe']);
            }
            ?>
        </div>


    <input type="submit" value="Envoyer">
</form>
