<?php
$koneksi    = mysqli_connect("localhost","root","","sorayagallery");

function ambil_menu(){
    global $koneksi;
    $q1     = mysqli_query($koneksi, "select * from menu order by id asc");
    $rows = [];
    while ($r1     = mysqli_fetch_assoc($q1)){
        $rows[] = $r1;
    }
    return $rows;
}

function ambil_asset($section){
    global $koneksi;
    $q1     = mysqli_query($koneksi, "select * from asset where section = '$section' order by id asc");
    $rows = [];
    while ($r1     = mysqli_fetch_assoc($q1)){
        $rows[] = $r1;
    }
    return $rows;
}
?>