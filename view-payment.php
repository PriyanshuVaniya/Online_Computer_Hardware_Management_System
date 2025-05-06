<?php
session_start();
require './class/atclass.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Computer Hub</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
</head>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php
    include("sidebar.php")
    ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php
      include("header.php")
      ?>
       <!--  Header End -->
       <div class="container-fluid">
        <div class="container-fluid">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title fw-semibold mb-4">VIEW PAYMENT</h5>
              <div class="card">
                <div class="card-body">
    <div class="">
    <table border="3" text-align="center" class="table table-hover" cellpadding="10" cellspacing="3">
      <tr>
        <th>PAYMENT ID</th>
        <th>ORDER ID</th>
        <th>PAYMENT DATE-TIME</th>
        <th>AMOUNT</th>
        <th>PAYMENT METHOD</th>
        <th>PAYMENT STATUS</th>
        <th colspan="2" style="text-align:center">ACTION</th>
      </tr>
      <script>
          function deletecheck(){
            return confirm("Are You Sure?")
          }
        </script>
        <?php
        $i=0;
        if(isset($_GET['did']))
        {
          $did = $_GET['did'];
          $dq = mysqli_query($connection,"delete from tbl_payment where payment_id ='{$did}'");
          if($dq)
          {
            echo "<script>alert('Record Deleted');</script>";
          }
        }
        $q = mysqli_query($connection,"SELECT * FROM tbl_payment");
        while($row=mysqli_fetch_array($q)){
        ?>
        <tr align="center" >
            <td><?php echo $row["payment_id"];?></td>
            <td><?php echo $row["order_id"];?></td>
            <td><?php echo $row["payment_date_time"];?></td>
            <td><?php echo $row["amount"];?></td>
            <td><?php echo $row["payment_method"];?></td>
            <td><?php echo $row["payment_status"];?></td>
            <!--<td><?php echo $row["image"];?></td>-->
            <td><a class="btn btn-primary w-1 py-1 fs-3 mb-2 rounded-2" href="edit-product.php?payment_id=<?php echo $row["payment_id"]; ?>">Edit</a></td>
            <td><a class="btn btn-primary w-1 py-1 fs-3 mb-2 rounded-2" href="view-product.php?did=<?php echo $row["payment_id"]; ?>"onclick='return deletecheck();'>Delete</a></td>
        </tr>
        <?php $i++; } ?>
    </table>
    </div>
    <?php 
       ?>
       </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
       <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>