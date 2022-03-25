<?php
if(isset($_POST["cmdBuatData"])){
    include_once("konfigurasi.php");
    include_once("moduls/buatdatabase.php");
    dropdb();
    createdb();
    createdata();

    echo "
    <script>
    function pageRedirect() {
        window.location.replace('index.php');
    }      
    setTimeout('pageRedirect()', 5000);
    </script>";
}
?><!DOCTYPE html>
<html>
<head>
    <title>Setup Data Mahasiswa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: black;
            text-align: center;
        }
        .kotak{
            width: 100%;
            margin-top: 50px;
        }
        button{
            font-family: tahoma;
        }
        .center {margin: auto;width: 50%;padding: 10px;}
        h1{font-family: cursiva; color:white; font-weight: bold;}
        .judul{
            margin-top: 80px;
            margin-bottom: 0px;
            text-shadow: 1px 1px grey;
        }
        .subjudul{
            font-style: italic;
            margin-top: 0px;
            color: white;
        }
        .cleardata{
            clear: both;
        }
    </style>
</head>
<body>

<div class="content">
    <div class="center">
        <div class="judul">
            <h1>Project Pengolahan Data Mysql dengan PHP</h1>
            <span class="subjudul">Versi 1.0</span>
        </div>
        
    </div>
    <div class="container">
        <form method="post">
            <div class="col-12">
                <button type="submit" id="kirim" name="cmdBuatData" class="btn btn-success host">Buat Database dan Tabel</button>
            </div>
        </form>
    </div>

</div>

</body>
</html>