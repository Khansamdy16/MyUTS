<?php

$act = $_GET['act'] ;

if($act == 'save') {
    $id = $_POST['id'] ;
    $username = $_POST['username'] ;
    $password = sha1($_POST['password']) ;

    $query = $db->query("INSERT INTO petugas (id, username, password ) 
                VALUES ('$id', '$username', '$password') ") ;
    if($query) {
        echo "<script>
            alert('Data sukses disimpan');
            window.location.href='".base_url()."index.php?page=petugas' ;
        </script>" ;
    }
    else {
        echo "<script>
            alert('Data gagal disimpan');
            window.location.href='".base_url()."index.php?page=petugas&act=input' ;
        </script>" ;
    }

}
else if($act == 'update'){
    $id_old = $_POST['id_old'] ;
    $id = $_POST['id'] ;
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;

       if (!empty($password)) {
       $password_fix = sha1 ($password) ;
       $query = $db -> query ("UPDATE petugas SET id = '$id',
                                                username = '$username',
                                                password = '$password_fix'
                                                WHERE id='$id_old' ") ;
       }else{
       $query = $db -> query ("UPDATE petugas SET id = '$id',
                                                username = '$username'
                                                WHERE id='$id_old' ") ;
       }
        if($query) {
            echo "<script>
                alert('Data sukses diubah');
                window.location.href='".base_url()."index.php?page=petugas' ;
            </script>" ;
        } else {
            echo "<script>
                alert('Data gagal diubah');
                window.location.href='".base_url()."index.php?page=petugas' ; ;
            </script>" ;
        }
    
}
else if($act == 'hapus'){
    $id =$_GET ['id'] ;
    $query = $db -> query("DELETE FROM petugas WHERE id = '$id' ") ;
        if($query) {
            echo "<script>
                alert('Data sukses dihapus');
                window.location.href='".base_url()."index.php?page=petugas' ;
            </script>" ;
        } else {
            echo "<script>
                alert('Data gagal dihapus');
                window.location.href='".base_url()."index.php?page=petugas' ;
            </script>" ;
    }
}
else{
    echo "<script>
    alert('Maaf, parameter anda tidak valid');
    window.location.href='".base_url()."index.php?page=petugas' ;
</script>" ; 
}


