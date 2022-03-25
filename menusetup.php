<!DOCTYPE html>
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
        <div class="row kotak">
            <div class="col-6">
                <button type="button" id="setup" class="btn btn-success host">Setup Database</button>
            </div>
            <div class="col-6">
                <button type="button" id="dashboard" class="btn btn-success host">Dashboard Data</button>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#dashboard").click(function(){
            window.open("index.php","#dashboard");
        });
        $("#setup").click(function(){
            window.open("indexsetup.php","#setupage");
        });
    });
</script>

</body>
</html>