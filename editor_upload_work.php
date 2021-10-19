<?php include 'editor_header.php'; 
extract($_GET);

if (isset($_POST['upload'])) 
{
	extract($_POST);
	$dir = "videos/";
	$file = basename($_FILES['vdo']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("video_").".".$file_type;

	if ($file_type == "mp4" OR $file_type=="MP4" ) {



		if(move_uploaded_file($_FILES['vdo']['tmp_name'], $target))
		{



    $q="INSERT INTO `uploadworks` VALUES(NULL,'$request_id','$target',CURDATE())";
    insert($q);
	alert("added");
	return redirect("editor_upload_work.php?request_id=$request_id");	

}
		else
		{
			echo "file uploading error occured";
		}
	}
	else
	{
		echo "invalid file format, file format =". $file_type;
		echo "error";
	}


}

if (isset($_POST['up_upload'])) 
{
	extract($_POST);
    extract($_GET);
    echo $request_id=$request_id;
	$dir = "videos/";
	$file = basename($_FILES['vdo']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("video_").".".$file_type;

	if ($file_type == "mp4" OR $file_type=="MP4" ) {



		if(move_uploaded_file($_FILES['vdo']['tmp_name'], $target))
		{



    $qx="UPDATE `uploadworks` SET `uploadedfile`='$target',`date`=CURDATE() WHERE `uploadwork_id`='$uploadwork_id'";
    update($qx);
	alert("Updated");
	return redirect("editor_upload_work.php?request_id=$request_id");	

}
		else
		{
			echo "file uploading error occured";
		}
	}
	else
	{
		echo "invalid file format, file format =". $file_type;
		echo "error";
	}


}



$q1="SELECT * FROM `uploadworks` WHERE `request_id`='$request_id'";
$res=select($q1);


?>



<?php 

if(isset($_GET['uploadwork_id'])){ ?>

    <form action="" method="post" style="padding-left: 5em;padding-top: 8em;" enctype="multipart/form-data">
    <h1 style="color: #fff;">Update Work</h1>
    <table class="table" style="width: 500px; color: #fff;">
        <tr>
            <th>Video</th>
            <td><input type="file" class="form-control" required name="vdo" id=""></td>
        </tr>
       
        <tr>
            <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="UPDATE" name="up_upload"></td>
        </tr>
    </table>
    </form>
        
    <?php }
    else{

  

if(sizeof($res)>0) { ?>


<form action="" method="post" style="padding-left: 5em;padding-top: 8em;"  enctype="multipart/form-data">
<h1 style="color: #fff;"> Work Details</h1>
<table class="table" style="width: 500px; color: #fff; ">
    <tr>
        <td>Date : <?php  echo $res[0]['date']; ?></td>
        <td><a class="btn btn-warning btn-sm" href="?request_id=<?php echo $request_id; ?>&uploadwork_id=<?php echo $res[0]['uploadwork_id']; ?>">Update File</a></td>
</tr>
<tr>
        <td>
            <video width="320" height="240" controls>
                <source src="<?php echo $res[0]['uploadedfile']; ?>" type="video/mp4">
            </video>
        </td>
    </tr>
    
 
</table>
</form>

<?php }
else{ ?>

<form action="" method="post" style="padding-left: 5em;padding-top: 8em;" enctype="multipart/form-data">
<h1 style="color: #fff;">Upload Work</h1>
<table class="table" style="width: 500px; color: #fff;">
    <tr>
        <th>Video</th>
        <td><input type="file" class="form-control" required name="vdo" id=""></td>
    </tr>
   
    <tr>
        <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="SEND" name="upload"></td>
    </tr>
</table>
</form>
<?php

}
    }

?>

</section>



<?php include 'footer.php'; ?>