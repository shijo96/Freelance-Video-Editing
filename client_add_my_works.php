<?php include 'client_header.php'; 
extract($_GET);

if(isset($_POST[''])){
    extract($_POST);

    
    alert("Successfully Added..");
}

if (isset($_POST['work'])) 
{
	extract($_POST);
	$dir = "videos/";
	$file = basename($_FILES['video']['name']);
	$file_type = strtolower(pathinfo($file, PATHINFO_EXTENSION));
	$target = $dir.uniqid("video_").".".$file_type;

	if ($file_type == "mp4" OR $file_type=="MP4" ) {



		if(move_uploaded_file($_FILES['video']['tmp_name'], $target))
		{



    $q="INSERT INTO `request` VALUES(NULL,'$cid','$myservice_id','$title','$target','$details','$date','pending')";
    insert($q);
	alert("added");
	return redirect("client_view_request.php");	

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



?>

<form action="" method="post" style="padding-left: 5em;padding-top: 8em;" enctype="multipart/form-data">
<h1 style="color: #fff;">Add My Works</h1>
<table class="table" style="width: 500px; color: #fff;">
    <tr>
        <th>Title</th>
        <td><input type="text" class="form-control" name="title" id=""></td>
    </tr>
    <tr>
        <th>Video</th>
        <td><input type="file" class="form-control" name="video" id=""></td>
    </tr>
    <tr>
        <th>Details</th>
        <td><textarea name="details" class="form-control" id="" ></textarea></td>
    </tr>
    <tr>
        <th>Date</th>
        <td><input type="date" class="form-control" name="date" id=""></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="ADD" name="work"></td>
    </tr>
</table>
</form>
</section>


<?php include 'footer.php'; ?>