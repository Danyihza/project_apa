        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          <a href="<?= base_url('admin/detail'); ?>" class="btn btn-primary">Lihat User</a>
          <br>
          <hr>
          <h1 class="h3 mb-4 text-gray-800">MPK</h1>
          <div class="row">

            
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($ketum > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <a href="https://www.google.com" class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ketua MPK</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ketum; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </a>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
            <?php  if ($waketum > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Wakil Ketua MPK</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $waketum; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sekm > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekretaris MPK</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sekm; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($benm > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bendahara MPK</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $benm; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($koxi > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Koordinator Kelas XI</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $koxi; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($kox > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Koordinator Kelas X</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $kox; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <hr>

          <h1 class="h3 mb-4 text-gray-800">OSIS</h1>
          <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($ketos > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ketua OSIS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $ketos; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($waketos > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Wakil Ketua OSIS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $waketos; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sekos > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekretaris OSIS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sekos; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($benos > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Bendahara OSIS</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $benos; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek1 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Ketaqwaan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek1; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek2 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid BPL-LH</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek2; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek3 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Akademik</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek3; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek4 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Apresiasi dan Karya Seni</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek4; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek5 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Jasmani</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek5; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek6 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Jurnalistik</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek6; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek7 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Berbangsa</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek7; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek8 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Bela Negara</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek8; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek9 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Wirausaha</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek9; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <?php  if ($sek10 > 0) {
                # code...
                echo '<div class="card border-left-primary shadow h-100 py-2">';
              }else {
                # code...
                echo '<div class="card border-left-danger shadow h-100 py-2">';
              }
              ?>
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Sekbid Kerumahtanggaan</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $sek10; ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->