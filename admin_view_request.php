<?php include 'admin_view_header.php'; 

?>

<div class="container" style="padding: 2em;">


<form action="" method="post">

<table  class="table" style="width: 1200px;">
    <h1>Request Details</h1><br>
    <tr>
        <th>Sl No</th>
        <th>Client Name</th>
        <th>Phone</th>
        <th>Editor Name</th>
        <th>Phone</th>
        <th>Category</th>
        <th>Service</th>
        <th>Video</th>
        <th>Details</th>
        <th>Date</th>
        <th>Status</th>
    </tr>

    <?php 
         $q1="SELECT *,CONCAT(`editor`.`fname`,' ',`editor`.`lname`) AS ename,`editor`.`phone` AS ephone,CONCAT(`client`.`fname`,' ',`client`.`lname`) AS cname,`client`.`phone` AS cphone FROM `request` INNER JOIN `client` ON `client_id`=`customer_id` INNER JOIN `myservice` USING(`myservice_id`) INNER JOIN `service` USING(`service_id`) INNER JOIN `category` USING(`category_id`) INNER JOIN `editor` USING(`editor_id`)";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['cname']; ?></td>
                    <td><?php echo $row['cphone']; ?></td>
                    <td><?php echo $row['ename']; ?></td>
                    <td><?php echo $row['ephone']; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['service']; ?></td>
                    <td><a style="color: red;" href="<?php echo $row['video']; ?>">Click To Play</a></td>
                    <td><?php echo $row['details']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <?php 
                        if($row['status']=="Paid"){ ?>
                                 <td><a class="btn btn-primary btn-sm" href="admin_view_uploaded_works.php?request_id=<?php echo $row['request_id']; ?>">Works</a></td>
                    <?php    }

                    ?>
                    
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>
</div>
<?php include 'footer.php'; ?>