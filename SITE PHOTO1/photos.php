<!DOCTYPE html>
<html lang="fr">
 
<head>
    <meta charset="utf-8">
    <title>RechercherPhoto</title>
    <link rel="stylesheet" href="css/global.css">
</head>
 
<body>
    <?php
    include "bloc_pied.html";
    include "bloc_menu.html";
    echo "<h1>Nos photos</h1>";
    ?>
    <form>
        <fieldset>
            <legend>Choix du type d'article</legend>
            <select name="photo">
                <option selected>Choix du type</option>
                <option value="Plage">Plage</option>
                <option value="Ville">Ville</option>
                <option value="Forêt">Forêt</option>
                <option value="Montagne">Montagne</option>
                <option value="Campagne">Campagne</option>
            </select>
            <input type="submit" name="button" value="RECHERCHER">
        </fieldset>
    </form>
 
    <?php
              include "connexionpdo.php";
        $cnx=connexionPDO();
        $req=$cnx->prepare("select photo from club photo");
        $req->execute();
        
        <select name="liste">
      
      while($ligne=$req->fetch(PDO::FETCH_OBJ)){
?>


 

        <option value="<?php echo $ligne->photo; ?>"><?php echo $ligne->photo; ?></option>
      </select>

 

 

<?php
while($ligne=$req->fetch(PDO::FETCH_OBJ)){
?>
  <a href="photo.php=<?php echo $ligne->photo; ?>"><?php echo $ligne->photo; ?></a>
  <?php
}
?>

 

 

        ?>
   <!-- while ($result = $infoPhptp->fetch(PDO::FETCH_ASSOC)) {
   		$nomphoto = $result["titre_photo"];
   		$txtPhoto = $result["texte_photo"];
   		$idArticle = $result["id_arti"];
   		$txtArticle = $result["texte_arti"];
   		$nomTypeArticle = $result["nom_type"];

   }
    ?>
 
</body>
 
</html>