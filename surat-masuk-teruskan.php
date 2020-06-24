
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
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
          <div class="content-wrapper mt-5">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-book-multiple"></i>
                </span> Surat Masuk / Disposisi</span></h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <form class="forms-sample">
                          <h2>Informasi Surat</h2>
                          <table class="table">
                            <tr>
                                <td>Nomor Surat</td>
                                <td>:</td>
                                <td>18.5.1/UN32.17/TU/2020</td>
                            </tr>
                            <tr>
                                <td>Judul</td>
                                <td>:</td>
                                <td>Surat Peminjaman Tandu PMI</td>
                            </tr>
                            <tr>
                                <td>Instansi</td>
                                <td>:</td>
                                <td>Dinas Pemberdayaan Masyarakat Desa Kab. Melawi</td>
                            </tr>
                            <tr>
                                <td>Jenis Surat</td>
                                <td>:</td>
                                <td><label class="badge badge-info">Surat Permohonan</label></td>
                            </tr>
                            <tr>
                                <td>Sifat Surat</td>
                                <td>:</td>
                                <td><label class="badge badge-info">BSA</label></td>
                            </tr>
                            <tr>
                                <td>Prioritas Surat</td>
                                <td>:</td>
                                <td><label class="badge badge-danger">Segera</label></td>
                            </tr>
                            <tr>
                                <td>Surat Diterima</td>
                                <td>:</td>
                                <td> Jul 16, 2020 </td>
                            </tr>
                          </table>
                          <h2 class="mt-4">Catatan/Memo</h2>
                          <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" rows="10"></textarea>
                          </div>
                          <div class="form-group">
                            <h2 class="mt-5">Teruskan Surat</h2>
                              <ul class="ks-cboxtags p-0">
                                <li><input type="checkbox" id="checkboxOne" value="Kepala Dinas"><label for="checkboxOne">Kepala Dinas</label></li>
                                <li><input type="checkbox" id="checkboxTwo" value="Sekretaris Dinas"><label for="checkboxTwo">Sekretaris Dinas</label></li>
                                <li><input type="checkbox" id="checkboxThree" value="Kepala Bidang 1"><label for="checkboxThree">Kepala Bidang 1</label></li>
                                <li><input type="checkbox" id="checkboxFour" value="Kepala Bidang 2"><label for="checkboxFour">Kepala Bidang 2</label></li>
                                <li><input type="checkbox" id="checkboxFive" value="Kepala Bidang 3"><label for="checkboxFive">Kepala Bidang 3</label></li>
                              </ul>
                            <div class="mt-2">
                                <button type="submit" class="btn btn-gradient-primary mr-2">Disposisi Surat</button>
                                <a class="btn btn-light" href="surat-masuk.php">Cancel</a>
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