<?php include 'admin_header.php'; 

if(isset($_POST['cat'])){
    extract($_POST);

    $q="INSERT INTO `category` VALUES(NULL,'$category')";
    insert($q);
    alert("Successfully Added..");
}

if(isset($_GET['did'])){
    extract($_GET);
    $qd="DELETE FROM `category` WHERE `category_id`='$did'";
    delete($qd);
    alert("Successfully Removed..");
    return redirect("admin_manage_category.php");
}

?>

<form action="" method="post" style="padding-left: 5em;padding-top: 8em;">
<h1 style="color: #fff;">Manage Category</h1>
<table class="table" style="width: 500px; color: #fff;">
    <tr>
        <th>Category Name</th>
        <td><input type="text" required class="form-control" name="category" id=""></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="ADD" name="cat"></td>
    </tr>
</table>
</form>
</section>


<div class="container" style="padding: 2em;">

<table  class="table" style="width: 500px;">
    <h1>Category Details</h1><br>
    
    <tr>
        <th>Sl No</th>
        <th>Category Name</th>
    </tr>

    <?php 
        $q1="SELECT * FROM `category`";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><a class="btn btn-danger btn-sm" href="?did=<?php echo $row['category_id'] ?>">Remove</a></td>
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>


</div>

<?php include 'footer.php'; ?>