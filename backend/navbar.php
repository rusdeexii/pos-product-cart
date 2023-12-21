<?php include"condb.php" ?>
<link href="css/style.css" rel="stylesheet">
<body>


  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="p_img/usertest.jpg" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"> <?php echo $_SESSION["a_name"];?></h1>
        
        </div><br>
        </div>
        <li class="text-center"><a href="cart.php" ><img src="p_img/cart.jpg" width="40" higth="30" style="margin-right:40px;" ; ></a></li>
      

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="index.php" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>หน้าหลัก</span></a></li>
          <li><a href="show_product.php" class="nav-link scrollto active"><i class="bx bx-user"></i> <span>ซื้อสินค้า</span></a></li>
          <li><a href="admin.php" class="nav-link scrollto active" ><i class="bx bx-user"></i> <span>จัดการผู้ดูแลระบบ</span></a></li>
          <li><a href="member.php" class="nav-link scrollto active"><i class="bx bx-file-blank"></i> <span>จัดการลูกค้า</span></a></li>
          <li><a href="type.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>จัดการประเภทสินค้า</span></a></li>
          <li><a href="product.php" class="nav-link scrollto active"><i class="bx bx-book-content"></i> <span>จัดการสินค้า</span></a></li>
          <li><a href="../logout.php" class="nav-link scrollto active"><i class="bx bx-book-content" onclick= "return confirm('คุณต้องการออกจากระบบหรือไม่???')"></i><span><img class="user " src="https://cdn-icons-png.flaticon.com/512/4400/4400828.png" height="30px" width="30px"  style="margin-right:10px;" >ออกจากระบบ</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; <strong>242 Software <span>Business</span></strong>
      </div>
</footer>
