<?php

$act = isset($_GET['act']) ? $_GET['act'] : false ;
$kode = isset ($_GET['id']) ? $_GET['id'] : false ;
if($act == 'edit') { 
    $url = base_url(). "index.php?page=petugas&act=update" ;
    if($kode){
    $query = $db -> query ("SELECT * FROM petugas WHERE id = '$kode'");
    $row = $query -> fetch_array ();
    }else{
    echo  "<script>
    alert('parameter petugas tidak valid');
    window.location.href='". base_url() . " index.php?page=petugas' ;
    </script>" ;
    }
}else{
    $url = base_url(). "index.php?page=petugas&act=save" ;

}
?>

        <div class="card">
            <div class="card-header">
                Input Data Petugas
            </div>
            <div class="card-body">
                <form action="<?php echo $url; ?> " method="post">
                    <input type="hidden" name="id_old" value="<?php echo isset($row) ? $row['id'] : '' ; ?>">
                        <div class="mb-3">
                            <label for="id">  ID Petugas </label>
                            <input type="text" class="form-control" name="id" id="id" value="<?php echo isset($row) ? $row['id'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="username">  Username </label>
                            <input type="text" class="form-control" name="username" id="username" value="<?php echo isset($row) ? $row['username'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="password">  Password </label>
                            <input class="form-control" type="password" name="password" id="password">
                        </div>
                        <div class="mb-3">
                                <a class="btn btn-danger btn-sm float-start" href="<?php echo base_url() . 'index.php?page=petugas'; ?>">
                                <i class="fa-solid fa-chevron-left"></i> 
                                Kembali 
                                </a>
                                <button class="btn btn-primary btn-sm float-end" type="submit">
                                <i class="fa-regular fa-floppy-disk"></i>
                                Simpan Data
                                </button>
                        </div>
                </form>
            </div>
        </div>
