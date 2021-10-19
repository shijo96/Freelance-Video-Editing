<?php include 'client_view_header.php'; 


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
                    <td><a class="btn btn-danger btn-sm" href="client_view_editors.php?sid=<?php echo $row['service_id'] ?>">Editors</a></td>
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</div>



<?php include 'footer.php'; ?>