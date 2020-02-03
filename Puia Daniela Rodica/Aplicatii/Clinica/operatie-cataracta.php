<?php
include("select.php")
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Operatie cataracta</title>
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
         <div id="Operatie">
                 <section class="s">
                     <div class="close">
                         <a href="servicii.php" title="Inapoi la Servicii"><i class="fa fa-close"></i></a>
                     </div>
                     <h1 class="s-titluri">Operatie cataracta</h1>
                     <ul>
                         <li class="lista"><span><strong><a title="Ce este cataracta?" href="#ce-este-cataracta">CE ESTE CATARACTA?</a></strong></span></li>
                         <li class="lista"><span><strong><a title="Factori aparitie cataracta" href="#factori-cataracta">CARE SUNT FACTORII CARE PREDISPUN LA APARIȚIA CATARACTEI?</a></strong></span></li>
                         <li class="lista"><span><strong><a title="Frecventa cataractei" href="#frecventa-cataracta">FRECVENȚA CATARACTEI</a></strong></span></li>
                         <li class="lista"><span><strong><a title="Examinare cataracta" href="#examinarea-oftalmologica">EXAMINAREA OFTALMOLOGICĂ, PREOPERATORIE</a></strong></span></li>
                         <li class="lista"><span><strong><a title="Metoda facoemulsificare cu sunete" href="#metoda-facoemulsificare">METODA PRIN FACOEMULSIFICARE CU SUNETE</a></strong></span></li>
                         <li class="lista"><span><strong><a title="Anestezia la operatia de cataracta" href="#anestezia-la-operatia-de-cataracta">ANESTEZIA</a></strong></span></li>
                         <li class="lista"><span><strong><a title="Avertizari la operatia de cataracta" href="#avertizari-la-operatia-de-cataracta">AVERTIZĂRI</a></strong></span></li>
                         <li class="lista"><span><strong><a title="Tratamentul cataractei" href="#tratamentul-cataractei">TRATAMENTUL CATARACTEI</a></strong></span></li>
                     </ul>


                     <section>
                         <button class="button-pret" id="modalBtn"><strong>PRETURI</strong></button>
                             <div id="simpleModal" class="modal">
                                 <section class="modal-content">
                                     <span class="closeBtn">&times;</span>
                                     <h2>Preturi - Operatie cataracta</h2>
                                     <table class="tabel">
                                         <tr>
                                             <th>Serviciu</th>
                                             <th>Pret</th>
                                         </tr>
                                         <tr>
                                             <td><?php echo $denumireS[5]; ?></td>
                                             <td><?php echo $pretS[5]; ?> </td>
                                         </tr>
                                         <tr>
                                             <td><?php echo $denumireS[6]; ?></td>
                                             <td><?php echo $pretS[6]; ?></td>
                                         </tr>
                                         <tr>
                                             <td><?php echo $denumireS[7]; ?></td>
                                             <td><?php echo $pretS[7]; ?> </td>
                                         </tr>
                                         <tr>
                                             <td><?php echo $denumireS[8]; ?></td>
                                             <td><?php echo $pretS[8]; ?> </td>
                                         </tr>
                                         <tr>
                                             <td><?php echo $denumireS[9]; ?></td>
                                             <td><?php echo $pretS[9]; ?> </td>
                                         </tr>
                                         <tr>
                                             <td><?php echo $denumireS[10]; ?></td>
                                             <td><?php echo $pretS[10]; ?> </td>
                                         </tr>
                                         <tr>
                                             <td><?php echo $denumireS[11]; ?></td>
                                             <td><?php echo $pretS[11]; ?> </td>
                                         </tr>
                                     </table>
                                 </section>
                             </div>
                     </section>
                 </section>
                 <section class="s">
                 <article>
                     <p><strong><a name="ce-este-cataracta"></a><span>CE ESTE CATARACTA?</span></strong></p>
                     <p>Cataracta este opacifierea cristalinului, care blochează pasajul fasciculului luminos către retină (componenta nervoasă a globului ocular la nivelul căreia se formează imaginea), cauzând vedere incețoșată.
                          Aproximativ 70% din persoanele peste 60 de ani au cataractă. Astfel, cataracta reprezintă prima cauza a orbirii în lume.</p>
                          <p class="img-cataracta"><img src="img/cataracta1.jpg" alt="cataracta"></p>
                 </article>
             </section>
                 <section class="s">
                     <p><a name="factori-cataracta"></a><span><strong>CARE SUNT FACTORII CARE PREDISPUN LA APARIȚIA CATARACTEI?</strong></span></p>
                         <p>Anumiți factori predispun la apariția bolii și anume:</p>
                         <ul>
                             <li>vârsta înaintată, îmbătrânirea (cataracta senilă);</li>
                             <li>expunerea excesivă la raze ultraviolete (UV), și anume, lumina naturală, expunerea artificială (saloane pentru bronzat artificial);</li>
                             <li>diabetul zaharat, în special diabetul decompensat (cu valori mari ale glicemiei);</li>
                             <li>alte boli oftalmologice: glaucomul (creșterea presiunii intraoculare), uveita cronică, retinita pigmentară (boală degenerativă a celulelor cu bastonașe și conuri de la nivelul retinei) sau dezlipirea de retină;</li>
                             <li>tratamentul cronic cu corticosteroizi (medicamente antiinflamatorii puternice);</li>
                             <li>expunerea frecventă sau tratamentul cu raze X;</li>
                             <li>agregarea familială (factorii genetici), unele persoane moștenesc o anumită predispoziție pentru apariția cataractei;</li>
                             <li>vitrectomia (îndepărtarea lichidului din interiorul globului ocular), în special în rândul persoanelor de peste 50 de ani;</li>
                             <li>leziunile oculare, o cauză mai rară de cataractă, întâlnită mai ales în rândul copiilor.</li>
                         </ul>
                         <p class="img-cataracta"><img src="img/ochi-afectat.jpg" alt="Cum vad ochii cataracta"></p>
                 </section>
                 <article class="s">
                     <p><a name="frecventa-cataracta"></a><span><strong>FRECVENTA CATARACTEI?</strong></span></p>
                     <p>Dacă un medic oftalmolog ar face dilatare pupilară tuturor pacienților de peste 65 de ani, ar observa la toți un grad de cataractă. Însă nu toate cazurile necesită intervenție chirurgicală.</p>
                     <p>În prezent, operația poate fi făcută în stadii precoce. Programarea acesteia ține de decizia pacientului.</p>
                 </article>
                 <section class="s">
                         <p><a name="examinarea-oftalmologica"></a><span><strong>EXAMINAREA OFTALMOLOGICĂ‚ PREOPERATORIE</strong></span> constă în:</p>
                         <ul>
                             <li>determinarea acuității vizuale și a refracției oculare;</li>
                             <li>examenul polului anterior al ochiului care dignostichează cataracta și apreciază duritatea nucleului;</li>
                             <li>examenul fundului de ochi pentru a exclude alte afecțiuni responsabile de scăderea acuității vizuale și care ar influența negativ rezultatul implantului (exemplu: degenerescența maculară legată de vârstă, degenerescența maculară miopică, dezlipirea de retină, obstrucția arterială sau venoasă);</li>
                             <li>examenul presiunii oculare pentru a exclude glaucomul;</li>
                             <li>examenul pahimetric (măsurarea grosimei corneei, prin microscopie speculară);</li>
                             <li>microscopie celulară (evaluarea celulelor endoteliale);</li>
                             <li>examenul ecografic pentru diagnosticul leziunilor de la nivelul polului posterior în cazul unor cataracte dense care nu permit vederea structurilor din spatele lor sau pentru calculul puterii implantului – biometrie oculară (exemplu: tumori oculare, decolare de retină care nu se pot evidenția prin cristalinul opacifiat total în cazul cataractei mature).</li>
                             <li>biometria oculară – care permite măsurarea:
                                     <ul>
                                         <li>axului antero-posterior al ochiului;</li>
                                         <li>adâncimea camerei anterioare;</li>
                                         <li>grosimea cristalinului;</li>
                                         <li>calcularea puterii lentilei intraoculare ce urmează a fi implantat.</li>
                                     </ul>
                             </li>
                         </ul>
                 </section>
                 <section class="s">
                     <p><a name="metoda-facoemulsificare"></a><span><strong>METODA PRIN FACOEMULSIFICAREA CU SUNETE</strong></span></p>
                     <p>Operatia de cataracta constă din extracția cristalinului opacifiat, urmată de implantarea unui cristalin artificial. Extragerea cristalinului natural se realizează cu ajutorul unui aparat ce generează ultrasunete, care fragmentează nucleul cristalinului opacifiat în particule microscopice și care apoi sunt aspirate, tehnică ce se numește facoemulsificare ultrasonică. Aceasta este tehnica cea mai modernă și sigură. Implantul se realizează printr-o incizie de 1,8 - 2,2 mm efectuată în cornee clară.</p>
                     <p>Ochiul este protejat printr-o substanță vâscoelastică introdusă în camera anterioară care atenuează vibrațiile ultrasunetelor pentru a nu afecta corneea. Capsula anterioară a cristalinului opacifiat este deschisă în zona centrală și prin orificiul de 4-5 mm se practică fragmentarea și extragerea întregului conținut opac al cristalinului, cu păstrarea intactă a învelișului acestuia, numit capsula în care se introduce apoi cristalinul artificial.</p>
                     <p>Pentru a putea fi implantat prin incizie de 1,8 - 2,2 mm, cristalinul artificial este din material biocompatibil moale, acrilic sau silicon foldabil, ceea ce permite plierea sa și poziționarea exact în locul cristalinului natural al ochiului.</p>
                     <p>Avantajele operației de cataractă prin facoemulsificare cu ultrasunete sunt:</p>
                     <ul>
                         <li>durata scurtă a intervenției;</li>
                         <li>dimensiunea foarte mică a inciziei;</li>
                         <li>lipsa firelor de sutură;</li>
                         <li>traumatism minim asupra țesuturilor oculare;</li>
                         <li>reabilitarea vizuală rapidă.</li>
                     </ul>
                     <p class="img-cataracta"><img src="img/operatie-cataracta.png" alt="operatie cataracta"></p>
                 </section>
                 <section class="s">
                     <p><strong><a name="anestezia-la-operatia-de-cataracta"></a><span>ANESTEZIA</span></strong></p>
                         <p>Anestezia locală asigură confortul pacientului și lipsa durerii. Aceasta poate fi realizată prin administrare topică de anestezic sau prin injecție retro sau parabulbară.</p>
                         <p>Anestezia topică (cu picături anestezice) este cel mai mult folosită în prezent. Aceasta asigură lipsa durerii, este ușoară pentru pacient și evită eventualele complicații ale injecției retrobulbare (exemplu hematomul orbitar, diplopia). Este indicată pacienților calmi, cooperanți, cu o bună acuitate auditivă.</p>
                 </section>
                 <section class="s">
                     <p><a name="avertizari-la-operatia-de-cataracta"></a><span><strong>AVERTIZĂRI</span></strong></p>
                     <p>Ca orice procedură chirurgicală, și aceasta implica anumite riscuri. Cu toate că rata complicațiilor este minoră, pot apărea lezarea endoteliului cornean, infecție (endoftalmită), dezlipire de retină, vitrită, edem macular cistoid (retenție patologică de lichid în țesuturile organismului, în particular în țesutul conjunctiv), edem cornean, bloc pupilar, membrană ciclitică, prolaps al irisului și glaucom tranzitoriu sau permanent.</p>
                 </section>
                 <section class="s">
                     <p><a name="tratamentul-cataractei"></a><span><strong>TRATAMENTUL CATARACTEI</span></strong></p>
                     <p>Intervenția chirurgicală este singura metodă folosită în mod curent pentru a trata simptomele cauzate de cataractă. Aceasta constă în îndepărtarea cristalinului (lentila naturală a globului ocular), deteriorat de cataractă.</p>
                     <p>Operația de cataractă este astăzi o operație scurtă, de rutină, care poate fi terminată în 5 – 10 minute. Noile tehnici au făcut ca operația să fie foarte sigură și de succes.</p>
                     <p>Riscurile și complicațile acesteia sunt rare. Cea mai gravă problemă, este faptul că, afectând în general persoanele în vârstă, cataracta coexistă cu alte afecțiuni. Medicii oftalmologi chirurgi pot descoperi că pacienții mai au degeneresecență maculară. Dacă tipul de degenerescență împiedică pacientul să vadă, intervenția chirurgicală ar putea fi o dezamăgire. Deși cataracta este îndepărtată cu succes, pacientul nu va putea să vadă prea bine.</p>
                     <p>După operație, pacientul pleacă acasă urmând să stea cu pansament la ochiul cu implant până ziua următoare când se prezintă la controlul postoperator. Există un tratament postoperator care durează între trei și șase săptămâni, tratament de întreținere și prevenție.</p>
                     <p>Tratamentul postoperator constă în general în coliruri și durează de obicei patru săptămâni.
                         Pentru a instila colirurile, pacientul se spală pe mâini, trage ușor de pleoapa inferioară în jos și picură 1-2 picături în sacul conjunctival. Se va lăsa câteva minute până la aplicarea unui alt colir astfel că acestea să nu se elimine unul pe altul. Neadministrarea tratamentelor postoperatorii corect sau suficient poate duce la afectarea permanentă a acuității vizuale. </p>
                     <p>Postoperator, pacientul poate citi, scrie, privi la televizor, găti, în general poate face activitățile uzuale care nu sunt afectate. Dacă acuitatea vizuală e bună poate conduce mașina. În primele săptămâni trebuie să evite eforturi fizice importante. Poate să se spele pe fața și poate face duș încă din prima zi postoperator, închizând ochiul operat. Poate dormi în orice poziție dorește, excepție făcând prima noapte după intervenție, când pacientul nu trebuie să doarmă pe partea cu ochiul operat.</p>
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
