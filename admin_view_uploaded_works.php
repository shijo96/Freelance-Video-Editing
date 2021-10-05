<?php include 'admin_view_header.php'; 
extract($_GET);
?>


<div class="container" style="padding: 2em;">


<form action="" method="post">

<table class="table" style="width: 800px;">
    <h1>Work Details</h1><br>
    

    <?php 
        $q1="SELECT * FROM `uploadworks` WHERE `request_id`='$request_id'";
        $res=select($q1);
 
        foreach($res as $row){ ?>
                <tr>
                    <td>
                        <video width="700" height="240" controls autoplay>
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
   

    ?>
</table>
</form>
</div>
<?php include 'footer.php'; ?>