<?php
include('connect.php');

if(isset($_POST["submit"]) && isset($_GET["id"])){

    $nom = addslashes($_POST["text"]);
    // $userId = $_GET["id"];
    $sql = "INSERT INTO `commentaire`(texte)
    VALUES('$nom', '$userId)";
    // header("location:visu.php");
    echo $sql;


   if(mysqli_query($conn, $sql)){
    echo "succes";
   }else{
    echo "error: ". $sql . "<br>" .mysqli_error($conn);
   }
   mysqli_close($conn);

}
?>