<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pengaturan Jabatan | Dinkes Melawi</title>
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
                  <i class="mdi mdi-account-settings"></i>
                </span> Pengaturan Jabatan / Departemen </span></h3>
                <span><a class="btn btn-secondary p-2" href="setting-departemen-tambah.php">+ Tambah</a></span>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Daftar Departemen</h4>
                      <div class="table-responsive p-1">
                        <table id="dataTable" class="table table-hover">
                          <thead>
                            <tr>
                              <th> No </th>
                              <th> Departemen </th>
                              <th> Aksi </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td> 1 </td>
                              <td> Kepala Dinas </td>
                              <td>
                                  <button type="button" class="btn btn-info p-2" onclick="window.location.href='setting-departemen-tambah.php'"><i class="mdi mdi-border-color menu-icon"></i></button>
                                  <button type="button" class="btn btn-danger p-2"><i class="mdi mdi-delete menu-icon"></i></button>
                              </td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td> IPTEK </td>
                                <td>
                                    <button type="button" class="btn btn-info p-2" onclick="window.location.href='setting-departemen-tambah.php'"><i class="mdi mdi-border-color menu-icon"></i></button>
                                    <button type="button" class="btn btn-danger p-2"><i class="mdi mdi-delete menu-icon"></i></button>
                                </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.php -->
          <?php include "partials/_navbar.php" ?>
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
  </body>
</html>