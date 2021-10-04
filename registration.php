
<?php include 'public_header.php'; 

if(isset($_POST['editor_reg'])){
    extract($_POST);

    $q="SELECT * FROM `login` WHERE `username`='$uname'";
    $res=select($q);
    if(sizeof($res)>0){
        alert("Username Already Exist Please Choose Another One...!!");
    }
    else{
        $q1="INSERT INTO `login` VALUES(NULL,'$uname','$passw','pending')";
        $ids=insert($q1);
        $q2="INSERT INTO `editor` VALUES(NULL,'$ids','$fname','$lname','$place','$phone','$email')";
        insert($q2);
        alert("Registration Successfully Completed..");
        return redirect("login.php");
    }

}

if(isset($_POST['user_reg'])){
    extract($_POST);

    $q="SELECT * FROM `login` WHERE `username`='$uname'";
    $res=select($q);
    if(sizeof($res)>0){
        alert("Username Already Exist Please Choose Another One...!!");
    }
    else{
        $q1="INSERT INTO `login` VALUES(NULL,'$uname','$passw','user')";
        $ids=insert($q1);
        $q2="INSERT INTO `client` VALUES(NULL,'$ids','$fname','$lname','$place','$phone','$email')";
        insert($q2);
        alert("Registration Successfully Completed..");
        return redirect("login.php");
    }

}
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script>
$(document).ready(function(){
    $("#bteditor").click(function(){
        $("#editor").show();
        $("#user").hide();
        $("#img").hide();
    });

    $("#btuser").click(function(){
        $("#user").show();
        $("#editor").hide();
        $("#img").hide();
    });

   
});
</script>



 <div>
    <button id="bteditor">Editor Registration</button>
    <button id="btuser">User Registration</button>
</div> 

 <div style = "display: none;" id="editor">
 <form method="post">
    
        <h1>Editor Registration</h1>
        <table>
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" id=""></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" id=""></td>
            </tr>
            <tr>
                <th>Place</th>
                <td><input type="text" name="place" id=""></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="text" name="phone" id=""></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><input type="text" name="uname" id=""></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="passw" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="editor_reg" value="Register" id=""></td>
            </tr>
        </table> 

    </form>
</div> 

<div style = "display: none;" id="user">
    <form method="POST">
        <h1>User Registration</h1>
        <table>
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" id=""></td>
            </tr>
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" id=""></td>
            </tr>
            <tr>
                <th>Place</th>
                <td><input type="text" name="place" id=""></td>
            </tr>
            <tr>
                <th>Phone</th>
                <td><input type="text" name="phone" id=""></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <th>Username</th>
                <td><input type="text" name="uname" id=""></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="passw" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" name="user_reg" value="Register" id=""></td>
            </tr>
        </table> 

    </form>
</div>  




<?php include 'footer.php'; ?>