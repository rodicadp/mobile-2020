<?php
    include("select.php")
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Retina</title>
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
        <div>
            <section class="s">
                <div class="close">
                    <a href="servicii.php" title="Inapoi la Servicii"><i class="fa fa-close"></i></a>
                </div>
                <h1 class="s-titluri">Retina</h1>
                <ul>
                    <li class="lista"><span><strong><a title="Decolorarea de retina" href="#decolorarea-de-retina">DECOLAREA (DEZLIPIREA) DE RETINĂ</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Gaura maculara" href="#gaura-maculara">GAURA MACULARĂ</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Membrana epiretiniana" href="#membr-epiretiniana">MEMBRANA EPIRETINIANĂ</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Retinopatia si maculopatia diabetica" href="#diabetica">RETINOPATIA DIABETICĂ ȘI MACULOPATIA DIABETICĂ</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Hemoragia vitreana" href="#hemoragia-vitreana">HEMORAGIA VITREANĂ</a></strong></span></li>
                    <li class="lista"><span><strong><a title="Degenerescenta maculară" href="#degenerescența-maculară">DEGENERESCENȚA MACULARĂ LEGATĂ DE VÂRSTĂ</a></strong></span></li>
                </ul>
                <section>
                    <button class="button-pret" id="modalBtn"><strong>PRETURI</strong></button>
                        <div id="simpleModal" class="modal">
                            <section class="modal-content">
                                <span class="closeBtn">&times;</span>
                                <h2>Preturi - Retina</h2>
                                <table class="tabel">
                                    <tr>
                                        <th>Serviciu</th>
                                        <th>Pret</th>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[17]; ?></td>
                                        <td><?php echo $pretS[17]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[18]; ?></td>
                                        <td><?php echo $pretS[18]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[19]; ?></td>
                                        <td><?php echo $pretS[19]; ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo $denumireS[20]; ?></td>
                                        <td><?php echo $pretS[20]; ?></td>
                                    </tr>
                                </table>
                            </section>
                        </div>
                </section>
            </section>
            <section class="s">
                <p><strong><a name="decolorarea-de-retina"></a><span>DECOLAREA (DEZLIPIREA) DE RETINĂ</span></strong></p>
                <p>Decolarea de retină reprezintă separarea celor două foițe ale retinei, stratul intern (neuroepiteliu) și cel extern (epiteliul pigmentar), între care pătrunde un lichid, numit lichid subretinian. Zona de retină decolată nu funcționează și determină o pierdere importantă de vedere.</p>
                <ul>
                    <p><li>SIMPTOME: debutul este în general brusc și nedureros, cu apariția unei “perdele negre” care acoperă inițial o parte a câmpului vizual și se poate extinde treptat până nu mai este posibilă vederea cu ochiul afectat. Poate fi precedată de opacități mobile sau fenomene luminoase intense (“fulgere”).</li></p>
                    <p><li>DIAGNOSTICAREA DECOLĂRII DE RETINĂ: examen de fund de ochi cu pupila dilatată și ecografie oculară.</li></p>
                    <li>TRATAMENT: decolarea de retină reprezintă o urgență chirurgicală oftalmologică. Procedeul chirurgical include vitrectomia (îndepărtarea corpului vitros), identificarea tuturor rupturilor retiniene, blocarea acestora cu laser și introducerea în ochi a unei substanțe (gaz sau ulei siliconic), cu rolul de a menține retina atașată. În cazul introducerii de ulei siliconic, acesta trebuie extras din ochi printr-o intervenție chirurgicală ulterioară, dupa ce se constată o retină atașată).</li>
               </ul>
               <p>Dacă apar flash-uri luminoase sau opacități mobile în câmpul vizual, pacientul trebuie să se prezinte urgent la oftalmolog pentru a se exclude posibilitatea existenței unei rupturi retiniene. Punctul de plecare a unei decolări de retină este de obicei o ruptura retiniană, care diagnosticată precoce poate fi blocată cu laser și astfel evitată necesitatea unei intervenții chirurgicale.</p>
            </section>
            <section class="s">
                <p><strong><a name="gaura-maculara"></a><span>GAURA MACULARĂ</span></strong></p>
                <p>Gaura maculară este o ruptură sau un defect al grosimii retiniene, care implică zona centrală a retinei responsabilă cu acuitatea vizuală maximă (deosebirea culorilor și a detaliilor obiectelor).</p>
                <p><li>SIMPTOME: scăderea vederii centrale, perceperea deformată sau întreruptă a obiectelor (liniile drepte devin ondulate, curbate sau întrerupte).</li></p>
                <p><li>DIAGNOSTICAREA GĂURII MACULARE: examen de fund de ochi cu pupila dilatată și OCT macular/tomografie oculară.</li></p>
                <p><li>TRATAMENT: cel mai des se practică vitrectomia (îndepărtarea corpului vitros) asociată cu introducerea în ochi a unei substanțe (gaz sau ulei siliconic), cu rolul de a menține gaura maculară închisă. În cazul introducerii de ulei siliconic, acesta trebuie extras din ochi printr-o intervenție chirurgicală ulterioară.</li></p>
            </section>
            <section class="s">
                <p><strong><a name="membr-epiretiniana"></a><span>MEMBRANA EPIRETINIANĂ</span></strong></p>
                <p>Membrana epiretiniană reprezintă apariția în zona centrală a vederii, macula, a unei "foițe" care tracționează și deformează retina, afectând astfel arhitectura celulelor maculare.</p>
                <p><li>SIMPTOME: scăderea vederii centrale, perceperea deformată a obiectelor (liniile drepte devin ondulate sau curbate).</li></p>
                <p><li>DIAGNOSTIC: examen de fund de ochi cu pupila dilatată și OCT macular/ tomografie oculară.</li></p>
                <p><li>TRATAMENT: chirurgical, constând în vitrectomie (îndepărtarea corpului vitros) și excizia membranei de pe suprafața retinei.</li></p>
            </section>
            <section class="s">
                <p><strong><a name="diabetica"></a><span>RETINOPATIA DIABETICĂ ȘI MACULOPATIA DIABETICĂ</span></strong></p>
                <p>Diabetul este o boală metabolică ce afectează vasele din întregul organism,  inclusiv la nivelul ochilor, dând naștere retinopatiei diabetice și maculopatiei diabetice. Evoluția este progresivă, în ani de zile, iar fără un tratament adecvat poate duce spre orbire.</p>
                <p><li>SIMPTOME: simptomele sunt nespecifice (ex. scăderea acuității vizuale, deformarea obiectelor) iar in stadii incipiente pot să nu existe simptome. Astfel se recomandă tuturor diabeticilor cel puțin un consult oftalmologic pe an.</li></p>
                <p><li>DIAGNOSTIC: examen de fund de ochi cu pupila dilatată, angiofluorografie, OCT macular/ tomografie oculară, ecografie.</li></p>
                <p><li>TRATAMENT: depinde de localizarea și gravitatea bolii, existând mai multe opțiuni – fotocoagularea laser, injecții intravitreene cu Bevacizumab/Triamcinolon pentru maculopatia diabetică, intervenție chirurgicală pentru boala avansată.</li></p>
            </section>
            <section class="s">
                <p><strong><a name="hemoragia-vitreana"></a><span>HEMORAGIA VITREANĂ</span></strong></p>
                <p>Constă în acumularea de sânge în corpul vitros, sângerarea provenind din lezarea vaselor retiniene normale sau anormale (neovase).
                 Posibile cauze pot fi: retinopatia diabetică proliferativă, rupturi retiniene, degenerescența maculară legată de vârstă forma hemoragică, accidente vasculare (obstrucția venei centrale a retinei sau a unui ram venos), traumatisme, tumori, complicații ale unor intervenții chirurgicale, boli hematologice, etc.</p>
                <p><li>SIMPTOME: scăderea acuității vizuale, perceperea unei “cortine roșii” ce nu permite vederea.</li></p>
                <p><li>DIAGNOSTIC: examen de fund de ochi cu pupila dilatată, ecografie oculară.</li></p>
                <p><li>TRATAMENT: în funcție de durata și densitatea hemoragiei se poate recomanda tratament medicamentos, injecții intravitreene cu Bavacizumab sau intervenție chirurgicală.</li></p>
            </section>
            <section class="s">
                <p><strong><a name="degenerescența-maculară"></a><span>DEGENERESCENȚA MACULARĂ LEGATĂ DE VÂRSTĂ</span></strong></p>
                <p>Degenerescența maculară legată de vârstă (DMLV) afectează de obicei pacienții de vârsta a treia, caracterizându-se prin modificări progresive, degenerative ale zonei retiniene centrale (macula). Se descriu doua forme mai frecvent întâlnite: forma atrofică sau cicatricială (considerată stabilă ca evoluție) și forma exudativă (care poate progresa  determinând o scădere suplimentară de vedere).</p>
                <p><li>SIMPTOME: dificultate la citit (literele apar strâmbe sau întrerupte) până la pierderea totală a capacității de a citi sau de a distinge detalii; adesea pacienții descriu o zonă de ceață sau neclaritate în câmpul vizual central, cu vedere bună la nivel periferic.</li></p>
                <p><li>DIAGNOSTIC: examen de fund de ochi cu pupila dilatată, angiofluorografie, OCT macular/ tomografie oculară</li></p>
                <p><li>TRATAMENT: Forma atrofică nu are un tratament eficace; se recomandă suplimente vitaminice specifice. Forma exudativă poate beneficia de un tratament prin injectarea intraoculară (intravitrean) a unor substanțe care să încetinească progresia bolii (ex. Avastin, Triamcinolon, Lucentis, Macugen).</li></p>
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
