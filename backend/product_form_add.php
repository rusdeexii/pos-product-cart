<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
include('h.php');
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM product_type ORDER BY p_type_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
?>
<div class="container">
  <div class="row">
      <form  name="addproduct" action="product_form_add_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
      <div class="form-group">
          <div class="col-sm-9">
            <p> รหัสสินค้า</p>
            <input type="text"  name="p_id" class="form-control" required placeholder="รหัสสินค้า" />
          </div>
        </div>
        <div class="form-group"> 
      
      <div class="form-group">
          <div class="col-sm-9">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" required placeholder="ชื่อสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-8">
            <p> ประเภทสินค้า </p>
            <select name="p_type_id" class="form-select form-select-sm" required>
              <option value="p_type_id">ประเภทสินค้า</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["p_type_id"];?>">
                <?php echo $results["p_type_name"]; ?>
              </option>
              <?php } ?>
            </select>
          </div>
        </div>
       
        <div class="form-group">
          <div class="col-sm-9">
            <p> ราคาสินค้า</p>
            <input type="text"  name="p_price" class="form-control" required placeholder="ราคาสินค้า" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-9">
            <p> จำนวนในคลัง</p>
            <input type="text"  name="qty_onhand" class="form-control" required placeholder="จำนวนในคลัง" />
          </div>
        </div>


        <div class="form-group">
          <div class="col-sm-12">
            <p> ภาพสินค้า </p>
            <input type="file" name="p_img" id="p_img" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" name="btnadd"> บันทึก </button>
            
          </div>
        </div>
      </form>
    </div>
  </div>