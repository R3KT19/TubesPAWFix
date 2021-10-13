<!DOCTYPE html>
<html lang="en" style="height: 100%;width: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TUBES_PAW</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="script/bs-init.js"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    
    <link rel="stylesheet" href="./style/navbarStyle.css">
    <link rel="stylesheet" href="./style/carouselStyle.css">
    <link rel="stylesheet" href="./fonts/font-awesome.min.css">


    
</head>

<body style="width: 100%;
    height: 100%;">
    <div style="width: 100%;">
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" 
            style="height: 80px;
            color: #ffffff;
            background: #38244b;">
            <div class="container-fluid">
                <a class="navbar-brand" 
                    data-bss-hover-animate="rubberBand" 
                    href="./index.php" 
                    style="box-shadow: 0px 0px 20px #482e60;
                    padding-top: 8px;
                    padding-right: 18px;
                    padding-bottom: 8px;
                    padding-left: 18px;
                    text-shadow: 1px 1px 20px #ff0000;
                    transform-style: preserve-3d;
                    filter: hue-rotate(0deg);">
                
                    <i class="fa fa-globe"></i>&nbsp;PW SERVICE
                </a>

                <button data-bs-toggle="collapse" 
                    class="navbar-toggler" 
                    data-bs-target="#navcol-1">
                    <span class="visually-hidden">Toggle navigation</span>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" 
                    id="navcol-1">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" 
                                data-bss-hover-animate="pulse" 
                                style="color: #ffffff;
                                text-shadow: 1px 1px 20px #ffa500;
                                filter: hue-rotate(300deg) saturate(200%);
                                transform-style: preserve-3d;"
                                href="./page/registerPage.php">
                            
                                <i class="fa fa-user-circle-o"></i>&nbsp;REGISTER
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" 
                                data-bss-hover-animate="pulse" 
                                style="color: #ffffff;
                                text-shadow: 1px 1px 20px #ff0000;
                                filter: hue-rotate(250deg) saturate(200%);
                                transform-style: preserve-3d;"
                                href="./page/loginPage.php">
                                
                                <i class="fa fa-sign-in"></i>&nbsp;LOGIN
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <section id="carousel" 
        style="margin-top: 0px;
        width: 100%;
        height: 92%;">
        <div class="carousel slide" 
            data-bs-ride="carousel" 
            id="page" 
            style="width: 100%;
            height: 100%;">

            <div class="carousel-inner" 
                style="width: 100%;
                height: 100%;">

                <div class="carousel-item active" 
                    style="height: 100%;
                    width: 100%;">

                    <div class="bg-light border rounded border-light pulse animated page-1 carousel-hero picture py-5 px-4" 
                        style="height: 100%;
                        width: 100%;">

                        <h1 class="title">Cleaning Service</h1>
                        <p class="subtitle">Membuat Rumah Anda Bersih</p>
                    </div>
                </div>

                <div class="carousel-item" 
                    style="height: 100%;">

                    <div class="bg-light border rounded border-light pulse animated page-2 carousel-hero picture py-5 px-4" 
                        style="width: 100%;
                            height: 100%;">

                        <h1 class="title">KATA KATA PAGE 2</h1>
                        <p class="subtitle">HAAAA</p>
                    </div>
                </div>

                <div class="carousel-item" 
                    style="width: 100%;
                    height: 100%;">

                    <div class="bg-light border rounded border-light pulse animated page-3 carousel-hero picture py-5 px-4" 
                        style="width: 100%;
                        height: 100%;">

                        <h1 class="title">Cleaning Service</h1>
                        <p class="subtitle">AHAHAHAHAHAHAHAH</p>
                    </div>
                </div>
            </div>

            <div>
                <a class="carousel-control-prev" 
                    href="#page" 
                    role="button" 
                    data-bs-slide="prev">
                    
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </a>

                <a class="carousel-control-next" 
                    href="#page" 
                    role="button" 
                    data-bs-slide="next">
                    
                    <span class="carousel-control-next-icon"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>

            <ol class="carousel-indicators">
                <li data-bs-target="#page1" 
                    data-bs-slide-to="0">
                </li>
                <li data-bs-target="#page2" 
                    data-bs-slide-to="1">
                </li>
                <li data-bs-target="#page3" 
                    data-bs-slide-to="2" 
                    class="active">
                </li>
            </ol>
        </div>
    </section>
</body>

</html>