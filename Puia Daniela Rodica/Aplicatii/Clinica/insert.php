<?php
session_start();
 include("aplicatie.php");
if(isset($_POST['index'])){

 $nume=$_POST['numep'];
 $prenume=$_POST['prenumep'];
 $email=$_POST['emailp'];
 $telefon=$_POST['telefonp'];
$data=$_post['dataprogramare'];
$sql="INSERT INTO pacienti (nume_pacient, prenume_pacient,email_pacient,telefon_pacient, data_)
VALUES ('$nume','$prenume','$email','$telefon','$data');";
$result2=mysqli_query($conexiune, $sql);
}
// header("Location: ../index.php?insert=succes");



///inserare - formularul de contact
if(isset($_POST['conform'])){
$firstname=$_POST['numele'];
$lastname=$_POST['prenumele'];
$email2=$_POST['emailul'];
$mesaj=$_POST['mesajul'];
$sqlf="INSERT INTO mesaje (nume, prenume,email,mesaj)
VALUES ('$firstname','$lastname','$email2','$mesaj')";
echo $sqlf;
$result=mysqli_query($conexiune, $sqlf);}
mysqli_close($conexiune);

header("Location: contact.php?include=success");
 ?>
