<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tambah Surat Keluar | Dinkes Melawi</title>
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
                  <i class="mdi mdi-call-received"></i>
                </span> Tambah <span><b>Surat Keluar</b></span></h3>
            </div>
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h2>Informasi Surat Keluar</h2>
                        <form class="forms-sample mt-4">
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="nomor-surat">Nomor Surat</label>
                                  <input type="text" class="form-control" name="code" id="nomor-surat" placeholder="Nomor Surat">
                                </div>
                              </div>
                              <div class="col-md-8">
                                <div class="form-group">
                                  <label for="judul-surat">Judul Surat/Perihal</label>
                                  <input type="text" class="form-control" id="judul-surat" name="title" placeholder="Judul Surat">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label>Waktu Surat</label>
                              <div class="input-group date">
                                <input type="text" class="form-control datepicker" name="mail_created_at" placeholder="Waktu Surat" aria-label="Waktu Surat" aria-describedby="basic-addon2">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="judul-surat">Instansi</label>
                              <input type="text" class="form-control" id="instansi" name="origin" placeholder="Instansi">
                            </div>
                            <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Jenis Surat</label>
                                  <select name="mail_type_id" class="form-control">
                                      <option value="#">Permohonan</option>
                                      <option value="#">Undangan</option>
                                      <option value="#">Edaran</option>
                                      <option value="#">Pengantar</option>
                                  </select>
                              </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Sifat Surat</label>
                                  <select name="mail_reference_id" class="form-control">
                                      <option value="#">RH</option>
                                      <option value="#">BS</option>
                                  </select>
                              </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label>Prioritas Surat</label>
                                  <select name="mail_priority_id" class="form-control">
                                      <option value="#">Sangat Segera</option>
                                      <option value="#">Segera</option>
                                      <option value="#">Biasa</option>
                                  </select>
                              </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <label>Folder Surat</label>
                                <select name="mail_folder_id" class="form-control">
                                    <option value="#">Folder 1</option>
                                    <option value="#">Folder 2</option>
                                    <option value="#">Folder 3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                  <input type="text" class="form-control file-upload-info" disabled placeholder="Upload File">
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                                  </span>
                                </div>
                              </div>
                            <div class="form-group mt-4">
                                <button type="submit" class="btn btn-gradient-primary mr-2">Simpan Surat</button>
                                <a class="btn btn-light" href="index.php">Cancel</a>
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
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/file-upload.js"></script>
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
    <!-- date picker -->
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script>
      $(function(){
       $(".datepicker").datepicker({
           format: 'yyyy-mm-dd',
           autoclose: true,
           todayHighlight: true,
       });
      });
     </script>
  </body>
</html>