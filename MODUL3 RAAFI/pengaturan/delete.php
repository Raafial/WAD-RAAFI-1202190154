<?php
include 'connect.php';
if (isset($_POST['TAKIS'])) {
    TAKIS($_POST['TAKIS'],$sambung);
}
function TAKIS($id_buku,$sambung){
   
    $KUERR = "DELETE FROM buku_table where id_buku=$id_buku"; 
    $sql = mysqli_query($sambung,$KUERR);

}