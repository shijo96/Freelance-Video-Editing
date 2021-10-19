<?php include 'public_header.php'; 
extract($_GET);
if(isset($_POST['enq'])){
    extract($_POST);

    $q="INSERT INTO `enquiry` VALUES(NULL,'$editor_id','$question','Pending',curdate())";
    insert($q);
    alert("Successfully Send..");
    return redirect("public_send_enquiry.php?editor_id=$editor_id");
}



?>

<form action="" method="post" style="padding-left: 5em;padding-top: 3em;">
<h1 style="color: #fff;">Enquiry</h1>
<table class="table" style="width: 500px; color: #fff;">
    <tr>
        <th>Question</th>
        <td><textarea name="question" id="" required class="form-control" cols="30" rows="5"></textarea></td>
       
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="SEND" name="enq"></td>
    </tr>
</table>
</form>
</section>

<div class="container" style="padding: 2em;">

<table class="table" style="width: 500px;">
    <h1>Enquiry Details</h1> <br>
    

    <?php 
        $q1="SELECT * FROM `enquiry` WHERE `editor_id`='$editor_id'";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <th>Q : <?php echo $row['enquiry']; ?></th>
                </tr>
                <tr>
                    <td>A : <?php echo $row['reply']; ?></td>
                </tr>
                <tr>
                    <td>Date : <?php echo $row['date']; ?></td>
                    
                </tr>
                <tr>
                    <td><hr style="border: 1px solid red;"></td>
                </tr>
               
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</div>




<?php include 'footer.php'; ?>