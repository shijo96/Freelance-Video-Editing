<?php include 'admin_header.php'; 

?>

<form action="" method="post">

<table>
    <h1>Client Details</h1>
    <tr>
        <th>Sl No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Place</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>

    <?php 
        $q1="SELECT * FROM `client` INNER JOIN `login` USING(`login_id`) ORDER BY `login_id` DESC";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>

<?php include 'footer.php'; ?>