<?php
include('condb.php');

$query = "SELECT * FROM product_type " or die("Error : " . mysqli_error());
$result = mysqli_query($con, $query);

echo ' <table class="table">';

echo "<tr>
      <td width='15%'>รหัสประเภทสินค้า</td>
      <td width=25%>ชื่อประเภทประเภทสินค้า</td>
      <td width=5%>แก้ไข</td>
      <td width=5%>ลบ</td>
    </tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["p_type_id"] . "</td> ";
    echo "<td>" . $row["p_type_name"] . "</td> ";
    echo "<td><a href='type_form_edit.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    echo "<td><a href='type_del_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบประเภทสินค้านี้ใช่ไหม? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";

}
echo "</table>";
mysqli_close($con);
?>