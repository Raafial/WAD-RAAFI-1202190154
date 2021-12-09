<?php 
session_start();

$koneksi = mysqli_connect('localhost:3307','root','','wad_modul4');

function daftar($query) {
    global $koneksi;

    $nama = $query["nama"];
    $email = $query["email"];
    $pw = $query["pw"];
    $pw = mysqli_real_escape_string($koneksi, $pw);
    $kpw = $query["kpw"];
    $kpw = mysqli_real_escape_string($koneksi, $kpw);
    $nohp = $query["nohp"];

    if ($pw != $kpw) {
        return false;
    }

    $cek = "SELECT email FROM user WHERE email = '$email'" ;
    $cek = mysqli_query($koneksi, $cek);
    
    if(mysqli_fetch_assoc($cek)) {
        return false;
    }

    $pw = password_hash($pw, PASSWORD_DEFAULT);

    $add = "INSERT INTO user VALUES (
        '' , '$nama' , '$email' , '$pw' , '$nohp' )" ;

    mysqli_query($koneksi, $add);

    return mysqli_affected_rows($koneksi);
}

function login($query) {
    global $koneksi;
    $email = $query["email"];
    $pw = $query["pw"];

    $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE email = '$email' ");

    if (mysqli_num_rows($cek) === 1 ) {
        $user = mysqli_fetch_assoc($cek);

        if (password_verify($pw, $user["password"]) ) {
            $_SESSION['nama'] =  $user["nama"] ;
            $_SESSION['id'] = $user["id"] ;
            if (isset($query['remember'])) {
                setcookie('nama', $user['nama'], time()+500 );
                setcookie('id', $user['id'], time()+500);
            }
            header("location: index.php");
            exit;
        }
    }
    return false;
}

function open($query){
    global $koneksi;
    $open = mysqli_query($koneksi, $query);
    $container = [];
    while( $isi = mysqli_fetch_assoc($open)) {
        $container[] = $isi;
    }

    return $container;
}

function delete($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM booking WHERE id = $id " );

    return mysqli_affected_rows($koneksi);

}

function change($query) {

    global $koneksi;

    $nama = $query["nama"];
    $pw = $query["pw"];
    if ($query["pw"] === "") {
        $pw = $query["pwlama"];
    } 
    else {
    $pw = mysqli_real_escape_string($koneksi, $pw);
    }
    if ($query["pw"] === "") {
        $kpw = $query["pwlama"];
    } 
    else {
    $kpw = $query["kpw"];
    $kpw = mysqli_real_escape_string($koneksi, $kpw);
    }
    $no_hp = $query["no_hp"];
    $id = $_SESSION['id'];

    if ($pw != $kpw) {
        return false;
    }
    
    if ($query["pw"] === "" ) {
        $pw = $query["pwlama"];
    } 
    else {
    $pw = password_hash($pw, PASSWORD_DEFAULT);
    }
    
    setcookie('warna', $query['warna'], time()+500);

    $add = "UPDATE user SET 
    nama = '$nama', password = '$pw', no_hp = '$no_hp' WHERE 
    id = $id ";
    
    mysqli_query($koneksi, $add);
    
    echo mysqli_error($koneksi);
    return 1;
}

function add ($data) {
    global $koneksi;
    
    $user_id = htmlspecialchars($data["id"]);
    $harga = htmlspecialchars($data["harga"]);
    $tanggal = htmlspecialchars($data["tanggal"]);
    $nama_tempat = htmlspecialchars($data["nama_tempat"]);
    $lokasi = htmlspecialchars($data["lokasi"]);

    $add = "INSERT INTO booking VALUES (
    '' , '$user_id' , '$nama_tempat' , '$lokasi' , '$harga' , 
    '$tanggal') ";
    
    mysqli_query($koneksi, $add);

    return(mysqli_affected_rows($koneksi));
}