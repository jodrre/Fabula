<?php
require_once '../inc/header.php';
require_once '../classes/departments.class.php';
?>
<table>
<tr><th>Department Name</th></tr>
<?php 
$deptlist = listDepartments();
while ($row = $deptlist){
	echo "<tr><td>".row['dept_name']."</td></tr>";
}
?>
</table>