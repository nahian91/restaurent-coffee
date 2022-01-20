<?php include ('header.php'); ?>
<!-- Page Header Area Start -->
<section class="page-header">
   <div class="container">
      <div class="row">
         <div class="col-xl-12">
            <h2>Profile - Alex Carry</h2>
            <ul>
               <li><a href="">Home</a> &nbsp;/</li>
               <li>Profile - Alex Carry</li>
            </ul>
         </div>
      </div>
   </div>
</section>
<!-- Page Header Area End -->
<!-- Menu Area Start -->
<section class="menu-area pt-100 pb-100">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <div class="account">
               <ul class="list-group">
                  <li class="list-group-item"><a href="profile.php">Dashboard</a></li>
                  <li class="list-group-item"><a href="orders.php">Orders</a></li>
                  <li class="list-group-item"><a href="account-details.php">Account Details</a></li>
                  <li class="list-group-item"><a href="">Logout</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-8">
            <div class="account-content">
               <h5>Orderes</h5>
               <table class="table table-bordered">
                  <tr>
                     <th>ID</th>
                     <th>Date</th>
                     <th>Status</th>
                     <th>Total</th>
                     <th>Action</th>
                  </tr>
                  <tr>
                     <td>123</td>
                     <td>17 Jan 2022</td>
                     <td>Cancelled</td>
                     <td><b>$170.00</b> for 6 items </td>
                     <td><a href="order-details.php" class="text-white btn btn-primary">View</a></td>
                  </tr>
                  <tr>
                     <td>123</td>
                     <td>17 Jan 2022</td>
                     <td>Pending</td>
                     <td><b>$170.00</b> for 6 items </td>
                     <td><a href="order-details.php" class="text-white btn btn-primary">View</a></td>
                  </tr>
                  <tr>
                     <td>123</td>
                     <td>17 Jan 2022</td>
                     <td>Completed</td>
                     <td><b>$170.00</b> for 6 items </td>
                     <td><a href="order-details.php" class="text-white btn btn-primary">View</a></td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Menu Area End -->
<?php include('footer.php');?>
