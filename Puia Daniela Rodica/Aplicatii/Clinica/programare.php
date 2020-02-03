<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <title>Programare</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="pages.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://maxcdn.bootstracdn.com/font-awesome/4.7.0/css/font-awsome.min.css" rel="stylesheet">
      </head>
   <body>
           <header>
               <nav class="nav2" id="myTopnav2">
                   <img class="logo" src="img/logo-4.jpg" alt="logo">
                   <img class="logo2" src="img/logo-5.jpg" alt="logo">
                      <a class="ar" href="index.php">Acasa</a>
                      <a  class="ar" href="despre.php" class="act">Despre noi</a>
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

          <div class="programare">
      <form action="insert.php" method="post">
        <label for="fname" class="text-form">Nume</label>
        <input type="text" id="fname" name="numep" placeholder="Numele tău..">

        <label for="lname" class="text-form">Prenume</label>
        <input type="text" id="lname" name="prenumep" placeholder="Prenumele tău..">
        <label for="email" class="text-form">Email</label>
        <input type="text" id="email" name="emailp" placeholder="Email-ul tău..">
        <label for="medic" class="text-form">Telefon</label>
        <input type="text" id="telefon" name="telefonp" placeholder="Numărul tău..">
        <label for="data" class="text-form">Data programarii</label>
        <input type="date" name="data" class="textdata">
        <input type="submit" class="button-progr" value="Programeaza-ma">
      </form>
    </div>

    </body>
    </html>
