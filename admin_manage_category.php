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

<form action="" method="post">
<h1>Manage Category</h1>
<table>
    <tr>
        <th>Category Name</th>
        <td><input type="text" class="form-control" name="category" id=""></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" value="ADD" name="cat"></td>
    </tr>
</table>

<table>
    <h1>Category Details</h1>
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
                    <td><a href="?did=<?php echo $row['category_id'] ?>">Remove</a></td>
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>


<?php include 'footer.php'; ?>