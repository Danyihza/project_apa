        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <!-- Table of user -->

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($User as $u) : ?>
                        <tr>
                            <th scope="row"><?php echo $i ?></th>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td><img src="<?= base_url('assets/img/profile/' . $u['image']); ?>" class="imguser mx-auto d-block"></td>                            
                            <td>
                                <a class="badge badge-success" href="">Edit</a>
                                <a class="badge badge-danger" href="">Delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- End of Table -->


        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->