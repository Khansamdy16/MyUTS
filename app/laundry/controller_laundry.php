<?php
$act = $_GET['act'] ;

if($act == 'save') {
    $nourut = $_POST['nourut'] ;
    $tanggal = $_POST['tanggal'] ;
    $nama = $_POST['nama'] ;
    $asrama = $_POST['asrama'] ;
    $jenis = $_POST['jenis'] ;
    $harga = $_POST['harga'] ;
    $berat= $_POST['$berat'] ;
    $totalharga = $_POST['totalharga'] ;
    $petugas = $_POST['petugas'] ;
    $tanggal2 = $_POST['tanggal2'] ;
    
    $query = $db->query("INSERT INTO laundry (nourut, tanggal, nama, asrama, jenis, harga, berat, totalharga,  petugas, tanggal2) 
                VALUES ('$nourut', '$tanggal', '$nama', '$asrama', '$jenis','$harga', '$berat', '$totalharga', '$petugas', '$tanggal2') ") ;

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
    $nourut_old = $_POST['nourut_old'] ;
    $nourut = $_POST['nourut'] ;
    $tanggal = $_POST['tanggal'] ;
    $nama = $_POST['nama'] ;
    $asrama = $_POST['asrama'] ;
    $jenis = $_POST['jenis'] ;
    $harga = $_POST['harga'] ;
    $berat= $_POST['$berat'] ;
    $totalharga = $_POST['totalharga'] ;
    $petugas = $_POST['petugas'] ;
    $tanggal2 = $_POST['tanggal2'] ;

        $query = $db -> query ("UPDATE laundry SET nourut = '$nourut',
                                                tanggal = '$tanggal',
                                                nama = '$nama',
                                                asrama = '$asrama',
                                                jenis = '$jenis',
                                                harga = '$harga',
                                                berat = '$berat',
                                                totalharga = '$totalharga',
                                                petugas = '$petugas'
                                                tanggal2 = '$tanggal2'
                                                WHERE nourut='$nourut_old' ") ; 

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
    $nourut =$_GET ['nourut'] ;
    $query = $db -> query("DELETE FROM laundry WHERE nourut = '$nourut' ") ;
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


