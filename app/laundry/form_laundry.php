<?php

$act = isset($_GET['act']) ? $_GET['act'] : false ;
$nourut = isset ($_GET['nourut']) ? $_GET['nourut'] : false ;
if($act == 'edit') { 
    $url = base_url(). "index.php?page=laundry&act=update" ;
    if($nourut){
    $query = $db -> query ("SELECT * FROM laundry WHERE nourut = '$nourut'");
    $row = $query -> fetch_array ();
    }else{
    echo  "<script>
    alert('parameter laundry tidak valid');
    window.location.href='". base_url() . " index.php?page=laundry' ;
    </script>" ;
    }
}else{
    $url = base_url(). "index.php?page=laundry&act=save" ;

}
?>

        <div class="card">
            <div class="card-header">
                Input Data Laundry
            </div>
            <div class="card-body">
                <form action="<?php echo $url; ?> " method="post">
                    <input type="hidden" name="nourut_old" value="<?php echo isset($row) ? $row['nourut'] : '' ; ?>">
                        <div class="mb-3">
                            <label for="nourut">  No. Urut </label>
                            <input type="text" class="form-control" name="nourut" id="nourut" value="<?php echo isset($row) ? $row['nourut'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal"> Tanggal </label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo isset($row) ? $row['tanggal'] : '' ; ?>">
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
                            <label for="jenis"> Jenis Laundry </label>
                            <input type="text" class="form-control" name="jenis" id="jenis" value="<?php echo isset($row) ? $row['jenis'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="harga">  Harga/Kg </label>
                            <input type="text" class="form-control" name="harga" id="harga" value="<?php echo isset($row) ? $row['harga'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="berat">  Berat (KG) </label>
                            <input type="text" class="form-control" name="berat" id="berat" value="<?php echo isset($row) ? $row['berat'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="totalharga">  Total harga </label>
                            <input type="text" class="form-control" name="totalharga" id="totalharga" value="<?php echo isset($row) ? $row['totalharga'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="petugas"> Petugas </label>
                            <input type="text" class="form-control" name="petugas" id="petugas" value="<?php echo isset($row) ? $row['petugas'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="tanggal2"> Tanggal Pengambilan </label>
                            <input type="date" class="form-control" name="tanggal2" id="tanggal2" value="<?php echo isset($row) ? $row['tanggal2'] : '' ; ?>">
                        </div>
                        <div class="mb-3">
                                <a class="btn btn-danger btn-sm float-start" href="<?php echo base_url() . 'index.php?page=laundry'; ?>">
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
