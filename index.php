<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cacao Smart Trade</title>
    <link rel="stylesheet" href="admin/style.css">
    <link rel="stylesheet" href="libs/bootstrap/bootstrap.min.css">
      <!-- ICONO -->
    <link rel="shortcut icon" type="image/png" href="public/logosolo.png" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="libs/fontawesome-free/css/all.min.css">
    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet"> 
</head>
<body>  
    <?php
        require_once 'views/header.php';
    ?>
    
    <main id="main">
        <!-- VIDEO -->
        <section class="container-gif">
        </section>

        <section class="bg-1 pb-5">

            <div class="container d-flex justify-content-center ">
                <div class="text-center w-50">
                    <img src="public/logonombre.png" alt="" class="w-50">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum sint tempora nulla adipisci ipsum dolores officiis quibusdam! Soluta necessitatibus id adipisci laborum a aut iusto praesentium libero cumque mollitia.</h3>
                </div>
            </div>

            <!-- CARDS MISION Y VISION -->
            <div class="container ">

                <div class="row justify-content-md-center">
                    <!-- MISION -->
                    <div class="col-xl-3  col-lg-6 col-md-6 col-sm-6  ">

                        <div class="card  " >
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-header p-3 pt-4">
                                <h1 class="card-title text-center font-weight-bold">MISIÓN</h1>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                    </div>
                    
                    <!-- VISION -->
                    <div class="col-xl-3  col-lg-6 col-md-6 col-sm-6  ">

                        <div class="card  " >
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-header p-3 pt-4">
                                <h1 class="card-title text-center font-weight-bold">VISIÓN</h1>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


        </section>


       
       

        <section class="bg-2 pb-4">

            <div class="container pt-4 pb-4">
                <h1 class="text-center text-light font-weight-bold">Nuestros Productos</h1>
            </div>

            <div class="container">
                <div class="row justify-content-md-center text-white">


                        <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3  text-center " >
                            <div class="p-5">
                                <i class="fas fa-mug-hot fa-5x "></i>
                            </div>
                            <h6 class="font-weight-bold">Licor de cacao</h6>
                        </div>

                        <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3  text-center" >
                            <div class="p-5">
                                <i class="fas fa-cookie fa-5x"></i>
                            </div>
                            <h6 class="font-weight-bold">Tableta de cacao</h6>
                        </div>

                        <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-3 text-center" >
                            <div class="p-5">
                                <i class="fas fa-mug-hot fa-5x"></i>
                            </div>
                            <h6 class="font-weight-bold">Polvo de cacao</h6>
                        </div>


                </div>
            </div>


        </section> 




    </main>




    <div class="loader"></div>


    <script src="libs/jquery/jquery.3.2.1.min.js"></script>
    <script src="libs/bootstrap/bootstrap.min.js"></script>

    <script>

        $(document).ready(function(){

            setTimeout(()=>{
                $(".loader").fadeOut("slow");

            },1500);


        });

    </script>

</body>
</html>