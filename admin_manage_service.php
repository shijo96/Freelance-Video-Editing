<?php include 'admin_header.php'; 

if(isset($_POST['cat'])){
    extract($_POST);

    $q="INSERT INTO `service` VALUES(NULL,'$cat','$service_n')";
    insert($q);
    alert("Successfully Added..");
}

if(isset($_GET['did'])){
    extract($_GET);
    $qd="DELETE FROM `service` WHERE `service_id`='$did'";
    delete($qd);
    alert("Successfully Removed..");
    return redirect("admin_manage_service.php");
}

?>

<form action="" method="post">
<h1>Manage Service</h1>
<table>
    <tr>
        <th>Category Name</th>
        <td>
            <select name="cat" id="">
                <option value="">-- Choose --</option>
                <?php 
                    $q1="SELECT * FROM `category`";
                    $res=select($q1);
                    foreach($res as $row){  ?>
                        <option value="<?php echo $row['category_id'] ?>"><?php echo $row['category_name'] ?></option>
                <?php    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <th>Service Name</th>
        <td><input type="text" class="form-control" name="service_n" id=""></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" value="ADD" name="service"></td>
    </tr>
</table>

<table>
    <h1>Service Details</h1>
    <tr>
        <th>Sl No</th>
        <th>Category Name</th>
        <th>Service Name</th>
    </tr>

    <?php 
        $q1="SELECT * FROM  `service` INNER JOIN `category` USING(`category_id`)";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['service']; ?></td>
                    <td><a href="?did=<?php echo $row['service_id'] ?>">Remove</a></td>
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>


<?php include 'footer.php'; ?>