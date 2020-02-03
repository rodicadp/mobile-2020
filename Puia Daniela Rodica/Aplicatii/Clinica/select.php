<?php
include("aplicatie.php");

$querryExtragereMedici="SELECT nume_medic,prenume_medic,specializare FROM medici LIMIT 2";
$rezultat = $conexiune->query($querryExtragereMedici);
$numeMedici = array();
$prenumeMedici = array();
$specializariMedici = array();
    if(!$rezultat)
    {
        echo 'Eroare la extragere';
    }
    while($row = mysqli_fetch_assoc($rezultat))
    {
        $numeMedici[]= $row['nume_medic'];
        $prenumeMedici[]= $row['prenume_medic'];
        $specializariMedici[]= $row['specializare'];
    }

$querryExtragereAsistenti="SELECT nume_asistent,prenume_asistent,specializare FROM asistenti";
$rezultat1 = $conexiune->query($querryExtragereAsistenti);
$numeAsistenti = array();
$prenumeAsistenti = array();
$specializariAsistenti = array();
    if(!$rezultat1)
    {
        echo 'Eroare la extragere';
    }
    while($row = mysqli_fetch_assoc($rezultat1))
    {
        $numeAsistenti[]= $row['nume_asistent'];
        $prenumeAsistenti[]= $row['prenume_asistent'];
        $specializariAsistenti[]= $row['specializare'];
    }

$querryExtragereChirurgie="SELECT denumire, pret FROM servicii LIMIT 30";
$rez = $conexiune->query($querryExtragereChirurgie);
$denumireS = array();
$pretS = array();
    if(!$rez)
    {
        echo 'Eroare la extragere';
    }
    while($row = mysqli_fetch_assoc($rez))
    {
        $denumireS[]= $row['denumire'];
        $pretS[]= $row['pret'];
    }
    mysqli_close($conexiune);
 ?>
