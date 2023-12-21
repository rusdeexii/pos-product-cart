<?php session_start();?>
<?php
include('h.php');
?>

<style type="text/css">
#btn{
width:30%;
}


</style>
<p style="background-image: url('img/cart.jpg');">
<div class="container" style="padding-top:250px">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" style="background-color:transparent">
      <h2 align="center">
      <div class="loginBox"> <img class="user " src="https://cdn-icons-png.flaticon.com/512/4661/4661334.png" height="100px" width="100px"><br>
      <span > </span>
      </h2>
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="a_user" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="a_pass" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="text-center ol-sm-12">
          <label>
                <input  type="checkbox" checked="checked" name="remember"> Remember me
               </label></div>
               <div class="text-center ol-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button></div>
              
          
      </form>
      </div>
          </div>
        </div>
    </div>
  </div>
</div>
</div>
