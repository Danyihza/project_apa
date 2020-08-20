        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <!-- Table of user -->
            <?= $this->session->flashdata('message'); ?>
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
                            <td><img src="<?= base_url('assets/img/profile/' . $u['image']); ?>" width="64"></td>
                            <td>
                                <a class="badge badge-success" href="#" data-target="#ModalEdit" data-toggle="modal">Edit</a>
                                <!-- <a type="button" class="badge badge-warning" href="#" data-target="#ModalEdit" data-toggle="modal">Edit</a> -->
                                <a class="badge badge-danger" href="<?= base_url('admin/delete/') . $u['id'] ?>" onclick="confirm('Apakah anda yakin menghapusnya ?')">Delete</a>
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

        <!-- Modal -->
        <div class="modal fade" id="ModalEdit" name="ModalEdit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="<?php echo base_url('admin/role'); ?>" method="POST">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Role Name">
                                <input type="text" class="form-control" id="role" name="role" placeholder="Email" readonly>
                            </div>
                                

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Of Modal -->

        