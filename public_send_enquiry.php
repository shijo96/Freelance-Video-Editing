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

<form action="" method="post">
<h1>Enquiry</h1>
<table>
    <tr>
        <th>Question</th>
        <td><input type="text" class="form-control" name="question" id=""></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" value="SEND" name="enq"></td>
    </tr>
</table>

<table>
    <h1>Enquiry Details</h1>
    

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
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>


<?php include 'footer.php'; ?>