<?php
include_once("konfigurasi.php");
include_once("moduls/prosedur.php");

if(isset($_GET["page"])){
    $dta["p"] = $_GET["page"];
}else{
    $dta["p"] = "ls";
}
$pg = loadpage($dta);
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title><?=$pg["JudulPage"];?></title>
    </head>
    <body>
        <?=$pg["konten"];?>
        
        
        <script src="js/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="js/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('#tbMHS').dataTable({
                    'bPaginate': true,
                    'bLengthChange': false,
                    'bFilter': false,
                    'bSort': true,
                    'bInfo': true,
                    'bAutoWidth': false
                });
            });
        </script>
    </body>
</html>