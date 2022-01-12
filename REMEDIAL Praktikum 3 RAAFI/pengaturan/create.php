<?php
$nowDate = time();
if (isset($_POST['submit'])) {  $judulbuku = $_POST['judul'];  $Penulis = $_POST['penulis'];  $TahunTerbit = $_POST['terbit'];  $Deskripsi = $_POST['desc'];  $bahasa = $_POST['Blas'];  $tag = json_encode($_POST['DAG']);

  $fileIMG = $_FILES['inputImg'];  $fileIMGName = $_FILES['inputImg']['name'];  $fileIMGType = $_FILES['inputImg']['type'];  $fileIMGSize = $_FILES['inputImg']['size'];  $fileIMGTempLoc = $_FILES['inputImg']['tmp_name'];

  $filePathLocal = "./assets/Photo/$nowDate-$judulbuku" . ".png";
  $saveLocal =  move_uploaded_file($fileIMGTempLoc, $filePathLocal);


$KUEER = "INSERT INTO `buku_table`    (`judul_buku`, `penulis_buku`, `tahun_terbit`,     `deskripsi`, `gambar`, `tag`,      `bahasa`) 
    VALUES ('$judulbuku','$Penulis','$TahunTerbit',    '$Deskripsi','$filePathLocal','$tag','$bahasa')";


  $CQL = mysqli_query($sambung, $KUEER);
 
} else {
  // do nothing
}
