<?php include 'editor_view_header.php'; 

if(isset($_GET['add_id'])){
    extract($_GET);
    $qq="SELECT * FROM `myservice` WHERE `service_id`='$add_id' AND `editor_id`='$eid'";
    $ress=select($qq);
    if(sizeof($ress)>0){
        alert("Service Already Added...");
        return redirect("editor_add_my_services.php");
    }
    else{
        $qa="INSERT INTO `myservice` VALUES(NULL,'$add_id','$eid')";
        insert($qa);
        alert("Service Added Successfully..");
        return redirect("editor_add_my_services.php");
    }
}

?>


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
                    <td><a class="btn btn-danger btn-sm" href="?add_id=<?php echo $row['service_id'] ?>">Add To Mine</a>
                       
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</div>



<?php include 'footer.php'; ?>