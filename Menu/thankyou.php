<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Book A Trip">
    <meta name="description" content="La réponse d'un formulaire">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Book A Trip Answer</title>
</head>
<body>
    <header>
        
        <!--Barre de navigation -->
        <nav class="navbar">
              <div class="navbar-container containerBookatrip">
                <input type="checkbox" name="" id="">
               <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div> 
                
                <ul class="menu-items">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="bookatrip.html">Book A Trip</a></li>
                    <li><a href="admin.html">Admin Login</a></li>
                </ul>
               
                <div class="logo">
                    <img src="../images/paddle-white.png" height="55" alt="paddle white">
                </div>
                      <!-- Centered title -->
               <div class="Centeredtitle">
                <h3>Halifax Canoe and Kayak</h3>
              </div>
            </div>
   
        </nav>
    </header>
    <main>
    <div class="main" style="width: 1000px;margin-left:auto; margin-right:auto;">
            
            <!-- Titre dans l'image -->
            <section class="showcase-area" id="showcase">
               <div class="showcase-container">
                 <h3 class="main-title" id="home">Come Expirence <br> Canada</h3>
               </div>
           </section>
            <!-- Answer  -->
              <h1> Thank You </h1>
                <hr>
              Thank you : 
              <?php echo $_GET["email"];?>
              <br><br>
             We will contact you about the : 
              <br>
              <?=$_GET["location"];?>  trip on the <?=$_GET["datetrip"];?>
      </div>
  </main>
</body>
</html>