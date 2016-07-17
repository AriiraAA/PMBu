<?php  
    require_once "connect.php";

    $query = mysqli_query($connection, "SELECT COUNT(isu) AS setuju FROM maba WHERE isu='Setuju'");
    while ($row = mysqli_fetch_array($query)) {
        $setuju = $row['setuju'];
    }

    $query = mysqli_query($connection, "SELECT COUNT(isu) AS tidak_setuju FROM maba WHERE isu='Tidak Setuju'");
    while ($row = mysqli_fetch_array($query)) {
        $tidak_setuju = $row['tidak_setuju'];
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Penerimaan Mahasiswa Baru 2016 Univeritas Sriwijaya</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- -->

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
    <script type="text/javascript" src="js/chart.js"></script>
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <script type="text/javascript" src="inc/TimeCircles.js"></script>
    <link rel="stylesheet" href="inc/TimeCircles.css" />
    <link rel="shortcut icon" href="logo/unsri.jpg">

    <style type="text/css">
        .required {
            color: red;
         }

        .bem_unsri{
            background-color: rgba(0,0,0,0);
        }
        .bemu{
            margin: 0 auto; 
        }
        .bemu img{
            height: 35%;
            width: 35%;
        }
        .voting{
            height: 35%;
            width: 35%;
            margin: 0 auto;
        }

        .bemu img{
            width: 100%;
            height: 100%;
        }
        .content{
            margin-top: 5%;
        }

        #cd {
            color: white;
            margin-top: 3%;  
        }
        .title{
            text-align: center;
            font-size: 36px;
            font-weight: bolder;
            color: white;
            margin-top: 1%;
        }
        .countdown{
            margin-top: -2%;
            height: 100%;
            padding: 4 col-sm-4%;
            background-color: rgba(0,0,0,0.3);
        }
        .logo {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            margin-top: 5%;
        }

       .logo_bemf{
            margin-left: 2%;
       }
        .a, .b, .c, .d{
            margin-bottom: 4%;
        }
        
        .logo img {
            width: 100%;
            height: 100%;
        }

        h4{
            text-align: center;
        }

        h4 col-sm-4{
            text-align: center;
            font-weight: bolder;
            font-family: Verdana;
        }
        h4 col-sm-4:hover{
            font-color: red;
            font-weight: bolder;
        }

        #footer {
            background-color: #f8f8f8;
            border-color: #e7e7e7;
            height: 6%;
            color: #777;
            padding-top: 3%;
            padding-bottom: 2%;
            margin-top: 8%;
        }

        #topContainer{
            background-image: url('assets/bgrn/8.jpg');
            background-size: cover;
            margin-top: -2%;
        }

        .logo_img {
            width: 100%;
            height: 100%;
        }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">Penerimaan Mahasiswa Baru</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#portfolio">BEM KM UNSRI</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#votting">VOTING</a>
                    </li>
                    <li class="page-scroll">
                        <a href="fakultas.php">DATA</a>
                    </li>
                    <li class="page-scroll">
                        <a href="login2.php">LOGIN</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="row" id="topContainer">
            <div class="container countdown">
                <div class="title">
                    Hitung Mundur Hari Pertama Kuliah</br> 
                    Mahasiswa Baru 2016 Universitas Sriwijaya   
                </div>
                <div id="cd" class="cd" data-date="2016-08-08 00:00:00"></div>
                <script type="text/javascript">
                    $(".cd").TimeCircles();
                </script>
            </div>
        </div>
    </header>

<div class="bem_unsri"> 
    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>BEM KM Universitas Sriwijaya</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <div class="container">
                <a href="http://bem.unsri.ac.id/">
                    <div class="row bemu">
                        <img src="logo/Backdrop_PMB.jpg"/>
                    </div>
                </a>
            </div>
<br/>
<br/>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>BEM Fakultas Universitas Sriwijaya</h2>
                    <hr class="star-primary">
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="http://bem.fe.unsri.ac.id/" class="portfolio-link" data-toggle="modal"> 
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFE.png" class="logo_img" class="img-responsive" alt=""/> 
                        <h4>BEM Fakultas Ekonomi</h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="http://bem-fh.unsri.ac.id/" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFH.png" class="logo_img" class="img-responsive" alt=""/> 
                        <h4>BEM KM Fakultas Hukum</h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="https://www.facebook.com/BemKmFtUniversitasSriwijaya" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFT.png" class="logo_img" class="img-responsive" alt=""/> 
                        <h4>BEM KM Fakultas Teknik</h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf logo_bemf">
                    <a href="www.fkunsribem.wix.com/fkunsribem" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFK.jpg" class="logo_img" class="img-responsive" alt=""/> 
                        <h4>BEM KM Fakultas Kedokteran</h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="http://bemkmfpunsri.blogspot.com/" class="portfolio-link" data-toggle="modal">
                            <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="logo/BEMFP.pNg" class="logo_img" class="img-responsive" alt=""/> 
                            <h4>BEM KM Fakultas Pertanian</h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="http://bemfkipunsri.blogspot.com/" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFKIP.png" class="logo_img" class="img-responsive" alt=""/> 
                        <h4>BEM KM Fakultas<br/> Keguruan dan Ilmu Pendiidkan </h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="#" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFISIP.jpg" class="logo_img" class="img-responsive" alt=""/> 
                        <h4>BEM KM Fakultas <br/> Ilmu Sosial dan Politik</h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="https://www.facebook.com/bemfmipa.unsri?fref=ts" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFMIPA.jpg" class="logo_img" class="img-responsive" alt=""/> 
                        <h4 style="font-size: 17px;">BEM KM Fakultas<br/> Matematika dan Ilmu Pengetahuan Alam</h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="http://bem.ilkom.unsri.ac.id/" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFASILKOM.jpg" class="logo_img" class="img-responsive" alt=""/> 
                        <h4>BEM KM Fakultas Ilmu Komputer</h4>
                    </a>
                </div>
                <div class="col-sm-4 portfolio-item logo_bemf">
                    <a href="http://www.bem.fkm.unsri.ac.id/" class="portfolio-link" data-toggle="modal">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="logo/BEMFKM.jpg" class="logo_img" class="img-responsive" alt=""/> 
                        <h4>BEM KM Fakultas Kesehatan Masyarakat</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>

    <!-- votting Section -->
    <section class="success" id="votting">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Voting</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row voting">
                <h3>Apakah anda setuju dengan usulan masa kuliah maksimal 5 tahun?</h3>
                <canvas id="isuChart" width="400" height="400"></canvas>
                <script type="text/javascript">
                    var ctx = document.getElementById("isuChart");
                    var data = {
                        labels: [
                            "Tidak Setuju",
                            "Setuju"
                        ],
                        datasets: [
                            {
                                data: [<?= $tidak_setuju ?>, <?= $setuju ?>],
                                backgroundColor: [
                                    "#FF6384",
                                    "#36A2EB"
                                ],
                                hoverBackgroundColor: [
                                    "#FF6384",
                                    "#36A2EB"
                                ]
                            }]
                    };
                    var isuChart = new Chart(ctx, {
                        type: 'pie',
                        data: data,
                    });
                </script>
                <p><b>Total voters: <?= $setuju + $tidak_setuju ?></b></p>
                <p><?php 
                        date_default_timezone_set("Asia/Jakarta");
                        echo date("Y-m-d H:i:s"); 
                    ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/freelancer.js"></script>

<footer id="footer">
    <div class="container">
        <div class="pull-left">
            &copy; BEM KM Fasilkom Unsri 2016
        </div>
        <div class="pull-right">
            Created by PTI BEM KM Fasilkom Unsri
        </div>
    </div>
</footer>
<script type="text/javascript">
    var docHeight = $(window).height();
    var footerHeight = $('#footer').height();
    var footerTop = $('#footer').position().top + footerHeight;

    if (footerTop < docHeight) {
        $('#footer').css('margin-top', (docHeight - footerTop - 15) + 'px');
    }
    
    $("#topContainer").css("height", $(window).height());
    $(".contentContainer").css("min-height", $(window).height());

</script>

</body>

</html>
