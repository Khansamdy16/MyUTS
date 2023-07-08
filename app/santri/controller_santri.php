<?php

$act = $_GET['act'] ;

if($act == 'save') {
    $nis = $_POST['nis'] ;
    $nama = $_POST['nama'] ;
    $asrama = $_POST['asrama'] ;

    $query = $db->query("INSERT INTO santri (nis, nama, asrama) 
                VALUES ('$nis', '$nama', '$asrama') ") ;
    if($query) {
        echo "<script>
            alert('Data sukses disimpan');
            window.location.href='".base_url()."index.php?page=santri' ;
        </script>" ;
    }
    else {
        echo "<script>
            alert('Data gagal disimpan');
            window.location.href='".base_url()."index.php?page=santri&act=input' ;
        </script>" ;
    }

}
else if($act == 'update'){
    $nis_old = $_POST['nis_old'] ;
    $nis = $_POST['nis'] ;
    $nama = $_POST['nama'] ;
    $asrama = $_POST['asrama'] ;

        $query = $db -> query ("UPDATE santri SET nis = '$nis',
                                                nama = '$nama',
                                                asrama = '$asrama',
                                                WHERE nis='$nis_old' ") ; 

        if($query) {
            echo "<script>
                alert('Data sukses diubah');
                window.location.href='".base_url()."index.php?page=santri' ;
            </script>" ;
        } else {
            echo "<script>
                alert('Data gagal diubah');
                window.location.href='".base_url()."index.php?page=santri' ; ;
            </script>" ;
        }
    
}
else if($act == 'hapus'){
    $nis =$_GET ['nis'] ;
    $query = $db -> query("DELETE FROM santri WHERE nis = '$nis' ") ;
        if($query) {
            echo "<script>
                alert('Data sukses dihapus');
                window.location.href='".base_url()."index.php?page=santri' ;
            </script>" ;
        } else {
            echo "<script>
                alert('Data gagal dihapus');
                window.location.href='".base_url()."index.php?page=santri' ;
            </script>" ;
    }
}
else{
    echo "<script>
    alert('Maaf, parameter anda tidak valid');
    window.location.href='".base_url()."index.php?page=santri' ;
</script>" ; 
}


