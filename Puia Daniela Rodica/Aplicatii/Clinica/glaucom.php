<?php
    include("select.php")
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Glaucom</title>
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
                <a class="ar" href="index.php">Acasa</a>
                <a  class="ar" href="despre.php">Despre noi</a>
                <a  class="ar" href="servicii.php" class="act">Servicii</a>
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
        <section>
            <section class="s">
                <div class="close">
                    <a href="servicii.php" title="Inapoi la Servicii"><i class="fa fa-close"></i></a>
                </div>
                <h1 class="s-titluri">Glaucom</h1>
                <ul>
                    <li class="lista"><span><strong><a title="Ciclofotocoagularea transclerală" href="#ciclofotocoagulare-transclerală">CICLOFOTOCOAGULAREA TRANSCLERALĂ CU LASER MICROPULSAT – OPȚIUNE NOUĂ ÎN TRATAMENTUL GLAUCOMULUI</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Presiunea intraoculară" href="#presiunea-intraoculară">PRESIUNEA INTRAOCULARĂ</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Examenul polului" href="#examenul">EXAMENUL POLULUI ANTERIOR AL GLOBULUI OCULAR</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Examenul campului vizual" href="#examinare-camp-vizual">EXAMENUL CÂMPULUI VIZUAL</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Tomografie" href="#tomografie">TOMOGRAFIA ÎN COERENȚĂ OPTICĂ (OCT)</a></strong></span></li>
                </ul>
                <section>
                    <button class="button-pret" id="modalBtn"><strong>PRETURI</strong></button>
                        <div id="simpleModal" class="modal">
                            <section class="modal-content">
                                <span class="closeBtn">&times;</span>
                                <h2>Preturi - Glaucom</h2>
                                <table class="tabel">
                                    <tr>
                                        <th>Serviciu</th>
                                        <th>Pret</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[12]; ?></td>
                                        <td><?php echo $pretS[12]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[13]; ?></td>
                                        <td><?php echo $pretS[13]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[14]; ?></td>
                                        <td><?php echo $pretS[14]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[15]; ?></td>
                                        <td><?php echo $pretS[15]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[16]; ?></td>
                                        <td><?php echo $pretS[16]; ?></td>
                                    </tr>
                                </table>
                            </section>
                        </div>
                </section>

                <p>Prin termenul de glaucom înțelegem un spectru de boli ce au în comun afectarea degenerativă a nervului care transmite vederea de la ochi la creier și anume a nervului optic. Consecința acestui proces este de la o diminuare progresivă a vederii până la pierderea completă și irecuperabilă a acesteia.</p>
                <p>Glaucomul reprezintă una din cauzele majore de pierdere ireversibilă a vederii peste tot în lume. Etnic, rasele neagră și galbenă sunt mai frecvent predispuse la anumite forme de glaucom decât rasa caucaziană. Totuși glaucoamele sunt frecvente și în arealul nostru geografic.</p>
                <p>Diferite forme de glaucom pot afecta ochii de diferite vârste. Există glaucoame prezente de la naștere (congenitale), glaucoame cu debut la vârsta copilăriei (juvenile) și glaucoame care afectează populația adultă. În această ultimă subcategorie (cea mai frecventă dealtfel) incidența bolii glaucomatoase crește odată cu înaintarea în vârstă.</p>
                Există glaucoame primare (sau primitive) în care boala apare în mod idiopatic (adică nu în relație cu alte boli ale ochiului sau organismului) și glaucoame secundare unor alte boli ale ochiului sau organismului. În majoritatea situațiilor glucoamele sunt asimptomatice sau devin simptomatice doar în fazele avansate de evoluție a bolii. În absența controalelor periodice la oftalmolog acești pacienți nu au nici o șansă de a fi detectați în stadiile precoce ale bolii ceea ce contribuie din păcate la depistarea tardivă a afecțiunii când și resursele terapeutice devin ineficiente.</p>
                <p>E<span class="red"> important de menționat </span>că glucomul nu beneficiază de un tratament curativ propriu-zis, adică boala nu poate fi vindecată, iar pierderea funcției vizuale nu poate fi recuperată. În cel mai bun caz, putem opri boala din evoluție - cu prezervarea funcției vizuale rămase, deși în majoritatea situațiilor reușim doar o încetinire a ritmului de pierdere a vederii pacienților.</p>
            </section>
            <section class="s">
                <p><strong><a name="ciclofotocoagulare-transclerală"></a><span>CICLOFOTOCOAGULAREA TRANSCLERALĂ CU LASER MICROPULSAT – OPȚIUNE <span class="red"> NOUĂ </span>ÎN TRATAMENTUL GLAUCOMULUI</span></strong></p>
                <p>Ciclofotocoagularea reprezintă o formă de cicloablație folosită în tratamentul glaucomului prin distrugerea epiteliului corpului ciliar și a stromei acestuia. Acest lucru determină scăderea tensiunii intraoculare prin scăderea secreției de fluid intraocular, umorul apos. Tratamentul s-a dovedit a fi eficient și sigur prin folosirea metodelor de tip contact transcleral cu utilizarea laserului diodă și a lungimilor de undă de 810 nm. Această modalitate și-a demostrat eficiența în toate formele de glaucom, însoțită însă și de efecte adverse precum hipotonie sau afectarea acuității vizuale. Dispozitivul MicroPulse P3 (Iridex) oferă eficacitate echivalentă sau superioară cu reducerea semnificativă a factorilor de risc.</p>
                <p>Aparatul MicroPulse are avantajul de a livra energia laser în pulsuri scurte oferind chirurgului timpul necesar abordării fiecărei arii specifice și, de asemenea, permițând țesutului timp suficient pentru a se raci între aplicațiile laser. Utilizat cu succes în afecțiunile retiniene, sistemul prin micropulsații de ciclofotocoagulare transsclerală folosind laserul Cyclo G6 (Iridex) și sonda Micropulse P3 a obținut rezultate excelente în ceea ce privește eficacitatea și siguranța în tratamentul glaucomului.</p>
                <p>Ciclofotocoagularea transclerală micropulsată livrează repetitiv, cu o energie scazută, unde laser, „micropulsuri”, care reduc riscurile asociate cu alte terapii distructive. Această tehnică este noninvazivă nefiind necesare nicio incizie și niciun implant. Procedura nu produce nicio daună țesutului, astfel că medicul poate repeta de câte ori este necesar pentru managementul glaucomului.</p>
                <p>O proporție importantă de pacienti pot fi tratați prin procedura de ciclofotocoagulare transsclerală micropulsată cu includerea următoarelor tipuri :</p>
                <ul>
                    <li>glaucom cronic cu unghi deschis,</li>
                    <li>glaucomul congenital,</li>
                    <li>glaucomul pigmentar sau glaucomul indus de folosirea corticosteroizilor, precum și alte tipuri de glaucom secundar.</li>
                </ul>
                <p>Tratamentul este îndeosebi util pacienților aflați pe terapie medicamentoasă maximală sau celor pentru care alte tipuri de tratament antiglaucomatos s-au dovedit a fi ineficiente. El poate înlocui chirurgia tradițională, poate fi realizat în timpul unor altor intervenții chirurgicale precum chirurgia cataractei sau procedeele antiglaucomatoase microincizionale. Li se adresează totodată și pacienților cu tulburări de coagulare sau cu alte afecțiuni ce pot interfera cu îngrijirea postoperatorie laborioasă după o intervenție chirurgicală clasică.</p>
                <p>Procedura de ciclofotocoagulare transclerală prin tehnologie laser micropulsată are eficiență înaltă în cazurile cu valori presionale mari încă de la început ( 30-50 mmHg). Din experiența noastră, o serie importantă de pacienți au prezentat reduceri ale presiunii intraocluare de la valori de peste 20-30 mmHg la valori între 10 si 20 mmHg. Majoritatea pacienților cu răspuns favorabil și-au menținut valorile presionale în intervalul fiziologic pentru o perioadă lungă de timp.</p>
                <p> Intervenția chirurgicală se realizează cu anestezie locoregională, fără dureri în timpul procedurii și, conform pacienților noștri, cu un minim disconfort în orele postoperatorii când se recomandă repaus. Postoperator se administrează tratament local cu antiinflamator. Reevaluări ale pacientului se realizează periodic cu înregistrarea valorilor presionale, iar o reducere semnificativă a acestora determină frecvent și suprimarea medicației antiglaucomatoase pe termen lung. În cadrul seriilor noastre de pacienți, precum și în cadrul rezultatelor prezente în studiile clinice internaționale, nu au existat cazuri de complicații importante de tipul hipotoniei, a edemului macular sau phtisis bulbi în rândul pacienților tratați cu laserul micropulsat.</p>
                <p>Diagnosticul bolii sau al suspiciunii de glaucom se poate face doar în urma unui consult oftalmologic de specialitate pe baza unui examen clinic specific completat de investigații paraclinice. Singura verigă terapeutică dovedit eficientă pentru încetinirea sau stoparea evoluției bolii glaucomatoase este reducerea presiunii intraoculare. Acest deziderat poate fi obținut prin tratament medicamentos, LASER-terapie, chirurgie clasică sau uneori o combinație a metodelor anterior menționate. În majoritatea glaucoamelor secundare un rol primordial îl are tratamentul afecțiunii de bază care a determinat apariția glaucomului.</p>
            </section>
            <section class="s"> <p>Principalele repere de urmărit în depistarea și monitorizarea evoluției bolii sunt:</p>
                    <p><strong><a name="presiunea-intraoculară"></a><span>PRESIUNEA INTRAOCULARĂ</span></strong></p>
                    <p>Valoarea presiunii intraoculare (exprimată în milimetri coloană de mercur) este expresia echilibrului între producția și evacuarea lichidului intraocular (umoarea apoasă). Deși nu toate formele de glaucom evoluează cu presiune intraoculară crescută, în majoritea cazurilor valorile presionale depășesc limitele normale. Acest lucru se datorează cel mai fecvent unui deficit de evacuare a lichidului intraocular la nivelul zonei de scurgere a acestuia în unghiul camerei anterioare a ochiului. După cum acest unghi este deschis sau închis, deosebim glaucoame cu unghi deschis și glaucoame cu unghi închis. Nu trebuie însă înțeles ca orice presiune intraoculară crescută înseamnă automat glaucom, dar presiunea intraoculară mare este un factor de risc major pentru dezvoltarea bolii glaucomatoase în timp. În egală măsură scăderea presiunii intraoculare prin diverse mijloace este singurul factor demonstrat eficient pentru prevenirea agravării bolii. Determinarea presiunii intraoculare se efectuează standard în cazul oricărei consultații oftalmologice din clinica noastră prin intermediul unei măsurători numită tonometrie. </p>
                    <p>Această investigație se realizează obligatoriu în cadrul consultației oftalmologice.</p>
            </section>
            <section class="s">
                <p><strong><a name="examenul"></a><span>EXAMENUL POLULUI ANTERIOR AL GLOBULUI OCULAR</span></strong></p>
                <p>Dă informații prețioase legate de zona de scurgere a lichidului intraocular. Lichidul intraocular (umoarea apoasă) se evacuează prin rețeaua trabeculară la nivelul unghiului camerei anterioare. Examenul biomicroscopic al polului anterior caracterizează profunzimea camerei anterioare a ochiului, posibile semne de glaucom secundar precum si rețeaua trabeculară printr-o examinare numită gonioscopie.</p>
                <p>Această investigație se realizează obligatoriu în cadrul consultației oftalmologice.</p>
            </section>
            <section class="s">
                <p><strong><a name="examinare-camp-vizual"></a><span>EXAMENUL CÂMPULUI VIZUAL</span></strong></p>
                <p>Este o investigație de bază în boala glaucomatoasă atât în diagnosticare cât și în monitorizarea evoluției bolii. Apreciază obiectiv anvergura vederii periferice (restricționată în glaucom) cât și sensibilitatea retiniană la stimulii luminoși (diminuată în glaucom). Este important de precizat că în stadiile precoce de evoluție a bolii glaucomatoase evaluarea câmpului vizual este în limite normale. Examenul câmpului vizual nu este o examinare de rutină ci o examinare electivă adresată pacienților suspecți de glaucom sau diagnosticați cu glaucom în baza unei recomandări de specialitate. Examenul câmpului vizual se efectuează printr-o investigație numita perimetrie.</p>
            </section>
            <section class="s">
                <p><strong><a name="tomografie"></a><span>TOMOGRAFIA ÎN COERENȚĂ OPTICĂ (OCT)</span></strong></p>
                <p>Tomografia în coerență optică a stratului fibrelor peripapilare a nervului optic, a discului optic și a stratului de celule ganglionare de la nivelul regiunii maculare sunt examinări paraclinice de baza în diagnosticul precoce și în monitorizarea pacienților cu boală glaucomatoasă îndeosebi la pacienții suspecți precum și în stadiile precoce de evoluție ale bolii. OCT - ul poate identifica defecte structurale precoce care scapă neidentificate în baza examenului obiectiv și este la ora actuală  "standardul de aur" în depistarea formelor incipiente de glaucom.</p>
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
        <script src="aplicatie.js"></script>
        </body>
        </html>
