        <div class="card">
            <div class="card-header">
                    Daftar Harga Laundry
                </div>
                    <div class="card-body">
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=daftar&act=input'; ?>"> 
                    <i class="fa-solid fa-circle-plus"></i> Tambah Data </a>
                    <?php
                    $query = $db->query("SELECT * FROM daftar") ;
                    ?>
                    <table class = "table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Jenis</th>
                                <th>Jenis</th>
                                <th>Harga</th>
                                <th>Lama Pengambilan</th>
                                <th>Act</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1 ;
                            while($row = $query->fetch_array()) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row['kdjenis']; ?></td>
                                    <td><?php echo $row['jenis']; ?></td>
                                    <td><?php echo $row['harga']; ?></td>
                                    <td><?php echo $row['hari']; ?></td>
                                    <td> <a class="btn btn-outline-success btn-sm" href="<?php echo base_url();?>index.php?page=daftar&act=edit&kdjenis=<?php echo $row['kdjenis']; ?> "> <i class="fa-regular fa-pen-to-square"></i> </a>
                                        | <a class="btn btn-outline-danger btn-sm"  href="<?php echo base_url();?>index.php?page=daftar&act=hapus&kdjenis=<?php echo $row['kdjenis']; ?> "> <i class="fa-solid fa-trash-can"></i> </a> </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

