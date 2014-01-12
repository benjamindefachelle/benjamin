<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <body>
        <form method="POST" action="commentaire.php"enctype="multipart/form-data" onsubmit="return verifier();">
            <fieldset style="width:430px;">
                <legend><span style="text-decoration:underline;">Ajouter un commentaire</span></legend>
                <label for="text">Auteur :</label><br />
                <input type="text" name="auteur"><br />
                <label for="textarea"> commentaire :</label><br />
                <input type="textarea" name="commentaire"  /><br />
            </fieldset>
            <center><input type="submit" value="Valider" name="poster"/>
            <input type="submit" value="Annuler" /></center></font>
            <br>
        </form>
    </body>
</html> 