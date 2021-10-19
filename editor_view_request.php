<?php include 'editor_view_header.php'; 

?>

<div class="container" style="padding: 2em;">


<form action="" method="post">

<table  class="table" style="width: 1100px;">
    <h1>Request Details</h1><br>
    <tr>
        <th>Sl No</th>
        <th>User Name</th>
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
         $q1="SELECT * FROM `request`  INNER JOIN `myservice` USING(`myservice_id`) INNER JOIN `service` USING(`service_id`) INNER JOIN `category` USING(`category_id`) INNER JOIN `client` ON `client_id`=`customer_id` WHERE `editor_id`='$eid'";
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
                    <td><a style="color: red;" href="<?php echo $row['video']; ?>">Click Me To Play</a></td>
                    <td><?php echo $row['details']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><a class="btn btn-primary btn-sm" href="editor_send_proposal.php?request_id=<?php echo $row['request_id']; ?>">Proposal</a></td>
                    <td><a class="btn btn-warning btn-sm" href="editor_chat_client.php?clid=<?php echo $row['login_id']; ?>">Chat</a></td>
                    <?php 
                        if($row['status']=="Paid"){ ?>
                            <td><a class="btn btn-success btn-sm" href="editor_upload_work.php?request_id=<?php echo $row['request_id']; ?>">Upload Work</a></td>
                    <?php }
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