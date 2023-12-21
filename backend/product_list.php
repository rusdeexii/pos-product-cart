<?php
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง 
$query = "
SELECT p.p_id, t.p_type_name, p.p_name,p.p_price,p.p_img, p.qty_onhand  FROM product as p 
INNER JOIN product_type  as t ON p.p_type_id=t.p_type_id 
ORDER BY p.p_id ASC" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

echo  ' <table class="table">';
  //หัวข้อตาราง
    echo "<tr>
      <td width='5%'>รหัสสินค้า</td>
      <td width=25%>ประเภทสินค้า</td>
      <td width=30%>ชื่อสินค้า</td>
      <td width=25%>รูปภาพ</td>
      <td width=25%>ราคา</td>
      <td width=25%>จำนวนในคลัง</td>
      <td width=5%>แก้ไข</td>
      <td width=5%>ลบ</td>
    </tr>";
  while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
    echo "<td>" .$row["p_id"] .  "</td> ";
    echo "<td>" .$row["p_type_name"] .  "</td> ";
    echo "<td>" .$row["p_name"] .  "</td> ";
    echo "<td align=center>"."<img src='p_img/".$row["p_img"]."' width='100'>"."</td>";
    echo "<td>" .$row["p_price"] .  "</td> ";
    echo "<td>" .$row["qty_onhand"] .  "</td> ";
    //แก้ไขข้อมูล
    echo "<td><a href='product_form_edit.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    
    //ลบข้อมูล
    echo "<td><a href='product_del_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบสินค้านี้หรือไม่? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>