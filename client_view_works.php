<?php include 'client_view_header.php'; 
extract($_GET);

?>


<div class="container" style="padding: 2em;">


<table class="table" style="width: 500px;">
    <h1>Uploaded Works</h1> <br>
    <tr>
        
        <th>File</th>
        <th>Date</th>
    </tr>

    <?php 
        $q1="SELECT * FROM `uploadworks` WHERE `request_id`='$request_id'";
        $res=select($q1);
        foreach($res as $row){ ?>
                <tr>
                    <td>
                        <video width="320" height="240" controls>
                            <source src="<?php echo $row['uploadedfile']; ?>" type="video/mp4">
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
</div>



<?php include 'footer.php'; ?>