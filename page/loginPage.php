<!DOCTYPE html>
<html lang="en" style="height: 100%;width: 100%;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TUBES_PAW DESIGN</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <script src="../script/bs-init.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <link rel="stylesheet" href="../style/navbarStyle.css">
    <link rel="stylesheet" href="../style/loginRegisterStyle.css">
    <link rel="stylesheet" href="../fonts/font-awesome.min.css">

</head>

<body style="width: 100%;height: 100%;min-height: 0px;">
    <div style="width: 100%;">
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" 
            style="height: 80px;
            color: #ffffff;
            background: #4682B4;">

            <div class="container-fluid">
                <a class="navbar-brand"
                    data-bss-hover-animate="rubberBand" 
                    href="../index.php" 
                    style="color : #ffffff;
                    padding-top: 8px;
                    padding-right: 18px;
                    padding-bottom: 8px;
                    padding-left: 18px;
                    transform-style: preserve-3d;
                    filter: hue-rotate(0deg);">
                 
                 <i class="fa fa-globe"></i>&nbsp;PW SERVICE</a>
                 
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
                                href="./registerPage.php">
                            
                                <i class="fa fa-user-circle-o"></i>&nbsp;REGISTER
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" 
                                data-bss-hover-animate="pulse" 
                                style="color: #ffffff;
                                filter: hue-rotate(250deg) saturate(200%);
                                transform-style: preserve-3d;" 
                                href="./loginPage.php">
                            
                                <i class="fa fa-sign-in"></i>&nbsp;LOGIN
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="float-none d-md-flex flex-fill justify-content-center align-items-md-start login-card" 
    style="height: 100%;
        margin: 0px;
        width: 100%;
        max-width: none;
        border-radius: 0px;">
        <form action="../process/loginProcess.php" 
            method="post" 
            class="form-signin" 
            style="width: 400px;
            height: fit-content;
            border-radius: 50px;
            margin: 0px;
            padding-top: 25px;
            padding-bottom: 25px;
            padding-right: 50px;
            padding-left: 50px;
            position: fixed;
            box-shadow: 1px 1px 20px 5px rgb(120,120,120);
            border-color: rgba(0,0,0,0);
            border-top-style: solid;
            border-right-style: solid;
            border-bottom-style: solid;
            border-bottom-color: rgb(255,255,255);
            border-left-style: solid;">
        
        <img class="d-flex d-md-flex mx-auto justify-content-md-center align-items-md-start" 
            src="../image/login.png" 
            style="width: 100px;
            height: 100px;
            margin: 0px;
            margin-right: 0px;
            margin-left: 0px;
            margin-top: 0px;
            margin-bottom: 20px;">

            <p style="width: 100%;
                height: 25px;
                margin-bottom: 5px;
                padding-left: 5px;
                font-size: 18px;">Email
            </p>
            
            <input class="border rounded-pill shadow-lg form-control" 
                type="text" 
                id="inputEmail" 
                required="" 
                placeholder="Email"
                autofocus="" 
                name="email">

            <p style="width: 100%;
                height: 25px;
                margin-bottom: 5px;
                margin-top: 26px;
                padding-left: 5px;
                font-size: 18px;">Password
            </p>
            
            <input class="border rounded-pill shadow-lg form-control" 
                type="password" 
                id="inputPassword" 
                placeholder="Password" 
                name="password" 
                required="">

            <button class="btn btn-primary text-center border rounded-pill shadow mx-auto btn-signin w-100" 
                name="login" 
                type="submit" 
                style="width: 150px;
                min-width: 0px;
                max-width: 150px;
                margin-top: 25px;
                margin-bottom: 0px;
                margin-right: 0px;
                margin-left: 0px;
                height: 40px;">LOGIN
            </button>
            
            <p style="width: 100%;
                margin-top: 25px;">Belum punya akun ?&nbsp;
                <a href="./registerPage.php">Klik Disini!</a>
            </p>
        </form>
    </div>
</body>
</html>