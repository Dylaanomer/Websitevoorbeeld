<!DOCTYPE html>
<?php include "includes/config.php" ?>
<?php include "includes/ships.php";?>
<html lang="en">
<head>
	<?php include "includes/styles.php" ?>
	<meta charset="UTF-8">
	<meta content="width=device-width" name="viewport">
	<title>Rederij Bestevaer</title>
</head>
<body>
	<main>
		<?php include "includes/links.php" ?>
    <br>
		<br>
		<br>
		<br>
		<div class="box">
			<form action="" method="post">
				<label for="schip_select">Schip</label><br>
				<select id="schip_select" name="schip_select">
					<option value="hermes">
						Hermes
					</option>
					<option value="luckystar">
          Luckystar
					</option>
					<option value="nsangela">
						NS Angela
					</option>
					<option value="sabrina">
						Sabrina
					</option>
					<option value="triumph">
						Triumph
					</option>
        </select><br><br>

        <label for="gewicht">Schip gewicht in Ton:</label><br>
        <input id="" name="gewicht" type="text"><br><br>

        <label for="m3">M3 volume:</label><br>
        <input id="" name="m3" type="text"><br><br>

        
				<label for="lading">Hoeveel je nog gaat laden:</label><br>
        <input id="" name="lading" type="text"><br><br>

        <label for="volume">M3 die je gaat laden:</label><br>
        <input id="" name="volume" type="text"><br><br>
        
        <input type="submit" name="submit"  value="Berekenen"><br><br>
        
      </form>

      <?php

			  if(isset($_POST["submit"]) ) {

			    $gekozen_schip = $_POST["schip_select"];
          $ship = GetShip($gekozen_schip);          
          $named = $ship['AA'];          
          $max_lading = $ship['GT'];
          $nieuwe_lading = $_POST['lading'];          
          $max_volume = $ship['M3'];
          $nieuwe_volume = $_POST['volume'];

          $nu_gewicht = $_POST['gewicht'];
          $nu_m3 = $_POST['m3'];


          $totaal_gewicht = ($nu_gewicht + $nieuwe_lading);
          $totaal_volume = ($nu_m3 + $nieuwe_volume);

          
          
          
          echo "Schip naam: $named.<br><br>";
          
          echo "De maximale lading is: $max_lading<br>";

          echo "De maximale volume is: $max_volume<br>";
          

          
          // Maak een if statement om te bepalen of de ingevoerde lading veilig is
          echo "<br>";
          // echo "Het is: niet veilig/veilig";
          if($max_lading >= $totaal_gewicht && $max_volume >= $totaal_volume){
              echo "De situatie is veilig, neem contact met ons op.";
          }
          else
          {
              echo "De situatie is onveilig, selecteer een andere schip of neem contact met ons op.";
          }
        
			}
     ?>

		</div>
    <br>
		<br>
		<br>
		<br>
	</main>
	<footer></footer>
</body>
</html>