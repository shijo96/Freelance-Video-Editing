<?php  include 'public_header.php'; 

if(isset($_POST['login'])){
    extract($_POST);
    $q="SELECT * FROM login WHERE `username`='$uname' AND `password`='$passw'";
    $res=select($q);
    if(sizeof($res)>0){
        $_SESSION['login_id']=$res[0]['login_id'];
        $lid=$_SESSION['login_id'];

        if($res[0]['usertype']=="admin"){
            alert("Welcome Admin..");
            return redirect("admin_home.php");
        }
        if($res[0]['usertype']=="editor"){
            $q1="SELECT * FROM `editor` WHERE `login_id`='$lid'";
            $res1=select($q1);
            if(sizeof($res1)>0){
                $_SESSION['editor_id']=$res1[0]['editor_id'];
                alert("Welcome Editor..");
                return redirect("editor_home.php");
            }    
        }
        if($res[0]['usertype']=="client"){
            $q2="SELECT * FROM `client` WHERE `login_id`='$lid'";
            $res2=select($q2);
            if(sizeof($res2)>0){
                $_SESSION['client_id']=$res2[0]['client_id'];
                alert("Welcome Client..");
                return redirect("client_home.php");
            }    
        }
    }
    else{
        alert("Invalid Username Or Password..");
        return redirect("registration.php");
    }

}


?>



  <form action="" method="post">
                      
    <h1>Login</h1>
    <table class="table" style="width: 500px;color: #000;">
        <tr >
            <th>Username</th>
            <td><input type="text" class="form-control" name="uname" id=""></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" class="form-control" name="passw" id=""></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" class="btn btn-success" name="login" value="LOGIN" id=""></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><a style="text-decoration: none;" href="registration.php">Create an Account?</a></td>
        </tr>
    </table>
    
</form>


<?php include 'footer.php'; ?>