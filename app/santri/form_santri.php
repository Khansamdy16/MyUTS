<?php

$act = isset($_GET['act']) ? $_GET['act'] : false ;
$kode = isset ($_GET['nis']) ? $_GET['nis'] : false ;
if($act == 'edit') { 
    $url = base_url(). "index.php?page=santri&act=update" ;
    if($kode){
    $query = $db -> query ("SELECT * FROM santri WHERE nis = '$kode'");
    $row = $query -> fetch_array ();
    }else{
    echo  "<script>
    alert('parameter santri tidak valid');
    window.location.href='". base_url() . " index.php?page=santri' ;
    </script>" ;
    }
}else{
    $url = base_url(). "index.php?page=santri&act=save" ;

}
?>

        <div class="card">
            <div class="card-header">
                Input Data Santri
            </div>
            <div class="card-body">
                <form action="<?php echo $url; ?> " method="post">
                    <input type="hidden" name="nis_old" value="<?php echo isset($row) ? $row['nis'] : '' ; ?>">
                        <div class="mb-3">
                            <label for="nis">  NIS </label>
                            <input type="text" class="form-control" name="nis" id="nis" value="<?php echo isset($row) ? $row['nis'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama">  Nama </label>
                            <input type="text" class="form-control" name="nama" id="nama" value="<?php echo isset($row) ? $row['nama'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="asrama">  Asrama </label>
                            <input type="text" class="form-control" name="asrama" id="asrama" value="<?php echo isset($row) ? $row['asrama'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                                <a class="btn btn-danger btn-sm float-start" href="<?php echo base_url() . 'index.php?page=santri'; ?>">
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
