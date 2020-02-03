<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Contact</title>
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
 		             <a href="servicii.php">Servicii</a>
                     <a href="contact.php" class="active">Contact</a>
                     <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                 </section>
 		 </nav>
         <nav class="nav2" id="myTopnav2">
             <img class="logo" src="img/logo-4.jpg" alt="logo">
             <img class="logo2" src="img/logo-5.jpg" alt="logo">
                <a class="priml" href="index.php">Acasa</a>
                <a  href="despre.php">Despre noi</a>
                <a  href="servicii.php">Servicii</a>
                <a  class="act" href="contact.php">Contact</a>
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
    <div id="contact">
        <section>
                          <aside class="contact">
                              <h2 class="contact-h2">Formular online</h2>
                      <form action="insert.php" method="post">
                          <input name="conform" style="display:none;" value="1">
                        <label for="fname" class="text-form">Nume</label>
                        <input type="text" id="fname" name="numele" placeholder="Numele tău..">
                        <label for="lname" class="text-form" >Prenume</label>
                        <input type="text" id="lname" name="prenumele" placeholder="Prenumele tău..">
                        <label for="email" class="text-form">Email</label>
                        <input type="text" id="email" name="emailul" placeholder="Email-ul tău..">
                        <label for="subject" class="text-form">Mesaj</label>
                            <textarea id="subject" name="mesajul" placeholder="Scrie ceva.." style="height:94px"></textarea>
                        <input type="submit" class="button-form" value="Trimite">
                      </form>
                        </aside>
</section>
            <section class="date_contact">
                <h2 class="contact-h2">Date de contact</h2>
                <article class="contact-telefon">
                        <h3>Telefon:</h3>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>0212219477</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>0741258963</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>0773816478</p>
                </article>
                <article class="contact-adresa">
                        <h3>Adresa:</h3>
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> Str. Lucian Blaga, nr.17, localitatea Sebes, judetul Alba.</p>
                </article>
                <article class="contact-email">
                        <h3>Email:</h3>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>ophtalensr@yahoo.com</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>opticophtalnes@gmail.ro</p>
                </article>
                <article class="contact-retele">
                        <h3>Mai multe:</h3>
                        <p><i class="fa fa-facebook-official" aria-hidden="true"></i>OphtalnesR</p>
                        <p><i class="fa fa-instagram" aria-hidden="true"></i>team.Ophtalens</p>
                </article>
            </section>
        <section id="harta">
            <h2 class="contact-h2">Localizare:</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.7141006157285!2d23.566356315537362!3d45.95699497910988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c1ef8aecf815f%3A0xc55e43648561832!2sOpticline+-+Sebe%C8%99!5e0!3m2!1sro!2sro!4v1555872809625!5m2!1sro!2sro" width="1137" height="340" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>

    <section id="harta-mobile">
        <h2 class="contact-h2">Localizare:</h2>
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2773.7141006157285!2d23.566356315537362!3d45.95699497910988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474c1ef8aecf815f%3A0xc55e43648561832!2sOpticline+-+Sebe%C8%99!5e0!3m2!1sro!2sro!4v1555872809625!5m2!1sro!2sro"  frameborder="0" style="border:0" allowfullscreen></iframe>
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
</body>
</html>
