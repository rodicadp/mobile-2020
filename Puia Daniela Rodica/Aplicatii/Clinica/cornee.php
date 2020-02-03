<?php
    include("select.php")
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Cornee</title>
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
             <a class="act" href="servicii.php" class="act">Servicii</a>
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
        <div id="Cornee">
            <section class="s">
                <div class="close">
                    <a href="servicii.php" title="Inapoi la Servicii"><i class="fa fa-close"></i></a>
                </div>
                <h1>Cornee</h1>
                <ul>
                    <li class="lista"><span><strong><a title="Pterigionul" href="#pterigion">PTERIGIONUL</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Keratoconus" href="#keratoconus">KERATOCONUS</a></strong></span></li>
                </ul>
                <button class="button-pret" id="modalBtn"><strong>PRETURI</strong></button>
                    <div id="simpleModal" class="modal">
                        <section class="modal-content">
                            <span class="closeBtn">&times;</span>
                            <h2>Preturi - Cornee</h2>
                            <table class="tabel">
                                <tr>
                                    <th>Serviciu</th>
                                    <th>Pret</th>
                                </tr>
                                <tr>
                                    <td><?php echo $denumireS[21]; ?></td>
                                    <td><?php echo $pretS[21]; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $denumireS[22]; ?></td>
                                    <td><?php echo $pretS[22]; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $denumireS[23]; ?></td>
                                    <td><?php echo $pretS[23]; ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo $denumireS[24]; ?></td>
                                    <td><?php echo $pretS[24]; ?></td>
                                </tr>
                            </table>
                        </section>
                    </div>
            </section>
            <section class="s">
                <p><strong><a name="pterigion"></a><span>PTERIGIONUL</span></strong></p>
                <p class="img-cataracta"><img src="img/pterigionul.jpg" alt="pterigion"></p>
                <article>
                    <h1>Definiție :</h1>
                    <ul>
                        <li>îngroșare vascularizată progresivă a conjunctivei</li>
                        <li>arată ca o membrană aproximativ triunghiulară, întinsă dinspre unghiul intern al ochiului înspre centru</li>
                        <li>în stadiile avansate, diminuează acuitatea vederii si deranjează din punct de vedere estetic.</li>
                    </ul>
                </article>
                <article>
                    <h1>Frecvență:</h1>
                    <ul>
                        <li>apare de cele mai multe ori la adulți</li>
                        <li>mai frecvent la bărbați decât la femei</li>
                        <li>asociat cu expunerea la raze UV, substanțe toxice, temperatură sau vânt extreme, etc.</li>
                    </ul>
                </article>
                <article>
                    <h1>Simptome:</h1>
                    <ul>
                        <li>senzație de corp străin</li>
                        <li>usturime</li>
                        <li>lăcrimare</li>
                        <li>uscăciune oculară</li>
                    </ul>
                </article>
                <article>
                    <h1>Tratament:</h1>
                    <ul>
                        <li>cu cât este depistat mai repede, cu atât șansele de recuperare sunt mai mari;</li>
                        <li>disconfortul provocat poate fi tratat prin picături, dar vindecarea completă este posibilă numai în urma operației. Aceasta este nedureroasă, se realizează cu anestezie locală, fără internare și nu presupune restricții speciale</li>
                        <li>dacă pterigionul reapare, o a doua operație este necesară.</li>
                    </ul>
                </article>
            </section>
            <section class="s">
                <p><strong><a name="keratoconus"></a><span>KERATOCONUS</span></strong></p>
                <p class="img-cataracta"><img class="poza "src="img/keratoconic.jpg" alt="keratoconus"></p>
                <p><strong><span>Keratoconusul </span></strong>este o afecțiune oculară caracterizată prin subțierea progresivă și ectazierea (bombarea) corneei. În lipsa tratamentului corespunzător, boala avansează în majoritatea cazurilor, existând riscul ca straturile profunde ale corneei să fie afectate, ducând consecutiv la înrăutățirea vederii și dureri oculare. Singurul tratament care poate vindeca această boală este transplantul de cornee.</p>
                <p>Tehnica COLLAGEN CROSS LINKING este singura metodă de tratament care poate stopa sau încetini progresia bolii, prevenind astfel necesitatea unui transplant cornean.</p>
                <p>Cauza exactă a keratoconusului este necunoscută. Se estimează că există mai puțin de 10% șanse ca un pacient să moștenească keratoconusul de la un membru al familiei. </p>
                <p>Pacienții cu keratoconus au o tendință de frecare intensă a ochilor.</p>
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
