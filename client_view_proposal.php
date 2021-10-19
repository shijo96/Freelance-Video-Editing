<?php include 'client_view_header.php'; 
extract($_GET);

if(isset($_GET['a_proposal_id'])){
    extract($_GET);
    $qa="UPDATE `proposal` SET `status`='Accepted' WHERE `proposal_id`='$a_proposal_id'";
    update($qa);
    $qu="UPDATE `request` SET `status`='Accepted' WHERE `request_id`='$request_id'";
    update($qu);
    alert("Propsal Acceped Successfully");
    return redirect("client_view_request.php");
}

if(isset($_GET['r_proposal_id'])){
    extract($_GET);
    $qa="UPDATE `proposal` SET `status`='Rejected' WHERE `proposal_id`='$r_proposal_id'";
    update($qa);
    $qu="UPDATE `request` SET `status`='Rejected' WHERE `request_id`='$request_id'";
    update($qu);
    alert("Propsal Rejected Successfully");
    return redirect("client_view_request.php");
}

?>
<div class="container" style="padding: 2em;">

<form action="" method="post">

<table  class="table" style="width: 800px;">
    <h1>Proposal Details</h1><br>
    <tr>
        <th>Amount</th>
        <th>Date</th>
        <th>Status</th>
        
    </tr>

    <?php 
        $q1="SELECT * FROM `proposal` WHERE `request_id`='$request_id'";
        $res=select($q1);
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <?php 
                        if($row['status']=="pending"){ ?>

                            <td><a class="btn btn-success btn-sm" href="?a_proposal_id=<?php echo $row['proposal_id']; ?>&request_id=<?php echo $request_id; ?>">Accept</a></td>
                            <td><a class="btn btn-danger btn-sm" href="?r_proposal_id=<?php echo $row['proposal_id']; ?>&request_id=<?php echo $request_id; ?>">Reject</a></td>
                   
                    <?php    }
                    ?>
                   
                   
                </tr>
               
    <?php 
 
       }
   

    ?>
</table>
</form>
</div>
<?php include 'footer.php'; ?>