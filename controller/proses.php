<?php
include '../model/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
    $db->input($_POST['name'],$_POST['email'],$_POST['password']);
    header("Location:../view/utama.php");

}else if($aksi == "user"){
    foreach($db->tampil_data() as $x){
        if($_POST['name'] == $x['nama'] && $_POST['password'] == $x['password']){
            header("Location:../view/utama.php");  
            break;
        }else if($_POST['name'] == "admin" && $_POST['password'] == "nugi"){
            header("Location:../view/datatampil.php");
            break;
        }else{
            header("Location:../view/login.php");
        }
    }
}

elseif($aksi == "hapus"){
    $db->hapus($_GET['id']);
    header("Location:../view/datatampil.php");
}

elseif($aksi == "ubah"){
    $db->ubah($_POST['id'],$_POST['nama'],$_POST['email'],$_POST['password']);
    header("Location:../view/datatampil.php");
}

elseif ($aksi == "google"){
    require_once "../config/config.php";
    if(isset($_SESSION['acces_token'])){
        $google_client->setAccessToken($_SESSION['access_token']);
    }
    elseif (isset($_GET['code'])) {
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    }

    $google_service = new Google_Service_Oauth2($google_client);
    $data = $google_service->userinfo_v2_me->get();
// var_dump($data);
    $_SESSION['email'] = $data['email'];
    $_SESSION['name']=$data['name'];
    $password = 10101010;
    $db ->input($_SESSION['name'],$_SESSION['email'],$password);   
    header('location:../view/utama.php');
}
?>