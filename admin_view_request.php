<?php include 'admin_header.php'; 

?>

<form action="" method="post">

<table>
    <h1>Request Details</h1>
    <tr>
        <th>Sl No</th>
        <th>Client Name</th>
        <th>Place</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Category</th>
        <th>Service</th>
        <th>Video</th>
        <th>Details</th>
        <th>Date</th>
        <th>Status</th>
    </tr>

    <?php 
        $q1="SELECT * FROM `request` INNER JOIN `client` ON  `client_id`=`customer_id` INNER JOIN `service` USING(`service_id`) INNER JOIN `category` USING(`category_id`) ";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['service']; ?></td>
                    <td><?php echo $row['video']; ?></td>
                    <td><?php echo $row['details']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <?php 
                        if($row['status']=="Finished"){ ?>
                                 <td><a href="admin_view_uploaded_works.php?request_id=<?php echo $row['request_id']; ?>">Works</a></td>
                    <?php    }

                    ?>
                    
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>

<?php include 'footer.php'; ?>