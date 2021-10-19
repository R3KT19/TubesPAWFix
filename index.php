<!DOCTYPE html>
<html lang="en" style="height: 100%;width: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>PW Service</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="script/bs-init.js"></script>
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    
    
    <link rel="stylesheet" href="./style/navbarStyle.css">
    <link rel="stylesheet" href="./style/carouselStyle.css">
    <link rel="stylesheet" href="./fonts/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link 
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous"
    />


    
</head>

<body style="width: 100%;
    height: 100%;">
    <div style="width: 100%;">
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" 
            style="height: 80px;
            color: #ffffff;
            background: #4682B4;">
            <div class="container-fluid">
                <a class="navbar-brand" 
                    data-bss-hover-animate="rubberBand" 
                    href="./index.php" 
                    style="color : #ffffff;
                    padding-top: 8px;
                    padding-right: 18px;
                    padding-bottom: 8px;
                    padding-left: 18px;
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
        height: 70%;">
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

                        <h1 class="title">Bersih seperti rumah baru</h1>
                        <p class="subtitle">Auto Kinclong</p>
                    </div>
                </div>

                <div class="carousel-item" 
                    style="width: 100%;
                    height: 100%;">

                    <div class="bg-light border rounded border-light pulse animated page-3 carousel-hero picture py-5 px-4" 
                        style="width: 100%;
                        height: 100%;">

                        <h1 class="title">Tinggal Order</h1>
                        <p class="subtitle">Tunggu Apalagi</p>
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

    <br/>

    <section class="service">
        <div class="pembuka">
            <div class="pembuka-text">
                <h1>Auto Kinclong !</h1>
                <p>Mobil anda kotor ? Rumah dan Taman Berantakan ? AC Sudah Berdebu?
                <br/>Sans... PW Service solusinya.Dengan jasa yang kami sediakan anda tidak usah cape cape membersihkan rumah dan bisa lanjut rebahan.Tunggu Apalagi ? Segera Order !</p>
                <h5>Untuk pemesanan silahkan register dan login terlebih dahulu !</h5>
            </div> 
            <div class="pembuka-pic"> 
                <img src="https://covid19.go.id/storage/app/media/icons/icon-11.svg">
            </div>
        </div>

        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        
        <h1>Jasa Service yang Kami Tawarkan</h1>
        <div class="row">
        <div class="service-col">
                <h3>Home Clean </h3>
                <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/village-3-199380.png" width = "250" height = "200">
                <p><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Fusce tempus orci purus, sit amet rhoncus quam tincidunt eget. Etiam euismod efficitur ultrices. 
                Pellentesque non egestas sapien. Etiam rutrum, magna eget tempor aliquet, sapien est elementum erat, 
                venenatis porta diam turpis sed nisi. Maecenas pulvinar iaculis orci eget auctor.</p>
            </div>
            <div class="service-col">
                <h3>Cuci Mobil </h3>
                <img src="https://cdn.iconscout.com/icon/free/png-256/car-vehicle-travel-transport-side-view-29587.png" width = "250" height = "200">
                <p><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Fusce tempus orci purus, sit amet rhoncus quam tincidunt eget. Etiam euismod efficitur ultrices. 
                Pellentesque non egestas sapien. Etiam rutrum, magna eget tempor aliquet, sapien est elementum erat, 
                venenatis porta diam turpis sed nisi. Maecenas pulvinar iaculis orci eget auctor.</p>
            </div>
            <div class="service-col">
                <h3>Cuci AC</h3>
                <img src="https://www.austinalpine.com/wp-content/uploads/2020/07/air-conditioner.png" width = "250" height = "200">
                <p><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Fusce tempus orci purus, sit amet rhoncus quam tincidunt eget. Etiam euismod efficitur ultrices. 
                Pellentesque non egestas sapien. Etiam rutrum, magna eget tempor aliquet, sapien est elementum erat, 
                venenatis porta diam turpis sed nisi. Maecenas pulvinar iaculis orci eget auctor.</p>
            </div>
            <div class="service-col">
                <h3>Garden Clean</h3>
                <img src="https://cdn.iconscout.com/icon/premium/png-256-thumb/garden-1757583-1495277.png" width = "250" height = "200">
                <p><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Fusce tempus orci purus, sit amet rhoncus quam tincidunt eget. Etiam euismod efficitur ultrices. 
                Pellentesque non egestas sapien. Etiam rutrum, magna eget tempor aliquet, sapien est elementum erat, 
                venenatis porta diam turpis sed nisi. Maecenas pulvinar iaculis orci eget auctor.</p>
            </div>
        </div>  
        
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>

        <div class="alamat">
            <div class="alamat-text">
                <h1>Kontak Kami</h1>
                <p>Alamat: Jl. Babarsari No.43, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281</p>
                <p>Telepon: (0274) 487711</p>
                <p>Provinsi: Daerah Istimewa Yogyakarta</p>
            </div> 
            <div class="alamat-pic"> 
                <img src="http://www.uajy.ac.id/wp-content/uploads/2008/11/Gedung-Bonaventura.jpg">
            </div>
        </div> 
    </section> 
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>

    <section class = "footer">
        <h4>About Us</h4>
        <p>Godwin | Batara | Yolif </p>
        <div class = "icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
    <p>Made by Kelompok 10 PW</p>

    </section>

</body>

</html>