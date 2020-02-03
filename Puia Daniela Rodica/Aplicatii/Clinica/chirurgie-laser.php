<?php
    include("select.php")
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Chirurgie - laser</title>
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
        <div id="chirurgie">
            <section class="s">
                <div class="close">
                    <a href="servicii.php" title="Inapoi la Servicii"><i class="fa fa-close"></i></a>
                </div>
                <h1 class="s-titluri">Chirurgie laser</h1>
                <ul>
                    <li class="lista"><span><strong><a title="Chirurgie refractiva" href="#chirurgie-refractiva">CHIRURGIE REFRACTIVĂ</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Capsulotomia - cataracta secundara" href="#capsulotomia-cataracta-secundara">CAPSULOTOMIA (CATARACTA SECUNDARĂ)</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Fotocoagulare laser" href="#fotocoagulare-laser">FOTOCOAGULARE LASER</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Iridotomie laser - glaucom cu unghi ingust" href="#iridotomie-laser">IRIDOTOMIE LASER</a></strong></span></li>
                </ul>
                <section>
                    <button class="button-pret" id="modalBtn"><strong>PRETURI</strong></button>
                        <div id="simpleModal" class="modal">
                            <section class="modal-content">
                                <span class="closeBtn">&times;</span>
                                <h2>Preturi - Chirurgie laser</h2>
                                <table class="tabel">
                                    <tr>
                                        <th>Serviciu</th>
                                        <th>Pret</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[0]; ?></td>
                                        <td><?php echo $pretS[0]; ?> </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[1]; ?></td>
                                        <td><?php echo $pretS[1]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[2]; ?></td>
                                        <td><?php echo $pretS[2]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[3]; ?></td>
                                        <td><?php echo $pretS[3]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[4]; ?></td>
                                        <td><?php echo $pretS[4]; ?></td>
                                    </tr>
                                </table>
                            </section>
                        </div>
                </section>
</section>




<section class="s">
    <p><strong><a name="chirurgie-refractiva"></a><span>CHIRURGIA REFRACTIVĂ</span></strong></p>
    <p>Scăpați de ochelari sau lentile de contact cu ajutorul laserului!</br>
    <span class="red">Rețineți : În general ochiul se operează o singură dată, deci faceți alegerea cea mai bună!</span></p>
    <article>
        <h1>Definiție :</h1>
        <p>Chirurgia refractivă corectează viciile de refracție (miopia, hipermetropia, astigmatismul) cu ajutorul laserului, modificând structura însăși a ochiului.
             De mai bine de 25 ani, ochelarii și lentilele de contact nu mai sunt singura alternativă pentru a corecta vederea.</p>
    </article>
    <article>
        <h1>Indicații :</h1>
        <p>În general, toți pacienții care poartă ochelari pot apela la acest tratament. Există însă și excepții, de exemplu în cazul viciilor de refracție mari, al anumitor boli oculare sau generale preexistente. O consultație oftalmologică specializată va determina acest lucru. Din punct de vedere al vârstei,
             defectul de vedere trebuie să fie stabil în ultimii doi ani, ceea ce se întâmplă cel mai des după 20 de ani. Nu există limită de vârstă superioară.</p>
    </article>
    <article>
        <h1>Tehnică :</h1>
        <img class="tehnica" src="img/serviciu1.jpg" alt="Tehnica folosita">
        <p>Centrul nostru folosește o tehnică de ultimă generație, utilizată în cele mai moderne clinici din toată lumea. Intervenția este total nedureroasă, durează 10-15 minute și nu necesită internare. Se desfășoară în sala de operații, într-un mediu steril, cu anestezia locală prin picături. Pacientul este prin urmare conștient pe tot parcursul operației și poate chiar comunica cu chirurgul.
Medicul oftalmolog alege tehnica chirurgicală adecvată fiecărui caz în parte : LASIK (Laser in Situ Keratomileusis), PRK (Keratectomie Fotorefractivă), etc. În cazul tehnicii PRK, se procedează prin dezepitelizarea corneei (îndepărtarea primului strat al corneei), iar în cazul LASIK-ului se realizează un flap cornean de o anumită grosime, ce rămâne atașat de restul corneei printr-o "balama" și se pune la loc la sfârșitul operației.
Următorul pas este tratamentul laser propriu-zis. Aparatul laser Excimer Allegretto Wave Eye Q, programat anterior pentru fiecare pacient în parte, remodelează stroma corneană astfel încât post-operator imaginea să se focalizeze pe retină și pacientul sa nu mai aibă nevoie de corecție optică. La finalul operației se administrează picături și se aplică o lentilă de contact terapeutică ce se va menține pe ochi timp de 1-7 zile.</p>
    </article>
    <article>
        <h1>Aparatură și accesorii folosite :</h1>
        <p>Blocul operator al clinicii OPTICRISTAL este echipat după standardele europene, cu aparate de cel mai înalt nivel tehnologic, unice în Județul Brașov și printre singurele disponibile în regiunea transilvăneană. Chirurgia refractivă este realizată cu ajutorul laserului Excimer.
             Toate materialele folosite în timpul operației sunt furnizate de firma Alcon, lider mondial în produsele oftalmologice, și sunt de unică folosință.</p>
    </article>
    <article>
        <h1>Complicații :</h1>
        <p>Ca de altfel orice fel de intervenție chirurgicală, operațiile laser nu sunt lipsite de posibile complicații, deși acestea sunt extrem de rare. Acestea vă vor fi explicate pe larg în timpul consultației oftalmologice. Există de asemenea riscul unei fragilizări excesive ale corneei, care ar constrânge pacientul să poarte din nou ochelari sau lentile de contact.
            Acest risc este totuși aproape inexistent datorită preciziei măsurătorilor efectuate în timpul consultului preoperator.</p>
    </article>
    <article>
        <h1>După operație :</h1>
        <p>Senzația de disconfort ocular postoperator poate dura câteva ore sau câteva zile. Este indicat portul unor proteze în timpul nopții, pentru a evita frecarea ochilor cu mâinile. Trebuie de asemenea evitat orice contact cu apa timp de câteva zile după intervenție, și contactul prelungit cu apa timp de 4 săptămâni. Rezultatul vizual definitiv este considerat atins după 3-6 luni.
            În cazul existenței altor afecțiuni oculare, această operație nu va reda vederea pierdută din aceste alte cauze. Postoperator, veți vedea la fel ca înainte de operație, dar fără ochelari!</p>
    </article>
</section>
<section class="s">
    <p><strong><a name="capsulotomia-cataracta-secundara"></a><span>CAPSULOTOMIA</span> – opacifierea capsulei posterioare (sau cataractă secundară).</strong>
    <p>Această problemă apare la un interval variabil de timp de la operația de cataractă (între câteva săptămâni și cațiva ani)
         și constă în opacifierea capsulei posterioare a cristalinului natural (capsulă ce rămâne pe loc la operația de cataractă).</p>
         <p>Tratamentul constă în efectuarea unei breșe (orificiu) în mijlocul acestei foițe pentru a elibera axul vizual.</p>
         <p>Procedura se efectuează cu laserul  NdYag de ultimă generație din dotarea clinicii noastre și este total nedureroasă. Procedura începe prin efectuarea unei anestezii topice (cu picături) și dilatarea (tot cu picături) a pupilei ochiului afectat. Apoi, medicul oftalmolog va efectua tratamentul laser propriu-zis (se poate opta sau nu pentru aplicarea unei lentile pe ochi). Tratamentul laser constă în emiterea de impacte laser ce determină ruperea capsulei cristaliniene și crearea unui orificiu central.</p>
         <p>După tratamentul laser, veți primi un flacon de picături, pe care va trebui să le instilați de 3-4 ori pe zi, timp de 7 zile. În primele zile, este normal să observați mici umbre/opacități care plutesc în ochi.</p>
</section>
<section class="s">
    <p><strong><a name="fotocoagulare-laser"></a><span>FOTOCOAGULARE LASER</span></strong></p>
    <p>Acest tratament se aplică la indicațiile medicului oftalmolog, în cazul unor anumite afecțiuni oculare – retinopatie diabetică avansată, rupturi retiniene, degenerescențe sau distrofii retiniene etc</p>
    <p>Scopul acestui tratament este acela de a preveni aparițiile unor complicații ale acestor boli și de a încetini sau chiar stopa scăderea vederii.
Mecanismul de acțiune este diferit în funcție de afecțiune.</p>
<p>În retinopatia diabetică și accidentele vasculare retiniene tratamentul laser crește oxigenarea și vascularizația la nivelul retinei și previne apariția  "neovaselor " (ce duc la complicații oculare severe). În rupturi, distrofii sau degenerescențe retiniene limitează zona afectată, prevenind decolarea retinei. Edemul macular îmbunătățește circulația la nivelul maculei (zona centrală de vedere) și elimină surplusul de lichid intra sau subretinian.</p>
<p>Tehnicile de tratament cu laser sunt diferite și alese de oftalmolog în funcție de boala preexistentă – fotocoagulare focală, grid macular, fotocoagulare localizată sau generalizată (panfotocoagulare). Tratamentul se poate realiza în una sau mai multe ședințe.</p>
<p>Tratamentul laser se poate asocia, la indicația medicului oftalmolog cu alte tipuri de tratament specific:  terapie medicamentoasă, injecții intraoculare, chirurgie vitreoretiniană. De asemenea, după un anumit interval de timp, fotocoagularea se poate repeta.</p>
<p>De obicei, în urma tratamentului, mai ales în cazul retinopatiei diabetice sau a edemului macular, se constată o îmbunătățire a vederii. Reamintim însă că principiul scop al tratamentului este acela de a preveni apariția unor complicații și de a încetini sau chiar a stopa scăderea vederii.</p>
</section>
<section class="s">
<p><strong><a name="iridotomie-laser"></a><span>IRIDOTOMIE LASER</span></strong></p>
<p>Glaucomul cu unghi îngust apare datorită unei configurații anormale a ochiului, în care porțiunea din ochi (unghiul camerular), pe unde se drenează umoarea apoasă (lichidul din ochi), este mai îngustă decât ar trebui, ceea ce face ca umoarea să se acumuleze, ducând la creșterea presiunii intraoculare.</p>
<p>Tratamentul constă în crearea unei căi suplimentare de drenaj a lichidului din ochi. Acest lucru se realizează prin efectuarea unuia sau mai multor orificii la nivelul irisului (partea colorată a ochiului).</p>
<p>Procedura se numește IRIDOTOMIE, se efectuează cu laserul NdYag de ultimă generație din clinica noastră și este total nedureroasă.</p>
<p>Procedura începe prin efectuarea unei anestezii topice (cu picături). Apoi, medicul oftalmolog va aplica o lentilă pe ochi și va începe tratamentul laser propriu-zis, care constă în emiterea unor impacte laser ce determină formarea unei breșe la nivelul irisului.
Tratamentul se efectuează în una sau două ședințe laser pentru fiecare ochi.</p>
<p>După tratamentul laser, veți primi un flacon de picături, pe care va trebui să le instilați de 3-4 ori pe zi, timp de 7 zile. În primele zile, este normal să observați mici umbre/opacități care plutesc în ochi.</p>
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
