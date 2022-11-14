<?php 

$id_catatan=$_GET['id_catatan'];

$format = "\n$id_catatan|$nisn|$nama_lengkap|$tanggal|$jam|$kegiatan|$hasil";

$no= 0;
$data = file('catatan.txt',FILE_IGNORE_NEW_LINES);
foreach($data as $value){
    $no++;
    $fragment = explode("|", $value);
    if($fragment['0']==$id_catatan){
        $line = $no-1; 
    }
}

$buka_file = file('catatan.txt'); 

unset($buka_file[$line]);
file_put_contents('catatan.txt', implode('',$buka_file));
?>

<script type="text/javascript">
alert("Data catatan berhasil dihapus");
window.location.assign('user.php');
</script>