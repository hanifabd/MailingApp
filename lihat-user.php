<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Surat Masuk | Dinkes Melawi</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="css/materialdesignicons.min.css">
    <link rel="stylesheet" href="css/vendor.bundle.base.css">
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
                  <i class="mdi mdi-account-multiple"></i>
                </span> Lihat User </h3>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar User</h4>
                    <div class="table-responsive p-1">
                      <table id="dataTable" class="table table-hover">
                        <thead>
                          <tr>
                            <th> Pengguna </th>
                            <th> Jabatan </th>
                            <th> Akun </th>
                            <th> Kontak </th>
                            <th> Aksi </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="text-wrap"><h6>Bambang Rahardjo</h6></div>
                              <div>19620502 198903 1 018</div>
                            </td>
                            <td>
                                <div class="text-wrap"><h6>Kabid</h6></div>
                                <div>Bidang Iptek</div>
                            </td>
                            <td>
                                <div class="text-wrap"><h6>kabid@gmail.com</h6></div>
                                <div>bbg_rahardjo</div>
                            </td>
                            <td> 081234456678 </td>
                            <td>
                                <button type="button" class="btn btn-info p-2" onclick="window.location.href='lihat-user-edit.php'"><i class="mdi mdi-border-color menu-icon"></i></button>
                                <button type="button" class="btn btn-danger p-2"><i class="mdi mdi-delete menu-icon"></i></button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="text-wrap"><h6>Bambang Rahardjo</h6></div>
                              <div>19620502 198903 1 018</div>
                            </td>
                            <td>
                                <div class="text-wrap"><h6>Kabid</h6></div>
                                <div>Bidang Iptek</div>
                            </td>
                            <td>
                                <div class="text-wrap"><h6>kabid@gmail.com</h6></div>
                                <div>bbg_rahardjo</div>
                            </td>
                            <td> 081234456678 </td>
                            <td>
                                <button type="button" class="btn btn-info p-2" onclick="window.location.href='lihat-user-edit.php'"><i class="mdi mdi-border-color menu-icon"></i></button>
                                <button type="button" class="btn btn-danger p-2"><i class="mdi mdi-delete menu-icon"></i></button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="text-wrap"><h6>Bambang Rahardjo</h6></div>
                              <div>19620502 198903 1 018</div>
                            </td>
                            <td>
                                <div class="text-wrap"><h6>Kabid</h6></div>
                                <div>Bidang Iptek</div>
                            </td>
                            <td>
                                <div class="text-wrap"><h6>kabid@gmail.com</h6></div>
                                <div>bbg_rahardjo</div>
                            </td>
                            <td> 081234456678 </td>
                            <td>
                                <button type="button" class="btn btn-info p-2" onclick="window.location.href='lihat-user-edit.php'"><i class="mdi mdi-border-color menu-icon"></i></button>
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