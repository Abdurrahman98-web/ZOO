<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/CSS/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
    <title>Habitats</title>
</head>

<body>
    <main>
  <section class="habitats">

       <div class="container ">
        <div class="xxx"></div>
        <h2 class="text-center  ">HABITATS D'ARCADIA ZOO</h2>
        <div class="row mt-4">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="image-hover">
                    <a href="jungle.php">
                    <img src="./assets/Images/tigre.jpeg" alt="Tiger" class="img-fluid">
                    <div class="hover-text">
                    <h2 class="text-success mt-5">Jungle</h2>
                      <p class="mt-5">Une forêt dense et humide, riche en biodiversité.
                      </p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
           
               <div class="image-hover">
                 <a href="Marais.php"> 
                    <img src="./assets/Images/flamingo.jpeg" alt="Heron" class="img-fluid">
                    <div class="hover-text">
                    <h2 class="text-success mt-5">Marais</h2>
                    <p class="mt-5" >Une zone humide où l'eau stagnante abrite de nombreuses espèces.</p>
                    </div>
                    </a>
                </div>
          
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="image-hover">
                    <a href="savane.php">
                    <img src="./assets/Images/zebra.jpg" alt="zebra" class="img-fluid" onclick="savane.php" >
                    <div class="hover-text">
                    <h2 class="text-success mt-5" >Savane</h2>
                    <p class="mt-5" >Une plaine herbeuse chaude avec quelques arbres éparpillés.</p>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                <div class="image-hover">
                    <a href="ocean.php">
                    <img src="./assets/Images/Serdin.jpeg" alt="Shark" class="img-fluid">
                    <div class="hover-text">
                      <h2 class="text-success mt-5" >Océan</h2>
                      <p class="mt-5" >Une vaste étendue d'eau salée, peuplée d'une grande variété de vie marine. </p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
      </div> 
    </section>
    <?php include_once 'header-footer.php' ?>
 </body>
 
 </main>
</html>