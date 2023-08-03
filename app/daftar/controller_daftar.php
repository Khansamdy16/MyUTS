<?php

$act = $_GET['act'] ;

if($act == 'save') {
    $kdjenis = $_POST['kdjenis'] ;
    $nama = $_POST['jenis'] ;
    $asrama = $_POST['harga'] ;
    $hari = $_POST['hari'] ;

    $query = $db->query("INSERT INTO daftar (kdjenis, jenis, harga, hari) 
                VALUES ('$kdjenis', '$jenis', '$harga', '$hari') ") ;
    if($query) {
        echo "<script>
            alert('Data sukses disimpan');
            window.location.href='".base_url()."index.php?page=daftar' ;
        </script>" ;
    }
    else {
        echo "<script>
            alert('Data gagal disimpan');
            window.location.href='".base_url()."index.php?page=daftar&act=input' ;
        </script>" ;
    }

}
else if($act == 'update'){
    $kdjenis_old = $_POST['kdjenis_old'] ;
    $kdjenis = $_POST['kdjenis'] ;
    $jenis = $_POST['jenis'] ;
    $harga = $_POST['harga'] ;
    $hari = $_POST['hari'] ;

        $query = $db -> query ("UPDATE daftar SET kdjenis = '$kdjenis',
                                                jenis = '$jenis',
                                                harga = '$harga',
                                                hari = '$hari'
                                                WHERE kdjenis='$kdjenis_old' ") ; 

        if($query) {
            echo "<script>
                alert('Data sukses diubah');
                window.location.href='".base_url()."index.php?page=daftar' ;
            </script>" ;
        } else {
            echo "<script>
                alert('Data gagal diubah');
                window.location.href='".base_url()."index.php?page=daftar' ; 
            </script>" ;
        }
    
}
else if($act == 'hapus'){
    $kdjenis =$_GET ['kdjenis'] ;
    $query = $db -> query("DELETE FROM daftar WHERE kdjenis = '$kdjenis' ") ;
        if($query) {
            echo "<script>
                alert('Data sukses dihapus');
                window.location.href='".base_url()."index.php?page=daftar' ;
            </script>" ;
        } else {
            echo "<script>
                alert('Data gagal dihapus');
                window.location.href='".base_url()."index.php?page=daftar' ;
            </script>" ;
    }
}
else{
    echo "<script>
    alert('Maaf, parameter anda tidak valid');
    window.location.href='".base_url()."index.php?page=daftar' ;
</script>" ; 
}


