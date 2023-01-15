<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <link rel="stylesheet" href="./styles/index.css">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>Sunu Vote</title>
</head>

<body>
        <?php
        require_once("./authentification/navbar.php")
        ?>

       <div class="container-fluid">
            <div class="row" style="text-align: center;margin: 40px 50px;">
                    <h3>Bienvenue sur l'application <b>SUNU Vote </b> </h3>
            </div>
            <div class="row">
                <div class="col-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati inventore nisi pariatur
                        corrupti recusandae ut ex fuga sequi delectus<br> modi vel dignissimos dolor magni incidunt tempore<br>
                        corporis veniam ea deleniti excepturi aut, quidem aliquam quo! Ipsum nam aliquam maiores officia
                        consequuntur,<br> nobis quos dolorum assumenda porro iure dignissimos excepturi vitae!
                        Lorem ipsum dolor sit,<br> amet consectetur adipisicing elit. Quasi eos culpa veniam!
                        Lorem ipsum dolor sit, amet consectetur<br> adipisicing elit. Ea delectus non sit porro, inventore<br>
                        molestiae fugit velit architecto dolorum maiores et, reiciendis eius magnam!
                    </p>
                </div>
            </div>
           
            <div class="row">
                <div style="margin-top:30px;" class="col-12">
                    <img class="imvote" src="./images/vote.jpg" alt="">
                </div>
            </div>
            <div class="row">
                    <h4>La liste des différents candidat</h4>
            </div>
                <div  id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div style="width:700px; margin-top:40px; margin-left:300px;"  class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./images/femme1.jpg" class="d-block w-100 imcand" alt="imvote">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Aissata TALL</h5>
                                <p>Candidature pour le poste présidentiel chef du partie PDS</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/femme2.jpg" class="d-block w-100 imcand" alt="imvote">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Anta SONKO</h5>
                                <p>Candiature pour le poste présidentiel chef du partie Démocrate</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="./images/femme2.jpg" class="d-block w-100" alt="imvote">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Astou FALL</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            

        </div>

    
    <footer>
        <span>Sunu vote &copy; 2023</span>
    </footer>

</body>

</html>