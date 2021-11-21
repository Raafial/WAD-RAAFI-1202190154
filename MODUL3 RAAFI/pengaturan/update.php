<?php
$nowDate = time();
if (isset($_POST['updateEvent'])) {
  $judulbuku = $_POST['Back1'];  $Penulis = $_POST['Back2'];  $TahunTerbit = $_POST['Back3'];  $Deskripsi = $_POST['Back4'];  $bahasa = $_POST['Blas'];  $tag = json_encode($_POST['DAG']);  $id = $_POST['id_buku'];


  $KUERRRR ="";
    $KUERRRR = "UPDATE `buku_table` SET `judul_buku`='$judulbuku',`penulis_buku`='$Penulis',`tahun_terbit`='$TahunTerbit',`deskripsi`='$Deskripsi',`bahasa`='$bahasa',`tag`='$tag' WHERE `id_buku`= '$id'";
  // }

  $CQL = mysqli_query($sambung, $KUERRRR);
  if ($CQL) {
    echo '<br>';
   
  } else {


  }

  // echo $name."--".$desc."--".$fileIMGName."\n";
  // echo "type : ".$type."\n";
  // echo "date : ".$date."\n";
  // echo "start : ".$start."\n";
  // echo "location : ".$loc."\n";
  // echo "price : ".$price."\n";
  // echo "benefit : ".json_encode($benefit)."\n";
  // echo "end : ".$end."\n";
// } else {
//   // do nothing
}
