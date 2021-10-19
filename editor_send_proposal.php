<?php include 'editor_header.php'; 
extract($_GET);

if(isset($_POST['prop'])){
    extract($_POST);

    $q="INSERT INTO `proposal` VALUES(NULL,'$request_id','$amount','$date','pending')";
    insert($q);
    alert("Successfully Added..");
    $qu="UPDATE `request` SET `status`='Proposal Send' WHERE `request_id`='$request_id'";
    update($qu);
    return redirect("editor_send_proposal.php?request_id=$request_id");
}

$q1="SELECT * FROM `proposal` WHERE `request_id`='$request_id'";
$res=select($q1);


?>



<?php 

if(sizeof($res)>0) { ?>


<form action="" method="post" style="padding-left: 5em;padding-top: 8em;">
<h1 style="color: #fff;"> Proposal Details</h1>
<table class="table" style="width: 500px; color: #fff; ">
    <tr>
        <th>Amount</th>
        <td><input type="text" class="form-control" readonly name="amount" id="" value="<?php echo $res[0]['amount']; ?>"></td>
    </tr>
    <tr>
        <th>Date</th>
        <td><input type="date" class="form-control" readonly name="date" id="" value="<?php  echo $res[0]['date']; ?>"></td>
    </tr>
</table>
</form>

<?php }
else{ ?>

<form action="" method="post" style="padding-left: 5em;padding-top: 8em;">
<h1 style="color: #fff;">Send Proposal</h1>
<table class="table" style="width: 500px; color: #fff;">
    <tr>
        <th>Amount</th>
        <td><input type="text" class="form-control" name="amount" id="" ></td>
    </tr>
    <tr>
        <th>Date</th>
        <td><input type="date" class="form-control" name="date" id="" ></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="SEND" name="prop"></td>
    </tr>
</table>
</form>
<?php

} ?>
</section>



<?php include 'footer.php'; ?>