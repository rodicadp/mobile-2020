<?php
    include("select.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Despre noi</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="pages.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://maxcdn.bootstracdn.com/font-awesome/4.7.0/css/font-awsome.min.css" rel="stylesheet">
      </head>
   <body>
           <header>
              <nav class="nav" id="myTopnav">
                  <img class="logo" src="img/logo-4.jpg" alt="logo">
                  <img class="logo2" src="img/logo-5.jpg" alt="logo">
                  <section class="link-uri">
                     <a href="index.php">Acasa</a>
                     <a href="despre.php"  class="active">Despre noi</a>
 		             <a href="servicii.php">Servicii</a>
                     <a href="contact.php">Contact</a>
                     <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                 </section>
 		 </nav>
         <nav class="nav2" id="myTopnav2">
             <img class="logo" src="img/logo-4.jpg" alt="logo">
             <img class="logo2" src="img/logo-5.jpg" alt="logo">
                <a class="priml" href="index.php">Acasa</a>
                <a  class="act" href="despre.php" class="act">Despre noi</a>
                <a  class="ar" href="servicii.php" >Servicii</a>
                <a  class="ar" href="contact.php">Contact</a>
                <a href="javascript:void(0);" class="icon2" onclick="myFunction()"><i class="fa fa-bars"></i></a>
         </nav>
          <script>
          function myFunction() {
              var x = document.getElementById("myTopnav2");
             if (x.className === "nav2") {
                 x.className += " responsive";
             } else {
                 x.className = "nav2";
                     }           }
         </script>
 	</header>
<section id="desprenoi">
    <section class="despre">
  <h3>ECHIPA NOASTRA</h3>
<p>Trăim într-o lume în care medicina a devenit industrie, iar pacienții doar consumatori de medicamente și analize. Totuși, în Clinica Infosan veți întâlni o echipa formată din oameni în sensul clasic al cuvântului: cu părți bune și rele, cu calități și defecte, cu succese și eșecuri, dar cu o înalta ținută morală umană. Pentru noi, a reda, a menține sau a îmbunătăți lumina ochilor reprezintă țelul primordial. În acest sens, prin învățare și perfecționare, prin dotare, dar și prin comportament, ne străduim să creștem calitatea consultațiilor și a operațiilor, dar și gradul de siguranță și confort al pacienților noștri.</p>
</section>
<section class="doctori">
    <section class="linia1">
  <article class="w3-third">
    <img src="img/m1.png" alt="Random Name" style="width:50%">
    <p><strong>Nume: </strong> <?php echo $numeMedici[0]." ".$prenumeMedici[0]; ?> </p>
    <p><strong>Functie: </strong><?php echo $specializariMedici[0]; ?> </p>
  </article>
  <article class="w3-third">
    <img src="img/m2.png" alt="Random Name" style="width:50%">
    <p><strong>Nume: </strong> <?php echo $numeAsistenti[0]." ".$prenumeAsistenti[0]; ?></p>
    <p><strong>Functie: </strong><?php echo $specializariAsistenti[0]; ?></p>
  </article>
  <article class="w3-third">
    <img src="img/m3.png" alt="Random Name" style="width:50%">
    <p><strong>Nume: </strong><?php echo $numeAsistenti[1]." ".$prenumeAsistenti[1]; ?></p>
    <p><strong>Functie: </strong><?php echo $specializariAsistenti[1]; ?></p>
  </article>
</section>

<section class="linia2">
<article class="l2">
<img src="img/m4.png" alt="Random Name" style="width:50%">
<p><strong>Nume: </strong><?php echo $numeMedici[1]." ".$prenumeMedici[1]; ?></p>
<p><strong>Functie: </strong><?php echo $specializariMedici[1]; ?></p>
</article>
<article class="l2">
<img src="img/m5.png" alt="Random Name" style="width:50%">
<p><strong>Nume: </strong> <?php echo $numeAsistenti[2]." ".$prenumeAsistenti[2]; ?></p>
<p><strong>Functie: </strong><?php echo $specializariAsistenti[2]; ?></p>
</article>
<article class="l2">
<img src="img/m6.png" alt="Random Name" style="width:50%">
<p><strong>Nume: </strong> <?php echo $numeAsistenti[3]." ".$prenumeAsistenti[3]; ?></p>
<p><strong>Functie: </strong><?php echo $specializariAsistenti[3]; ?></p>
</article>
</section>
</section>
<section class="despre2">
    <p >Ne mandrim cu cei mai profesionisti medici, dedicati sanatatii tale. Atentia acordata detaliilor, explicatiile amanuntite, colaborarea
         stransa cu toti specialistii clinicii, permanenta perfectionare academica sunt doar cateva motive pentru care sa alegi cu incredere echipa Ophtalens R'.
</section>
</section>
<footer class="footer">
    <hr />
<ul id="f-menu">
    <li><a href="index.php">Acasa</a></li>
    <li><a href="despre.php">Despre noi</a></li>
    <li><a href="servicii.php">Servicii</a></li>
    <li><a href="contact.php">Contact</a></li>
</ul>
</footer>
</body>
</html>
