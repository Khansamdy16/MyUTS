<?php

$act = isset($_GET['act']) ? $_GET['act'] : false ;
$kode = isset ($_GET['kdjenis']) ? $_GET['kdjenis'] : false ;
if($act == 'edit') { 
    $url = base_url(). "index.php?page=daftar&act=update" ;
    if($kode){
    $query = $db -> query ("SELECT * FROM daftar WHERE kdjenis = '$kode'");
    $row = $query -> fetch_array ();
    }else{
    echo  "<script>
    alert('parameter daftar tidak valid');
    window.location.href='". base_url() . " index.php?page=daftar' ;
    </script>" ;
    }
}else{
    $url = base_url(). "index.php?page=daftar&act=save" ;

}
?>

        <div class="card">
            <div class="card-header">
                Input Daftar Harga
            </div>
            <div class="card-body">
                <form action="<?php echo $url; ?> " method="post">
                    <input type="hidden" name="kdjenis_old" value="<?php echo isset($row) ? $row['kdjenis'] : '' ; ?>">
                        <div class="mb-3">
                            <label for="kdjenis">  Kode Jenis </label>
                            <input type="text" class="form-control" name="kdjenis" id="kdjenis" value="<?php echo isset($row) ? $row['kdjenis'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="jenis">  Jenis </label>
                            <input type="text" class="form-control" name="jenis" id="jenis" value="<?php echo isset($row) ? $row['jenis'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="harga">  Harga/Kg </label>
                            <input type="text" class="form-control" name="harga" id="harga" value="<?php echo isset($row) ? $row['harga'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="hari">  Lama Pengambilan </label>
                            <input type="text" class="form-control" name="hari" id="hari" value="<?php echo isset($row) ? $row['hari'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                                <a class="btn btn-danger btn-sm float-start" href="<?php echo base_url() . 'index.php?page=daftar'; ?>">
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
