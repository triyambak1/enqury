<?php
include "db.php";

$query = "SELECT *  FROM enqury_form ";
echo '  <table>
<tr>
    <th>Name</th>
    <th>Father Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Collage</th>
    <th>course</th>
    <th>10 Percentage</th>
    <th>Inter Percentage </th>
    <th>Graduation Percentage </th>
    
    <th>Address</th>
    <th>select_cource</th>
    <th>Descriptions</th>
    <th>Date</th>
</tr>';

if ($result = $conn->query($query)) {

        while($row = $result->fetch_assoc())
        {?>
          
                <tr>
          <td> <?php echo $row['name'];?></td>
          <td> <?php   echo $row['father_name']; ?></td>
          <td> <?php  echo $row['email'];?></td>
          <td> <?php   echo $row['mobile']; ?></td>    
          <td> <?php echo $row['collage'];?></td>
          <td> <?php  echo $row['course'];?></td>
          <td> <?php   echo $row['perc']; ?></td>    
          <td> <?php echo $row['perc_inter'];?></td>
          <td> <?php  echo $row['perc_graduation'];?></td>
          
          <td> <?php   echo $row['addres']; ?></td>
          <td> <?php   echo $row['select_cource']; ?></td>
          <td> <?php   echo $row['descriptions']; ?></td>
          <td> <?php   echo $row['created']; ?></td>    
          <tr>
            
       <?php }
      echo '
      </tr>
      </table>'; 
    } 
?>