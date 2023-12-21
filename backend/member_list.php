<?php
include('condb.php');

$query = "SELECT * FROM customer ORDER BY cust_id";
$result = mysqli_query($con, $query);

echo '<table class="table">';

echo "<tr>
      <td width='15%'>รหัสลูกค้า</td>
      <td width=45%>รูปภาพ</td>
      <td width=12%>ชื่อ</td>
      <td width=12%>นามสกุล</td>
      <td width=12%>ที่อยู่</td>
      <td width=12%>เบอร์โทร</td>
      <td width=12%>เพศ</td>
      <td width=12%>อีเมล</td>
      <td width=5%>แก้ไข</td>
      <td width=5%>ลบ</td>
    </tr>";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row["cust_id"] . "</td> ";
    echo "<td align=center>"."<img src='p_img/".$row["img_user"]."' width='100'>"."</td>";
    echo "<td>" . $row["cust_fname"] . "</td> ";
    echo "<td>" . $row["cust_lname"] . "</td> ";
    echo "<td>" . $row["cust_address"] . "</td> ";
    echo "<td>" . $row["cust_tel"] . "</td> ";
    echo "<td>" . $row["cust_sex"] . "</td> ";
    echo "<td>" . $row["cust_email"] . "</td> ";
    echo "<td><a href='member_form_edit.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
    echo "<td><a href='member_del_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบลูกค้าคนนี้ใช่ไหม? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>