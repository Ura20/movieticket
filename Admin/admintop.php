<?php
require("header.php");
?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-clipboard-list"></i>
                  </div>
                  <div class="mr-5">Reservation</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="reservations.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-film"></i>
                  </div>
                  <div class="mr-5">Movies</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="movies.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-video"></i>
                  </div>
                  <div class="mr-5">Cinemas</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="cinemas.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3 ml-5">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-folder-open"></i>                  
                  </div>
                  <div class="mr-5">Categories</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="categories.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3 ml-5">
              <div class="card text-white bg-info o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-users"></i>                  
                  </div>
                  <div class="mr-5">Users</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="users.php">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header"><i class="fas fa-table"></i>Reservations</div>
            <div class="card-body">
              <form action="" method="post">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                          <th>Reserve ID</th>
                          <th>Name</th>
                          <th>Movie</th>
                          <th>Cinema</th>
                          <th>Quantity</th>
                          <th>Date</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                          <th>Reserve ID</th>
                          <th>Name</th>
                          <th>Movie</th>
                          <th>Cinema</th>
                          <th>Quantity</th>
                          <th>Date</th>
                          <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php
                        $result = $reserve->select();
                        if($result){
                          foreach($result as $key => $row){
                            $id = $row['reserve_id'];
                            echo "<tr>";
                            echo "<td>" . $row['reserve_id'] . "</td>";
                            echo "<td>" . $row['firstname'] . " " . $row['lastname'] . "</td>";
                            echo "<td>" . $row['movie_title'] . "</td>";
                            echo "<td>" . $row['cinema_name'] . "</td>";
                            echo "<td>" . $row['quantity'] . "</td>";
                            echo "<td>" . $row['schedule'] . "</td>";
                            echo "<td>
                            <a href='confirmreserve.php?id=$id' class='btn btn-sm btn-primary'>View</a>
                            </td>";
                            echo "</tr>";
                          }
                        }

                        else{
                          echo "<tr><td colspan='4' class='text-center'>No data available</td></tr>";
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
              </form>
            </div>
          </div>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>


    <script>
      $(function(){
        $('dataTable').DataTable({
          'paging'       : true,
          'lengthChange' : false,
          'serching'     : false,
          'ordering'     : true,
          'info'         : true,
          'autoWidth'    :false

        })
      })
    </script>

  </body>

</html>
