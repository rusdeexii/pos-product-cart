<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Miniproject</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
          <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>หน้าหลัก</span></a></li>
          <li><a href="show_product.php" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>ซื้อสินค้า</span></a></li>
          <li><a href="admin.php" class="nav-link scrollto active" ><i class="bx bx-user"></i> <span>จัดการผู้ดูแลระบบ</span></a></li>
          <li><a href="customer.php" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>จัดการลูกค้า</span></a></li>
          <li><a href="prodtype.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>จัดการประเภทสินค้า</span></a></li>
          <li><a href="product.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>จัดการสินค้า</span></a></li>
          
        
      </ul>
      
      <a href="cart.php" ><img src="img/cart.jpg" width="40" higth="30" style="margin-right:10px;" ; ></a>
      <img src="img/user.jpg" width="30" higth="30" style="margin-right:10px;" ; >
      <button  class="btn btn-outline-primary px-3 me-2">: <?php 
      if(isset($_SESSION["username"])){
        echo $_SESSION["username"];
      }
      ?></button>
      <a href="../logout.php" class="nav-link scrollto active"><i class="bx bx-book-content" onclick= "return confirm('คุณต้องการออกจากระบบหรือไม่???')"></i><span><img class="user " src="https://cdn-icons-png.flaticon.com/512/4400/4400828.png" height="30px" width="30px"  style="margin-right:10px;" >ออกจากระบบ</span></a>
      </div>     
    </div>
  </div>
</nav>