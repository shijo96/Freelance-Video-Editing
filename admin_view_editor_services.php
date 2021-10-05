<?php include 'admin_view_header.php'; 
extract($_GET);

?>


<div class="container" style="padding: 2em;">


<form action="" method="post">

<table  class="table" style="width: 600px;">
    <h1>Service Details</h1><br>
    <tr>
        <th>Sl No</th>
        <th>Category Name</th>
        <th>Service Name</th>
      
    </tr>

    <?php 
        $q1="SELECT * FROM `myservice` INNER JOIN `service` USING(`service_id`) INNER JOIN `category` USING(`category_id`) WHERE `editor_id`='$editor_id'";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['category_name']; ?></td>
                    <td><?php echo $row['service']; ?></td>
                   
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>

</div>

<?php include 'footer.php'; ?>