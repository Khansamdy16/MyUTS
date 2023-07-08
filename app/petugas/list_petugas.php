        <div class="card">
            <div class="card-header">
                    Data Petugas
                </div>
                    <div class="card-body">
                    <a class="btn btn-primary btn-sm" href="<?php echo base_url() . 'index.php?page=petugas&act=input'; ?>"> 
                    <i class="fa-solid fa-circle-plus"></i> Tambah Data </a>
                    <?php
                    $query = $db->query("SELECT * FROM petugas") ;
                    ?>
                    <table class = "table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>ID</th>
                                <th>Username</th>
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
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['username']; ?></td> 
                                    <td> <a class="btn btn-outline-success btn-sm" href="<?php echo base_url();?>index.php?page=petugas&act=edit&id=<?php echo $row['id']; ?> "> <i class="fa-regular fa-pen-to-square"></i> </a>
                                        | <a class="btn btn-outline-danger btn-sm"  href="<?php echo base_url();?>index.php?page=petugas&act=hapus&id=<?php echo $row['id']; ?> "> <i class="fa-solid fa-trash-can"></i> </a> </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

