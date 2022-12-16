
<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
   $welcomeMessage = " <p style='padding: 10px 10px 0px 5px'>Welcome to Compassion, " . $_SESSION['currUser']['usersName']  . "! </p>" ;

} else {
    header('Location: login.php');
}
 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <style>

@font-face {
    font-family: 'Jost-Hairline';
    src: url('./Fonts/Jost/Jost-100-Hairline.ttf');

}
    
@font-face {
        font-family: 'Jost-Semi';
        src: url('./Fonts/Jost/Jost-600-Semi.otf');
}

@font-face {
        font-family: 'Jost-Black' ;
        src: url('./Fonts/Jost/Jost-900-Black.otf');
}

    .Header{
        font-family:'Jost-Semi';
    }

    .text{
        font-family:'Jost-Black';
    }




        </style>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Compassion</title>
        <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./css/aboutus.css">
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="./css/index.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light Header">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Compassion</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#About">About Us</a></li>

                    </ul>
                    <form class="d-flex">
                        <?php echo  $welcomeMessage; ?>
                        <a class="btn btn-outline-dark" href="../includes/logout.inc.php"> Logout</a> 
                        
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder Header">Compassion</h1>
                    <p class="lead fw-normal text-white-50 mb-0 text" >Give and you will receive</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- foundation image-->
                            <img class="card-img-top" src="./IMG/foundation_1.jpg" alt="..." />
                           
                            <div class="card-body p-4">
                                <div class="text-center">
                                    
                                    <h5 class="fw-bolder">The African Child Foundation</h5>
                                    
                                    The African Child Foundation is a non-profit organization whose mission is to support Fr. Henry Simaro in his efforts to transform the lives of orphaned and vulnerable children in the slums outside Nairobi, Kenya.
                                </div>
                            </div>
                           
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="payment.php">Donate</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            
                            <img class="card-img-top" src="./IMG/foundation_2.jpg" alt="..." />
                            
                            <div class="card-body p-4">
                                <div class="text-center">
                                   
                                    <h5 class="fw-bolder">Quebec Breast Cancer Foundation</h5>
                                 
                                    Breast Cancer Action Quebec is a feminist health organization that has been dedicated to breast cancer prevention for over 30 years, with a particular focus on the environmental factors linked to the disease. BCAQ works on the problem of toxic substances present in everyday products and is concerned with environmental issues that have an impact on health.
                                </div>
                            </div>
                            
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="payment.php">Donate</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            
                            
                           
                            <img class="card-img-top" src="./IMG/foundation_3.jpg" alt="..." />
                           
                            <div class="card-body p-4">
                                <div class="text-center">
                                    
                                    <h5 class="fw-bolder">Break Poverty Foundation</h5>
                                    
                                    <span class="text-muted text-decoration-line-through"></span>
                                    The mission of this humanitarian organisation, Break Poverty Foundation, is to identify and support innovative solutions against poverty. Its unifying ambition also makes it possible to gather around current issues such as global inequalities or child poverty.
                                </div>
                            </div>
                           
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="payment.php">Donate</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                         
                            <img class="card-img-top" src="./IMG/foundation_4.jpg" alt="..." />
                           
                            <div class="card-body p-4">
                                <div class="text-center">
                                   
                                    <h5 class="fw-bolder">Philippine Cancer Society</h5>
                                    
                                    
                                    The Philippine Cancer Society, Inc. (PCSI) is a private, non-stock, non-profit corporation registered with the Securities and Exchange Commission on 22 December 1956. It was founded by a group of laymen and medical doctors with the aim of “helping the Filipino cope with cancer by preventing it and diminishing death caused by it, especially among the disadvantaged, through information, education, advocacy and focused services.”
                                </div>
                            </div>
                            
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="payment.php">Donate</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            
                            <img class="card-img-top" src="./IMG/foundation_5.jpeg" alt="..." />
                            
                            <div class="card-body p-4">
                                <div class="text-center">
                                    
                                    <h5 class="fw-bolder">Citi Foundation</h5>
                                    
                                    Citi Philippines' citizenship efforts focus on issues where it can naturally contribute its resources and expertise as a financial services company. Through Financial Inclusion, it seeks to enable financial success and unlock opportunities for low-income communities and individuals; with Youth Economic Opportunities, it aspires to help young people effectively compete for economic prospects and succeed in the 21st century economy. 
                                </div>
                            </div>
                            
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="payment.php">Donate</a></div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col mb-5">
                        <div class="card h-100">
                            
                            <img class="card-img-top" src="./IMG/foundation_6.png" alt="..." />
                            
                            <div class="card-body p-4">
                                <div class="text-center">
                                    
                                    <h5 class="fw-bolder">Philippine Animal Rescue Team</h5>
                                    Life is about choices. But animals have no voice so they don’t have the luxury of making choices. They don't have any say in what happens to them. They don’t get to vote so they don't count. 

Animals depend on us for a lot of things, and one of those things is to protect them. They trust us to make the right choices for them. To be their voice. To speak up and advocate for their safety and well-being.

                                </div>
                            </div>
                            
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="payment.php">Donate</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="About" class="bg-dark py-5">
                        <div class="container px-4 px-lg-5 my-5">
                            <div class="text-center text-white">
                                <h1 class="display-4 fw-bolder Header">About Us </h1>
                                <p class="lead fw-normal text-white-50 mb-0 text">Meet the Minds Behind Compasssion</p>
                                <br>

                              <div class="parent">
                                <div class="card">
                                    <img class = "aboutpic"src="./IMG/ryan.jpg" alt="John" style="width:100%">
                                    <h1 class="Name">Dynielle Ryan <br> Goc-ong</h1>
                                    <p class="title">CEO & Founder</p>
                                    <p>Harvard University</p>
                                <div style="margin: 24px 0;">
                                    <a target="_blank"href="https://dribbble.com/"><i style="color:black;"class="fa fa-dribbble"></i></a> 
                                    <a target="_blank"href="https://twitter.com/home"><i style="color:black;"class="fa fa-twitter"></i></a>  
                                    <a target="_blank"href="https://www.linkedin.com/"><i style="color:black;"class="fa fa-linkedin"></i></a>  
                                    <a target="_blank"href="https://www.facebook.com/dynielleryan.gocong.9"><i style="color:black;"class="fa fa-facebook"></i></a> 
                                </div>
                                </div>

                                <div class="card">
                                    <img class = "aboutpic"src="./IMG/curtney.jpg" alt="John" style="width:100%">
                                    <h1 class="Name">Curtney Sealtiel Mata Juma-ang</h1>
                                    <p class="title">CEO & Founder</p>
                                    <p>Harvard University</p>
                                <div style="margin: 24px 0;">
                                    <a target="_blank" href="https://dribbble.com/"><i style="color:black;"class="fa fa-dribbble"></i></a> 
                                    <a target="_blank" href="https://twitter.com/home"><i style="color:black;"class="fa fa-twitter"></i></a>  
                                    <a target="_blank" href="https://www.linkedin.com/"><i style="color:black;"class="fa fa-linkedin"></i></a>  
                                    <a target="_blank" href="https://www.facebook.com/Maximum.Intelligence1000000000/"><i style="color:black;"class="fa fa-facebook"></i></a> 
                                </div>
                                </div>
                              </div>

                            </div>
                         </div>


    </section>

        <!-- Footer-->
        <footer class="py-5 bg-light">
            <div class="container"><p class="m-0 text-center text-dark">Compassion 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
