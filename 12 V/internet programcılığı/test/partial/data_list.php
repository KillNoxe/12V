<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "9036first";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT ID, Name, Surname, Image,Gender,ClassID FROM Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo 
    // "ID : " . $row["ID"]. 
    // "<br>Name : " . $row["Name"]. " " . $row["Surname"]. 
    // "<br> Resim : ".$row["Image"]. 
    // "<br> Cinsiyet : ".$row["Gender"]. 
    // "<br> Sınıfı : ".$row["ClassID"]
    // ."<br><br>"
    // ;
    if($row["ClassID"] == 1){
        $sinif = "9/V";
    }
    if($row["ClassID"] == 2){
        $sinif = "9/Y";
    }
    if($row["ClassID"] == 3){
        $sinif = "10/V";
    }
    if($row["ClassID"] == 4){
        $sinif = "10/Y";
    }
    if($row["ClassID"] == 5){
        $sinif = "11/V";
    }
    if($row["ClassID"] == 6){
        $sinif = "11/Y";
    }
    if($row["ClassID"] == 7){
        $sinif = "12/V";
    }
    if($row["ClassID"] == 8){
        $sinif = "12/Y";
    }

    if($row["Gender"] == 1){
        $cinsiyet = "Erkek";
        $resim = "male.png";
    }
    else{
        $cinsiyet = "Kız";
        $resim = "female.png";
    }
    if($row["Image"] != Null){
    }
    else{
        $row["Image"] = $resim;
    }
    echo "
    <tr>
        <td><img class='img' src='img/".$row["Image"]."'></td>
        <td>".$row["Name"]." ".$row["Surname"]."</td>
        <td>".$cinsiyet."</td>
        <td>".$sinif."</td>
        <td></td>
        <td></td>
        <td><a class = 'kirmizibuton' href='edit.php'>Düzenle</a> <a class = 'mavibuton' href=''>Sil</a></td>
    </tr> 
    ";
  }
} else {
  echo "0 results";
}
$conn->close();
?>