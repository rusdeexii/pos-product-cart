<?php 
include('condb.php') ;

$query = "SELECT s.sid ,s.img_user, s.s_fname , s.s_lname  , s.s_tel , u.a_id  FROM salesperson s , users u WHERE u.a_type = 1 AND s.a_id = u.a_id ORDER BY s.sid ASC" ; 
$result = mysqli_query($con , $query) ;

echo '<table class="table">' ;
echo "<tr>
      <td width='10%'>รหัส</td>
      <td width=20%>รูปภาพ</td>
      <td width=16%>ชื่อแอดมิน</td>
      <td width=20%>นามสกุลแอดมิน</td>
      <td width=18%>เบอร์โทรแอดมิน</td>
      <td width=18%>รหัสผู้ใช้</td>
      <td width=5%>แก้ไข</td>
      <td width=5%>ลบ</td>
    </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row["sid"] . "</td> ";
        echo "<td align=center>"."<img src='p_img/".$row["img_user"]."' width='100'>"."</td>";
        echo "<td>" . $row["s_fname"] . "</td> ";
        echo "<td>" . $row["s_lname"] . "</td> ";
        echo "<td>" . $row["s_tel"] . "</td> ";
        echo "<td>" . $row["a_id"] . "</td> ";
        echo "<td><a href='admin_form_edit.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";
        echo "<td><a href='admin_del_db.php?ID=$row[0]' onclick=\"return confirm('คุณต้องการลบแอดมินคนนี้ใช่ไหม? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
        echo "</tr>";
    
    }
    echo "</table>";
    mysqli_close($con);
?>