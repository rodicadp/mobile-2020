<?php include("select.php") ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Consultatii</title>
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
                      <a href="despre.php">Despre noi</a>
  		             <a href="servicii.php" class="active">Servicii</a>
                      <a href="contact.php">Contact</a>
                      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                  </section>
  		 </nav>
         <nav class="nav2" id="myTopnav2">
             <img class="logo" src="img/logo-4.jpg" alt="logo">
             <img class="logo2" src="img/logo-5.jpg" alt="logo">
                <a href="index.php">Acasa</a>
                <a href="despre.php">Despre noi</a>
                <a href="servicii.php" class="act">Servicii</a>
                <a href="contact.php">Contact</a>
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
        <div>
            <section class="s">
                <div class="close">
                    <a href="servicii.php" title="Inapoi la Servicii"><i class="fa fa-close"></i></a>
                </div>
                <h1 class="s-titluri">Consultatii oftalmologice</h1>
                <p>Consultația oftalmologică cuprinde un set complet de investigații:</p>
                    <ul>
                        <li>refractometrie</li>
                        <li>consultație optometrică</li>
                        <li>tensiune intraoculară</li>
                        <li>biomicroscopie de pol anterior și pol posterior.</li>
                    </ul>
                </article>
                <article>
                    <p>După caz, mai pot fi necesare :</p>
                    <ul>
                        <li>gonioscopia</li>
                        <li>examinarea câmpului vizual</li>
                        <li>tomografia în coerență optică</li>
                        <li>ecografia</li>
                        <li>biometria oculară.</li>
                    </ul>
                    <p>În funcție de diagnostic, pacientul va fi orientat către un tratament specific, către optica medicală (pentru fabricarea ochelarilor sau comandarea lentilelor de contact) sau către operație. Toate aceste investigații și tratamente (inclusiv operația) sunt nedureroase, foarte eficiente și nu necesită nici o pregătire specială din partea pacientului.</p>
                    <p>O consultație oftalmologică cuprinde totalitatea procedurilor realizate de către echipa Centrului de Diagnostic și Chirurgie Oftalmologică Ophtalnes R' pentru a pune un diagnostic.</p>
                    <p class="red">Realizați programarea telefonic înainte de obținerea biletului de trimitere de la medicul de familie, pentru a evita expirarea datei acestuia, respectiv al doilea drum la medicul de familie.
Verificați telefonic disponibilitatea programărilor gratuite pe baza biletului de trimitere.</p>
                </article>
                <button class="button-pret" id="modalBtn"><strong>PRETURI</strong></button>
                    <div id="simpleModal" class="modal">
                        <section class="modal-content">
                            <span class="closeBtn">&times;</span>
                            <h2>Preturi - Consultatii oftalmologice</h2>
                            <table class="tabel">
                                <tr>
                                    <th>Serviciu</th>
                                    <th>Pret</th>
                                </tr>
                                <tr>
                                    <td><?php echo $denumireS[25]; ?></td>
                                    <td><?php echo $pretS[25]; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $denumireS[26]; ?></td>
                                    <td><?php echo $pretS[26]; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $denumireS[27]; ?></td>
                                    <td><?php echo $pretS[27]; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $denumireS[28]; ?></td>
                                    <td><?php echo $pretS[28]; ?></td>
                                </tr>
                            </table>
                        </section>
                    </div>
            </section>
        </div>
        <footer class="footer">
            <hr />
        <ul id="f-menu">
            <li><a href="index.php">Acasa</a></li>
            <li><a href="despre.php">Despre noi</a></li>
            <li><a href="servicii.php">Servicii</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
        </footer>
        <script src="aplicatie.js"></script>
    </body>
</html>
