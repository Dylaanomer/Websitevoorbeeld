<?php
$voornaam = mysqli_real_escape_string($link, $_REQUEST['voornaam']);
$achternaam = mysqli_real_escape_string($link, $_REQUEST['achternaam']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$telefoon = mysqli_real_escape_string($link, $_REQUEST['telefoon']);



$sql = "INSERT INTO adres (voornaam, achternaam, email, telefoon)
VALUES ('$voornaam', '$achternaam', '$email', '$telefoon')";
$result = mysqli_query($link, $sql);


if(mysqli_query($link, $sql)){
    echo "Uw contactgegevens zijn succesvol toegevoegd.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

    


?>