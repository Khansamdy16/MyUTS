        <div class="card">
            <div class="card-header">
                    Data Laundry
                </div>
                    <div class="card-body">
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=laundry&act=input'; ?>"> 
                    <i class="fa-solid fa-circle-plus"></i> Tambah Data </a>
                    <?php
                    $query = $db->query("SELECT * FROM laundry") ;
                    ?>
                    <table class = "table table-striped">
                        <thead>
                            <tr>
                                <th>No. Urut</th>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Asrama</th>
                                <th>Jenis Laundry</th>
                                <th>Harga/Kg</th>
                                <th>Berat (KG)</th>
                                <th>Total Harga</th>
                                <th>Petugas</th>
                                <th>Tanggal Pengambilan</th>
                                <th>Act</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($row = $query->fetch_array()) {
                            ?>
                                <tr>
                                    <td><?php echo $row['nourut']; ?></td>
                                    <td><?php echo $row['tanggal']; ?></td>
                                    <td><?php echo $row['nama']; ?></td>
                                    <td><?php echo $row['asrama']; ?></td>
                                    <td><?php echo $row['jenis']; ?></td>
                                    <td><?php echo $row['harga']; ?></td>
                                    <td><?php echo $row['berat']; ?></td>
                                    <td><?php echo $row['totalharga']; ?></td>
                                    <td><?php echo $row['petugas']; ?></td>
                                    <td><?php echo $row['tanggal2']; ?></td>
                                    <td> <a class="btn btn-outline-success btn-sm" href="<?php echo base_url();?>index.php?page=laundry&act=edit&nourut=<?php echo $row['nourut']; ?> "> <i class="fa-regular fa-pen-to-square"></i> </a>
                                        | <a class="btn btn-outline-danger btn-sm"  href="<?php echo base_url();?>index.php?page=laundry&act=hapus&nourut=<?php echo $row['nourut']; ?> "> <i class="fa-solid fa-trash-can"></i> </a> </td>
                                </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div>
            </div>

