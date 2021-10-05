<?php include 'public_header.php'; 

?>

<form action="" method="post">

<table>
    <h1>Editor Details</h1>
    <tr>
        <th>Sl No</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Place</th>
        <th>Phone</th>
        <th>Email</th>
    </tr>

    <?php 
        $q1="SELECT * FROM `editor` INNER JOIN `login` USING(`login_id`) WHERE `usertype`='editor' ";
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
                    <?php 
                         if($row['usertype']=="editor"){ ?>
                        <td><a href="public_view_editor_services.php?editor_id=<?php echo $row['editor_id'] ?>">Services</a>
                        <a href="public_view_editor_works.php?editor_id=<?php echo $row['editor_id'] ?>">Works</a>
                        <a href="public_send_enquiry.php?editor_id=<?php echo $row['editor_id'] ?>">Enquiry</a>
                    </td>
                <?php    }

                    ?>
                   
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>

<?php include 'footer.php'; ?>