        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <!-- Table of user -->
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-hover" id="myTable">
                <thead>
                    <tr>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Pilihan 1</th>
                        <th scope="col">Pilihan 2</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($User as $u) : ?>
                        <tr>
                            <td class="text-center">
                                <?php if ($u['is_active'] == 1) : ?>
                                    <a class="btn btn-danger" href="#" data-target="#statusModal<?= $u['id'] ?>" data-toggle="modal">Tidak Lolos</a>
                                <?php else : ?>
                                    <a class="btn btn-success" href="#" data-target="#statusModal<?= $u['id'] ?>" data-toggle="modal">Lolos</a>
                                <?php endif; ?>
                            </td>
                            <td><?= $u['name']; ?></td>
                            <td><?= $u['kelas']; ?></td>
                            <td><?php

                                $rs = $this->db->get_where('jabatan', ['id_jabatan' => $u['pilihan1']])->row_array();
                                $sub = '';

                                if ($u['sub_jabatan1'] > 0) {
                                    $r = $this->db->get_where('sub_jabatan', ['id_sub' => $u['sub_jabatan1']])->row_array();
                                    $sub = $r['sub_jabatan'] . "&nbsp;";
                                }
                                echo $sub . $rs['jabatan'];

                                ?></td>
                            <td><?php

                                $rs = $this->db->get_where('jabatan', ['id_jabatan' => $u['pilihan2']])->row_array();
                                $sub = '';

                                if ($u['sub_jabatan2'] > 0) {
                                    $r = $this->db->get_where('sub_jabatan', ['id_sub' => $u['sub_jabatan2']])->row_array();
                                    $sub = $r['sub_jabatan'] . "&nbsp;";
                                }
                                echo $sub . $rs['jabatan'];

                                ?></td>
                            <td><img src="<?= base_url('assets/img/foto_peserta/' . $u['image']); ?>" width="92"></td>
                            <td><a class="badge badge-warning" href="#" data-target="#modalDetail<?= $u['id'] ?>" data-toggle="modal">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- End of Table -->


        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php foreach ($User as $u) : ?>
            <!-- Detail Modal -->
            <div class="modal fade" id="modalDetail<?= $u['id'] ?>" name="ModalEdit" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="newRoleModalLabel">Add New Role</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="card mb-3">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/img/foto_peserta/') . $u['image'] ?>" class="card-img mb-3" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <ul class="list-group">
                                            <?php
                                            $sub1 = '';
                                            $sub2 = '';

                                            $rs = $this->db->get_where('jabatan', ['id_jabatan' => $u['pilihan1']]);
                                            $pil1 = $rs->row_array();

                                            if ($u['sub_jabatan1'] > 0) {
                                                $query = $this->db->get_where('sub_jabatan', ['id_sub' => $u['sub_jabatan1']])->row_array();
                                                $sub1 = $query['sub_jabatan'] . "&nbsp;";
                                            }

                                            $res = $this->db->get_where('jabatan', ['id_jabatan' => $u['pilihan2']]);
                                            $pil2 = $res->row_array();

                                            if ($u['sub_jabatan2'] > 0) {
                                                $query = $this->db->get_where('sub_jabatan', ['id_sub' => $u['sub_jabatan2']])->row_array();
                                                $sub2 = $query['sub_jabatan'] . "&nbsp;";
                                            }
                                            ?>
                                            <li class="list-group-item">Nama : <?= $u['name']; ?></li>
                                            <li class="list-group-item">Kelas : <?= $u['kelas']; ?></li>
                                            <li class="list-group-item">Tempat Tanggal Lahir : <?= $u['ttl']; ?></li>
                                            <li class="list-group-item">Alamat : <?= $u['alamat']; ?></li>
                                            <li class="list-group-item">No Hp : <?= $u['no_hp']; ?></li>
                                            <li class="list-group-item">Email : <?= $u['email']; ?></li>
                                            <li class="list-group-item">Pekerjaan Ortu : <?= $u['p_ortu']; ?></li>
                                            <li class="list-group-item">No Ortu : <?= $u['no_ortu']; ?></li>
                                            <li class="list-group-item">Pengalaman ORG : <?= $u['pengalaman']; ?></li>
                                            <li class="list-group-item">Prestasi : <?= $u['prestasi']; ?></li>
                                            <li class="list-group-item">Pilihan 1 : <?= $sub1 . $pil1['jabatan'] ?></li>
                                            <li class="list-group-item">Pilihan 2 : <?= $sub2 . $pil2['jabatan'] ?></li>
                                            <li class="list-group-item">Kode Unik : <p class="badge badge-info mb-0"><?= $u['unique_code'] ?></p>
                                            </li>
                                            <?php if ($u['is_active'] == 1) : ?>
                                                <li class="list-group-item list-group-item-danger">Keterangan : <b>Tidak Lolos</b></li>
                                            <?php elseif ($u['is_active'] == 2) : ?>
                                                <li class="list-group-item list-group-item-success">Keterangan : <b>Lolos</b></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Of Modal -->
        <?php endforeach; ?>