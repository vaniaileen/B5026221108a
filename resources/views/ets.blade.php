<html lang="en">

<head>
    <title>ETS PWEB</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="stylesheet.css" rel="stylesheet" />
    <script>
        function validateForm() {
            var nama = document.getElementById("nama");
            var msg = document.getElementById("msg");

            if (kontak.value.length <13) {
                kontak.focus();
                kontak.placeholder = "contoh : 085815510500";
                return false;
            }

            if (isNaN(kontak.value) == true) 
            {
                kontak.focus();
                msg.innerHTML = "kontak harus nomor HP yang valid";
                return false;
            }
        }
    </script>
</head>

<body>
    <!--navbar start-->
    <div class="container-fluid">
        <nav id="navbar" class="navbar fixed-top">
            <a class="navbar-brand" href="#">
                <div class="text-container">
                    <h5><b>Vania's Portofolio</b></h5>
                </div>
            </a>
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#edu">Education</a>
            <a href="#specialization">Specialization</a>
            <a href="#contact">Contact</a>
        </nav>
    </div>
    <!--navbar end-->
    <!--home start-->
    <div class="container" id="home" style="margin-top: 100px;">
        <div class="row">
            <div class="col-6 pt-5; margin-top : 50px; margin-bottom : 20px; vertical-align : middle; ">
                <h1><b>Welcome to My Digital Sanctuary!</b></h1>
                <p></p> Hello and a heartfelt welcome to my personal corner of the internet! I'm Vania, and I'm
                    thrilled to have you here. This space is more than just a website; it's a reflection of my passions,
                    creativity, and experiences.
                
                    Thank you for being here. I hope you find joy and inspirations thorugh this page</p>
            </div>
            <div class="col-6 pt-5; margin-top : 70px; margin-bottom : 70px; padding: 50px 0; ">
                <div class="w-100 align-self-end">
                    <img src="{{ asset('img/DSCF4787.JPG') }}" alt="profile" width="150px" class="ava">
                </div>
            </div>
        </div>
    </div>
    <!--home end-->
    <!--about start-->
    <div class="container" id="about">
        <div class="row" style="background-color: #303B2E;  margin: 20px;">
            <div class="col-7" style="color: #EFEBE0; text-align: center; padding: 50px 0;">
                <p>Glad to see you here! Hi, I'm Vania Aileen, people used to call me Vania. I'm a passionate Social Media based in Surabaya. With a love for Social
                    Media, I create content that speaks volumes. Explore my creative projects, insightful thoughts, and
                    social media expertise. Dive into a world of inspiration and innovation.</p>
            </div>
            <div class="col-5" style="color: #EFEBE0; text-align: center; padding: 50px 0;">
                <h1>
                    <centre><b>About me!</b></centre>
                </h1>
            </div>
        </div>
    </div>
    <!--about end-->
    <!--edu start-->
    <div class="container" id="edu">
        <div class="row" style="background-color:#EFEBE0;  margin: 20px;">
            <div class="col-6" style="color:#303B2E ; text-align:center; padding: 50px;">
                <h4>As someone who took semi-gap year, I have a few variety education background. First, I study Public
                    Health in Airlangga University. But after a year, I change major to Information Systems in ITS
                    Surabaya.
                </h4>
            </div>
            <div class="col-6" style="color: #303B2E;">
                <div class="container">
                    <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                        <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                        </ul>

                        <!-- The slideshow -->
                        <div class="carousel-inner" style="color: #EFEBE0;">
                            <div class="carousel-item active">
                                <div class="card" style="width:400px">
                                    <img class="card-img-top" src="{{ asset('img/sisfor.jpg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">Information Systems</h4>
                                        <p class="card-text">Studies the
                                            development and management of an information system, business
                                            process modeling, and information system integration.</p>
                                        <a href="https://www.its.ac.id/si/" target="_blank"
                                            class="btn btn-info stretched-link">Check it Out!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="card" style="width: 400px;">
                                    <img class="card-img-top" src="{{ asset('img/fkm.jpeg') }}" alt="Card image" style="width:100%">
                                    <div class="card-body">
                                        <h4 class="card-title">Public Health</h4>
                                        <p class="card-text">One of the best Public Heath studies in Indonesia,
                                            creating top-tier healthcare workers.</p>
                                        <a href="https://fkm.unair.ac.id/" target="_blank"
                                            class="btn btn-info stretched-link">Check it Out!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#demo" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#demo" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--edu end-->
    <!--specialization start-->
    <div class="container" id="specialization" style="margin-left: 50px; color: #EFEBE0;">
        <div class="row">
            <div class="col-4 margin-right: 5px;">
                <div class="card" style="width:350px">
                    <div class="card-body">
                        <h4 class="card-title">Social Media Strategist</h4>
                        <p class="card-text">analyze survey metrics, television ratings, and web page visits to build
                            target customer profiles, then create optimized ad campaigns.</p>
                    </div>
                    <img class="card-img-bottom" src="{{ asset('img/socmed strategist.jpeg') }}" alt="Card image" style="width:100%">
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width:350px">
                    <div class="card-body">
                        <h4 class="card-title">Content Creator</h4>
                        <p class="card-text">creates entertaining or educational material to be expressed through any
                            medium or channel. But, in my case, I focus on instagram.</p>
                    </div>
                    <img class="card-img-top" src="{{ asset('img/content creator.jpeg') }}" alt="Card image" style="width:100%">
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width:350px">
                    <div class="card-body">
                        <h4 class="card-title">Copywriting</h4>
                        <p class="card-text">SWrite persuasive marketing and promotional materials that motivate people
                            to make a purchase, click on a link, donate to a cause, etc.</p>
                    </div>
                    <img class="card-img-bottom" src="{{ asset('img/copywrite.jpeg') }}" alt="Card image" style="width:100%; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!--specializatioin end-->
    <!--contact start-->
    <div class="container" id="contact" style="padding: 50px;">
        <div class="row" style="background-color: #303B2E; padding-top: 30px; padding-bottom: 3-px;">
            <div class="container">
                <form action="https://wa.me/085815510500" method="get" onsubmit="return validateForm();">
                    <div class="form-group" style="color: #EFEBE0;">
                        <label for="nama">Name :</label>
                        <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="form-group" style="color: #EFEBE0;">
                        <label for="kontak">Phone Number :</label>
                        <input type="text" class="form-control" id="kontak">
                    </div>
                    <div class="form-group" style="color: #EFEBE0;">
                        <label for="pesan">Message :</label>
                        <input type="text" class="form-control" id="kontak">
                    </div>
                    <input type="submit" value="Contact Me!" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    <script>
        window.onscroll = function () { scrollFunction() };
        function scrollFunction() {
            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "0px";
            }
        }
    </script>
     <!--contact end-->
     <ul>
        <li> <a href="http://localhost/B5026221108/public/hello"> Tugas Hello </a></li>
        <li> <a href="http://localhost/B5026221108/public/style"> Tugas Style </a></li>
        <li> <a href="http://localhost/B5026221108/public/link"> Tugas Link </a></li>
        <li> <a href="http://localhost/B5026221108/public/js1"> Tugas Javascript 1 </a></li>
        <li> <a href="http://localhost/B5026221108/public/js2"> Tugas Javascript 2 </a></li>
        <li> <a href="http://localhost/B5026221108/public/5026221108"> Tugas Linktree </a></li>
        <li> <a href="http://localhost/B5026221108/public/validasi"> Tugas Validasi </a></li>
        <li> <a href="http://localhost/B5026221108/public/ets"> ETS </a></li>
        <li> <a href="http://localhost/B5026221108/public/responsive"> Tugas responsive </a></li>
     </ul>   
</body>

</html>
