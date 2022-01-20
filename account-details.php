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
               <form>
                  <div class="row">
                     <div class="col">
                        <input type="text" class="form-control" placeholder="First name">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" placeholder="Last name">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <input type="text" class="form-control" placeholder="Display Name">
                     </div>
                     <div class="col">
                        <input type="text" class="form-control" placeholder="Email Address">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col">
                        <textarea class="form-control" cols="30" rows="5" placeholder="Address Details"></textarea>
                     </div>
                  </div>
               </form>
               <br>  
               <h5>Password Changes</h5>
               <form>
                  <div class="row">
                     <div class="col">
                        <input type="password" class="form-control" placeholder="Password">
                     </div>
                     <div class="col">
                        <input type="password" class="form-control" placeholder="Confirm Password">
                     </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Save Changes</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Menu Area End -->
<?php include('footer.php');?>
