<?php 
$nisn = $_POST['nisn'];
$nama_lengkap = $_POST['nama_lengkap'];
$data = file("config.txt", FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $fragment = explode("|", $value);
    if($nisn == $fragment['0']) {$check = true;}
}
if($check){  ?>
    <script type ="text/javascript">
        alert("Maaf, NISN telah terdaftar!!");
        window.location.assign('register.php');
    </script> 
<?php 
}
else
{ 
    $format = "\n$nisn|$nama_lengkap";

    $file = fopen('config.txt','a');
    fwrite($file,$format);

    fclose($file);
?>
    <script type ="text/javascript">
        alert("!!! Pendaftaran berhasil!");
        window.location.assign('index.php');
    </script> 

<?php
}

