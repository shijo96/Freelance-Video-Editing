<?php include 'client_view_header.php'; 
extract($_GET);

?>
<div class="container" style="padding: 2em;">

<form action="" method="post">

<table  class="table" style="width: 1000px;">
    <h1>Editor Details</h1><br>
    <tr>
        <th>Sl No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Place</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>

    <?php 
        $q1="SELECT * FROM `editor` INNER JOIN `login` USING(`login_id`) INNER JOIN `myservice` USING(`editor_id`) WHERE `service_id`='$sid' AND `usertype`='editor'";
        $res=select($q1);
        $i=1;
        foreach($res as $row){ ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['fname']; ?></td>
                    <td><?php echo $row['lname']; ?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><a class="btn btn-primary btn-sm" href="client_view_editor_services.php?editor_id=<?php echo $row['editor_id'] ?>">Services</a></td>
                    <td><a class="btn btn-primary btn-sm" href="client_add_my_works.php?myservice_id=<?php echo $row['myservice_id'] ?>">Add My Work</a></td>
               
                   
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>
</div>
<?php include 'footer.php'; ?>