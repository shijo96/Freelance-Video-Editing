<?php include 'editor_view_header.php'; 

if(isset($_GET['did'])){
    extract($_GET);

    $qw="DELETE FROM `myservice` WHERE `myservice_id`='$did'";
    delete($qw);
    alert("Successfully Removed");
    return redirect("editor_view_my_services.php");
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
        $q1="SELECT * FROM  `service` INNER JOIN `category` USING(`category_id`) INNER JOIN `myservice` USING(`service_id`) WHERE `editor_id`='$eid'";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['service']; ?></td>
                    <td><a class="btn btn-danger btn-sm" href="?did=<?php echo $row['myservice_id'] ?>">Remove</a>
                       
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</div>



<?php include 'footer.php'; ?>