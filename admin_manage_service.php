<?php include 'admin_header.php'; 

if(isset($_POST['service'])){
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

if(isset($_GET['uid'])){
    extract($_GET);
    $qd="SELECT * FROM `service` INNER JOIN `category` USING(`category_id`) WHERE `service_id`='$uid'";
    $rss=select($qd);
    
}

if(isset($_POST['uservice'])){
    extract($_POST);
    $q="UPDATE `service` SET `category_id`='$cat',`service`='$service_n' WHERE `service_id`='$uid'";
    update($q);
    alert("Successfully Updated..");
    return redirect("admin_manage_service.php");
}

?>



<?php 
    if(isset($_GET['uid'])){ ?>
<form action="" method="post" style="padding-left: 5em;padding-top: 8em;">

<h1 style="color: #fff;">Update Service</h1>
<table class="table" style="width: 500px; color: #fff;">
    <tr>
        <th>Category Name</th>
        <td>
            <select name="cat" id="" class="form-control">
                <option value="<?php echo  $rss[0]['category_id']; ?>"><?php echo  $rss[0]['category_name']; ?></option>
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
        <td><input type="text" class="form-control" required name="service_n" id="" value="<?php echo  $rss[0]['service']; ?>"></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" class="btn btn-warning" value="UPDATE" name="uservice"></td>
    </tr>
</table>
</form>
<?php

    }
    else{  ?>

<form style="padding-left: 5em;padding-top: 8em;">
<h1 style="color: #fff;">Manage Service</h1>
<table  class="table" style="width: 500px; color: #fff;">
    <tr>
        <th>Category Name</th>
        <td>
            <select name="cat" id="" class="form-control">
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
        <td><input type="text" class="form-control" required name="service_n" id=""></td>
    </tr>
    <tr>
        <td colspan="2" align="center"><input type="submit" class="btn btn-success" value="ADD" name="service"></td>
    </tr>
</table>
</form>
<?php
    }
    ?>


</section>


<div class="container" style="padding: 2em;">


<table class="table" style="width: 500px;">
    <h1>Service Details</h1> <br>
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
                    <td><a class="btn btn-danger btn-sm" href="?did=<?php echo $row['service_id'] ?>">Remove</a>
                        <a class="btn btn-warning btn-sm" href="?uid=<?php echo $row['service_id'] ?>">Edit</a></td>
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</div>



<?php include 'footer.php'; ?>