<html>
    <head>
        <!-- div di seluruh halaman ini, diset seperti di block-->
        <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}"/>
        <style>
            div {
                color: green;
                font-weight: bold;
                text-align: right;
            }
            .judulhalaman{
                text-align: center;
                font-size: large;
            }
        </style>

    </head>
    <body>
        <div class="judulhalaman">Selamat Datang</div>
        <!-- Inline CSS, digunakan ketika ada spesifik ke 1 bagian saja-->
        <p style="text-decoration: line-through;color: red;">Hallo Apa Kabar  ?</p>
        <!-- Inpage CSS, digunakan ketika ada yang spesifik ke 1 halaman khusus-->
        <div>Hallo Apa Kabar  ?</div>
        <!-- External CSS, digunkan untuk format umum 1 website-->
        <span>Hallo Apa Kabar  ?</span>
        <p>Bagian terakhir</p>
    </body>
</html>