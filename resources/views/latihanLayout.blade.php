<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@600;800&display=swap" rel="stylesheet">

    <style>
        html, body{
            height: 100%;
        }
        .bg-light{
            min-width: 100%;
        }
        .body,
        h1, h4, p {
            font-family: 'Nunito', 'sans-serif'; 
            color: #4d4d4d ;
        }
    
    </style>
</head>

<body>
    <div class="bg-light"></div>
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 pb-5">
                    <img src="{{ asset('img/Dark.png') }}" width="10%" class="float-right">
                </div>
                <div class="col-4 pt-5">
                    <div class="col">
                        <div class="col-12">
                        <h1><b>Meet the Team</b></h3>
                        <p>A description about your team goes here. Talk about your values, mission, and anything else you would be helpful or relevant for investors to know. A description abut your team goes here.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4 pt-5">
                    <div class="col">
                        <div class="col-12">
                            <div row>
                                <div class="row pt-3">
                                    <div class="col-4">
                                        <img src="{{ asset('img/Image.png') }}" width="100%">
                                    </div>
                                    <div class="col-8">
                                        <h4>Charlie Kelly</h4>
                                        <p>CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div row>
                                <div class="row pt-3">
                                    <div class="col-4">
                                        <img src="{{ asset('img/Image2.png') }}" width="100%">
                                    </div>
                                    <div class="col-8">
                                        <h4>Sandra Alta</h4>
                                        <p>CMO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-4 pt-5">
                    <div class="col">
                        <div class="col-12">
                            <div row>
                                <div class="row pt-3">
                                    <div class="col-4">
                                        <img src="{{ asset('img/Image1.png') }}" width="100%">
                                    </div>
                                    <div class="col-8">
                                        <h4>Sandra Alta</h4>
                                        <p>CEO</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div row>
                                <div class="row pt-3">
                                    <div class="col-4">
                                        <img src="{{ asset('img/Image3.png') }}" width="100%">
                                    </div>
                                    <div class="col-8">
                                        <h4>Joe Black</h4>
                                        <p>CMO</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</body>
</html>