        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <a href="<?= base_url('admin/detail'); ?>" class="btn btn-primary">Lihat Semua Pendaftar</a>
          <br>
          <hr>
          <div class="row">

            <?php
            $i = 0;
            foreach ($jabmpk as $m) : ?>
              <!-- Earnings (Monthly) Card Example -->
              <div class="col-xl-3 col-md-6 mb-4">
                <?php if ($mpk[$i] > 0) {
                  # code...
                  echo '<div class="card border-left-primary shadow h-100 py-2">';
                } else {
                  # code...
                  echo '<div class="card border-left-danger shadow h-100 py-2">';
                }
                ?>
                <a href="<?= base_url('admin/org/') . $m['id_jabatan']; ?>" class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><?= $m['jabatan']; ?></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $mpk[$i]; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </a>
              </div>
          </div>
        <?php
              $i++;
            endforeach ?>

        </div>