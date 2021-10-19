<?php include 'client_header.php'; 

if(isset($_POST['complaint'])){
    extract($_POST);

    $q="INSERT INTO `complaint` VALUES(NULL,'$cid','$comp','Pending',CURDATE())";
    insert($q);
    alert("Successfully Send..");
    return redirect("client_send_complaints.php");
}



?>

<form action="" method="post" style="padding-left: 5em;padding-top: 8em;">
<h1 style="color: #fff;">Send Complaint </h1>
<table class="table" style="width: 500px; color: #fff;">
    <tr>
        <th>Complaint</th>
        <td><textarea name="comp" id="" class="form-control" ></textarea></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="SEND" name="complaint"></td>
    </tr>
</table>
</form>
</section>


<div class="container" style="padding: 2em;">

<table  class="table" style="width: 500px;">
    <h1>Complaint Details</h1><br>
    
    <tr>
        <th>Sl No</th>
        <th>Complaint</th>
        <th>Reply</th>
        <th>Date</th>
    </tr>

    <?php 
        $q1="SELECT * FROM `complaint` WHERE `client_id`='$cid'";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['complaint']; ?></td>
                    <td><?php echo $row['reply']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>


</div>

<?php include 'footer.php'; ?>