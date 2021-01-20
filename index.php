<!DOCTYPE html>
<html lang="fr" dir="ltr">

</html>

<head>
  <title>Qui est-ce?</title>
  <meta charset="utf-8" />
</head>

<body>
  <center>
    <h1>Qui est-ce ?</h1>
  </center>

 <table>
    <tr>
      <td><img src="Images/1001001.png" /></td>
      <td><img src="Images/0010011.png" /></td>
      <td><img src="Images/1000110.png" /></td>
      <td><img src="Images/1011010.png" /></td>
      <td><img src="Images/1110000.png" /></td>
      <td><img src="Images/0110110.png" /></td>
      <td rowspan="3">
        <form action="jeu.php" method="post">
          <h3>&nbsp;&nbsp; 1. A-t-il des lunettes ?</h3>

          <input type="radio" id="Oui1" name="lunettes" value="1" required />
          <label for="Oui1">Oui</label><br />
          <input type="radio" id="Non1" name="lunettes" value="0" />
          <label for="Non1">Non</label>

          <h3>&nbsp;&nbsp;2. A-t-il une moustache ?</h3>

          <input type="radio" id="Oui2" name="moustache" value="1" required />
          <label for="Oui2">Oui</label><br />
          <input type="radio" id="Non2" name="moustache" value="0" />
          <label for="Non2">Non</label>

          <h3>&nbsp;&nbsp;3. A-t-il un chapeau ?</h3>

          <input type="radio" id="Oui3" name="chapeau" value="1" required />
          <label for="Oui3">Oui</label><br />
          <input type="radio" id="Non3" name="chapeau" value="0" />
          <label for="Non3">Non</label>

          <h3>&nbsp;&nbsp;4. A-t-il des cheveux ?</h3>

          <input type="radio" id="Oui4" name="cheveux" value="1" required />
          <label for="Oui4">Oui</label><br />
          <input type="radio" id="Non4" name="cheveux" value="0" />
          <label for="Non4">Non</label>

          <h3>&nbsp;&nbsp;5. A-t-il une boucle d'oreille ?</h3>

          <input type="radio" id="Oui5" name="boucleoreille" value="1" required />
          <label for="Oui5">Oui</label><br />
          <input type="radio" id="Non5" name="boucleoreille" value="0" />
          <label for="Non5">Non</label>

          <h3>&nbsp;&nbsp;6. A-t-il une barbe ?</h3>
          <form>
            <input type="radio" id="Oui6" name="barbe" value="1" required />
            <label for="Oui6">Oui</label><br />
            <input type="radio" id="Non6" name="barbe" value="0" />
            <label for="Non6">Non</label>

            <h3>&nbsp;&nbsp;7. A-t-il un noeud papillon ?</h3>

            <input type="radio" id="Oui7" name="noeudpap" value="1" required />
            <label for="Oui7">Oui</label><br />
            <input type="radio" id="Non7" name="noeudpap" value="0" />
            <label for="Non7">Non</label>

            <br />

            <input type="submit" value="Cliquez pour avoir la réponse">
          </form>
      </td>
    </tr>
    <tr>
      <td></td>
      <td><img src="Images/0000000.png" /></td>
      <td><img src="Images/0101010.png" /></td>
      <td><img src="Images/1010101.png" /></td>
      <td><img src="Images/0100101.png" /></td>
      <td></td>
    </tr>
    <tr>
      <td><img src="Images/1111111.png" /></td>
      <td><img src="Images/0111001.png" /></td>
      <td><img src="Images/1100011.png" /></td>
      <td><img src="Images/0001111.png" /></td>
      <td><img src="Images/1101100.png" /></td>
      <td><img src="Images/0011100.png" /></td>
    </tr>
  </table>

  <?php
  if (isset($_GET['image'])) {
    $numimage = '"Images/'.$_GET['image'].'.png"';
    ?>
  
    <style>
      table tr td img[src=<?php echo("$numimage");?>] {
        border: solid 4px red;
      }
    </style>

  <?php } ?>

  <?php
  if (isset($_GET['erreur'])) {
    $erreur = $_GET['erreur'];

    if($erreur == 7){
    echo ("Vous avez menti sur aucune question");
  }
    else
    {
      $erreur++;
      echo ("Vous avez menti sur la question " . $erreur);
    }
  } ?>


</body>