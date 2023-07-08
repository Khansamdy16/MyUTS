<?php
$act = $_GET['act'] ;

if($act == 'save') {
    $kode = $_POST['kode'] ;
    $tanggal = $_POST['tanggal'] ;
    $nama = $_POST['nama'] ;
    $asrama = $_POST['asrama'] ;
    $jenis = $_POST['jenis'] ;
    $berat= $_POST['$berat'] ;
    $harga = $_POST['harga'] ;
    $petugas = $_POST['petugas'] ;

    $query = $db->query("INSERT INTO laundry (kode, tanggal, nama, asrama, jenis, berat, harga,  petugas) 
                VALUES ('$kode', '$tanggal', '$nama', '$asrama', '$jenis', '$berat', '$harga', '$petugas') ") ;

if($query) {
    echo "<script>
        alert('Data sukses disimpan');
        window.location.href='".base_url()."index.php?page=laundry' ;
    </script>" ;
}
else {
    echo "<script>
        alert('Data gagal disimpan');
        window.location.href='".base_url()."index.php?page=laundry&act=input' ;
    </script>" ;
}

}
else if($act == 'update'){
    $kode_old = $_POST['kode_old'] ;
    $kode = $_POST['kode'] ;
    $tanggal = $_POST['tanggal'] ;
    $nama = $_POST['nama'] ;
    $asrama = $_POST['asrama'] ;
    $jenis = $_POST['jenis'] ;
    $berat= $_POST['berat'] ;
    $harga = $_POST['harga'] ;
    $petugas = $_POST['petugas'] ;

        $query = $db -> query ("UPDATE laundry SET kode = '$kode',
                                                tanggal = '$tanggal',
                                                nama = '$nama',
                                                asrama = '$asrama',
                                                jenis = '$jenis',
                                                berat = '$berat',
                                                harga = '$harga',
                                                petugas = '$petugas'
                                                WHERE kode='$kode_old' ") ; 

        if($query) {
            echo "<script>
                alert('Data sukses disimpan');
                window.location.href='".base_url()."index.php?page=laundry' ;
            </script>" ;
        }
        else {
            echo "<script>
                alert('Data gagal disimpan');
                window.location.href='".base_url()."index.php?page=laundry&act=input' ;
            </script>" ;
        }
    
}
else if($act == 'hapus'){
    $kode =$_GET ['kode'] ;
    $query = $db -> query("DELETE FROM laundry WHERE kode = '$kode' ") ;
        if($query) {
            echo "<script>
                alert('Data sukses dihapus');
                window.location.href='".base_url()."index.php?page=laundry' ;
            </script>" ;
        } else {
            echo "<script>
                alert('Data gagal dihapus');
                window.location.href='".base_url()."index.php?page=laundry' ;
            </script>" ;
    }
}
else{
    echo "<script>
    alert('Maaf, parameter anda tidak valid');
    window.location.href='".base_url()."index.php?page=laundry' ;
</script>" ; 
}


