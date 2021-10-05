<?php include 'public_view_header.php'; 
extract($_GET);
?>

<div class="container" style="padding: 2em;">

<form action="" method="post">

<table class="table" style="width: 600px;">
    <h1>Work Details</h1>
    

    <?php 
        $q1="SELECT * FROM `uploadworks` INNER JOIN  `request` USING(`request_id`) INNER JOIN `myservice` USING(`myservice_id`) WHERE `editor_id`='$editor_id'";
        $res=select($q1);
        if(sizeof($res)>0){

        foreach($res as $row){ ?>
                <tr>
                    <td>
                        <video width="600" height="240" controls autoplay>
                            <source src="<?php echo $row['uploadedfile']; ?>" type="video/mp4">
                            <source src="<?php echo $row['uploadedfile']; ?>" type="video/ogg">
                            Your browser does not support the video tag.
                        </video>
                    </td>
                </tr>
                <tr>
                    <td><?php echo $row['date']; ?></td>
                </tr>
         
    <?php 
    
       }
    }
       else{ ?>

       <tr>
           <th>There Is No Work Details Available..</th>
       </tr>

   <?php    }
   

    ?>
</table>
</form>

</div>

<?php include 'footer.php'; ?>