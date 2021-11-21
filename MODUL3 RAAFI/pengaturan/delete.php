<?php
include 'connect.php';
if (isset($_POST['APUGAN'])) {
    APUGAN($_POST['APUGAN'],$sambung);
}
function APUGAN($id_buku,$sambung){
   
    $KUERR = "DELETE FROM buku_table where id_buku=$id_buku"; 
    $sql = mysqli_query($sambung,$KUERR);

}