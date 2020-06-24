<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pengaturan Surat | Dinkes Melawi</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
    <link rel="stylesheet" href="css/datepicker/bootstrap-datepicker3.standalone.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.php -->
      <?php include "partials/_navbar.php" ?>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.php -->
        <?php include "partials/_sidebar.php" ?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-settings"></i>
                </span> Pengaturan Surat / Prioritas Surat / Tambah Label</span></h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h2>Pengaturan Label</h2>
                        <form class="forms-sample mt-4">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="prioritas-surat">Prioritas Surat</label>
                                  <input type="text" class="form-control" name="type" id="prioritas-surat" placeholder="Prioritas Surat">
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                  <label for="kode-label">Kode</label>
                                  <input type="text" class="form-control" name="code" id="kode-label" name="kode-surat" placeholder="Kode Label">
                                </div>
                              </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="warna">Warna Kode</label>
                                        <input type="color" class="form-control p-0" name="color" id="warna" name="warna" placeholder="Warna">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="warna">Preview</label><br>
                                        <label id="preview" class="badge text-white mt-2">Menunggu</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-gradient-primary mr-2">Simpan Label</button>
                                <a class="btn btn-light" href="setting-prioritas-surat.php">Cancel</a>
                            </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.php -->
          <?php include "partials/_footer.php" ?>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="js/chartjs/Chart.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/dashboard.js"></script>
    <script src="js/todolist.js"></script>
    <script src="js/file-upload.js"></script>
    <!-- End custom js for this page -->
    <!-- table filter -->
    <!-- <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
      $(document).ready(function() {
        $('#dataTable').DataTable();
      });
    </script> -->
    <!-- End table filter -->
    <!-- preview     -->
    <script>
        $('body').on('change', 'input[name="color"]', function() {
            bgcolor = $('#warna').val();
            $('#preview').css("background-color",bgcolor);
        });
        $('body').on('change', 'input[name="code"]', function() {
            kode = $('#kode-surat').val();
            $('#preview').html(kode)
        });
    </script>
    <!-- End preview     -->
  </body>
</html>