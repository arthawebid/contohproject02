<?php
/*
Fungsi Loadpage
digunakan untuk memilih page yang akan ditampilkan
*/
function loadpage($dta){
    $p = $dta["p"];
    switch($p){
        case "new":
            $pg = addnew();
            break;	
        case "edit":
            if(isset($_GET["nim"])){
                $pg = editdata($_GET["nim"]);
            }else{
                $pg = caridata($p);
            }
            break;
        case "del":
            if(isset($_GET["nim"])){
                $pg = deldata($_GET["nim"]);
            }else{
                $pg = caridata($p);
            }
            break;
        default:
            $pg = listdata();
            break;
    }
    return $pg;
}

/*
Fungsi addnew digunakan untuk menampilkan form tambah data baru
*/
function addnew(){
    $pg["JudulPage"]="";
    $pg["konten"]="";
    return $pg;
}

/*
Fungsi editdata digunakan untuk merubah data yang dipilih
*/
function editdata($dta){
    $pg["JudulPage"]="Edit Data";
    $pg["konten"]="";
    return $pg;
}

/*
Fungsi deldata digunakan untuk menghapus data yang dipilih
*/
function deldata($dta){
    $pg["JudulPage"]="Hapus Data";
    $pg["konten"]="";
    return $pg;
}
/*
Fungsi listdata digunakan untuk menampilkan seluruh data yang tersimpan
*/
function listdata(){
    $pg["JudulPage"]="List Data";
    $pg["konten"]="";
    return $pg;
}

/*
Fungsi mencari data yang akan di hapus ataupun yang akan diubah
*/
function caridata($aksi){
    $pg["JudulPage"]=$aksi . " Cari Data";
    $pg["konten"]="";
    return $pg;
}