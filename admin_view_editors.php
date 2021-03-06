<?php include 'admin_view_header.php'; 


if(isset($_GET['aid'])){
    extract($_GET);
    $qd="UPDATE `login` SET `usertype`='editor' WHERE `login_id`='$aid'";
    update($qd);
    alert("Successfully Approved..");
    return redirect("admin_view_editors.php");
}

if(isset($_GET['rid'])){
    extract($_GET);
    $qd="DELETE FROM `login` WHERE `login_id`='$rid'";
    delete($qd);
    $qf="DELETE FROM `editor` WHERE `login_id`='$rid'";
    delete($qf);
    alert("Successfully Rejected..");
    return redirect("admin_view_editors.php");
}

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
        $q1="SELECT * FROM `editor` INNER JOIN `login` USING(`login_id`) ORDER BY `login_id` DESC";
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
                        if($row['usertype']=="Pending"){ ?>
                         <td><a class="btn btn-success btn-sm" href="?aid=<?php echo $row['login_id'] ?>">Accept</a>
                        <a class="btn btn-danger btn-sm" href="?rid=<?php echo $row['login_id'] ?>">Reject</a></td>
                    <?php    }
                    else if($row['usertype']=="editor"){ ?>
                        <td><a class="btn btn-primary btn-sm" href="admin_view_editor_services.php?editor_id=<?php echo $row['editor_id'] ?>">Services</a></td>
                <?php    }

                    ?>
                   
                </tr>
               
    <?php 
     $i++;
       }
   

    ?>
</table>
</form>
</div>
<?php include 'footer.php'; ?>