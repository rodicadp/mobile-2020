<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Acasa</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="index.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://maxcdn.bootstracdn.com/font-awesome/4.7.0/css/font-awsome.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      </head>
   <body>
           <header>
               <nav class="nav" id="myTopnav">
                   <img class="logo" src="img/logo-4.jpg" alt="logo">
                   <img class="logo2" src="img/logo-5.jpg" alt="logo">
                   <section class="link-uri">
                      <a href="index.php"  class="active">Acasa</a>
                      <a href="despre.php">Despre noi</a>
  		             <a href="servicii.php">Servicii</a>
                      <a href="contact.php">Contact</a>
                      <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                  </section>
  		 </nav>
         <nav class="nav2" id="myTopnav2">
             <img class="logo" src="img/logo-4.jpg" alt="logo">
             <img class="logo2" src="img/logo-5.jpg" alt="logo">
                <a class="act" id="prim" href="index.php">Acasa</a>
                <a  href="despre.php">Despre noi</a>
                <a  href="servicii.php">Servicii</a>
                <a  href="contact.php">Contact</a>
                <a  href="programare.php">Programare</a>
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
    <div class="w3-content w3-display-container" style="width:100%">
      <img class="mySlides" src="img/img5.jpg" alt="imagine">
      <img class="mySlides" src="img/omg4.jpg" alt="imagine">
      <img class="mySlides" src="img/img22.jpg" alt="imagine">
      <img class="mySlides" src="img/img9.jpg" alt="imagine">
      <img class="mySlides" src="img/img3.jpg" alt="imagine">
      <img class="mySlides" src="img/img7.jpg" alt="imagine">

      <div class="programare">
    <form action="insert.php" method="post">
     <input name="index" style="display:none;" value="1">
    <label  class="text-form">Nume</label>
    <input type="text" id="fname" name="numep" placeholder="Numele tău..">
    <label  class="text-form">Prenume</label>
    <input type="text" id="lname" name="prenumep" placeholder="Prenumele tău..">
    <label  class="text-form">Email</label>
    <input type="text" id="email" name="emailp" placeholder="Email-ul tău..">
    <label  class="text-form">Telefon</label>
    <input type="text" id="telefon" name="telefonp" placeholder="Numărul tău..">
    <label class="text-form">Data programarii</label>
    <input  class="textdata" type="date" name="dataprogramare">
    <input type="submit" class="button" value="Programeaza-ma">
  </form>
</div>
</div>
    <section class="subslide">
        <aside>
                  <h2>ORAR CLINICA</h2>
                  <table class="orar">
                  <tbody>
                  <tr>
                      <td class="left"><strong>Luni &#8211; Vineri</strong></td>
                      <td class="right"><strong>8:00 &#8211; 20:00</strong></td>
                  </tr>
                  <tr>
                      <td class="left"><strong>Sâmbată</strong></td>
                      <td class="right"><strong>8:00 &#8211; 14:00</strong></td>
                  </tr>
                  <tr>
                      <td class="left"><strong>Duminică</strong></td>
                      <td class="right"><strong>închis</strong></td>
                  </tr>
                  </tbody>
                  </table>
                </aside>

                <article>
        <h1 >Din grija pentru tine..</h1>
        <p>
            Pasiunea pentru oftalmologie si grija pentru pacientii nostri sunt motorul echipei Ophtalens R'.
         Programeaza-te acum pentru o consultatie si convinge-te de profesionalismul echipei noastre.
        </p>
        <p>
            In Clinica Ophtalens R' regasim zi de zi pasiunea, ambitia si dorinta de a excela!
Avem o echipa de medici dedicati meseriei lor, oameni frumosi selectati dupa criterii riguroase! Ne mandrim cu faptul ca medicii nostri oftalmologi nu se multumesc cu a fi la curent cu ultimele tendinte, ci si contribuie activ la atingerea noilor standarde in oftalmologie.
Am devenit un lider de necontestat in tratatarea afectiunilor retiniene si asta pentru ca ne implicam cu profesionalism, daruire si pasiune in fiecare caz, cautand mereu sa fim astazi mai buni decat am fost ieri!
        </p>
        <p>
            Pasiunea sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.grija pentru pacientii nostri sunt motorul echipei.....
         Programeaza-te acum pentru o consultatie si convinge-te de profesionalismul echipei noastre.
        </p>
                </article>
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
    <script>
        var sIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
            }
            sIndex++;
            if (sIndex > x.length) {sIndex = 1}
            x[sIndex-1].style.display = "block";
            setTimeout(carousel, 3000);
            }
    </script>
</body>
</html>
