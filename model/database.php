<?php

class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "utsbpwl";
    var $con;

function __construct(){
    $this->con=mysqli_connect($this->host, $this->uname, $this->pass, 
    $this->db);
    mysqli_select_db($this->con,$this->db);
    }

function tampil_data(){
    $data = mysqli_query($this->con, "SELECT * FROM Datacode");
    while($d = mysqli_fetch_array($data)){
        $hasil[] = $d;
    }
    return $hasil;
}

function input($nama,$email,$password){
    mysqli_query($this->con, "INSERT INTO Datacode VALUES('','$nama','$email','$password')");
}

function hapus($id){
    mysqli_query($this->con, "DELETE FROM Datacode WHERE id='$id'");
}

function edit($id){
    $data = mysqli_query($this->con, "SELECT * FROM Datacode WHERE id='$id'");
    while($d = mysqli_fetch_array($data)){
        $hasil[] = $d;
    }
    return $hasil;
}
function ubah($id,$nama,$email,$password){
    mysqli_query($this->con,"UPDATE Datacode SET nama = '$nama', email = '$email' ,password = '$password' WHERE id = $id");
}
}
?>