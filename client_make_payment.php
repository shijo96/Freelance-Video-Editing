<?php
include'client_view_header.php';
extract($_GET);

if(isset($_POST['pay'])){
    extract($_POST);
    $q="INSERT INTO `payment` VALUES(NULL,'$request_id','$amount',CURDATE())";
    insert($q);
    $qu="UPDATE `request` SET `status`='Paid' WHERE `request_id`='$request_id'";
    update($qu);
    alert("Payment Successfully Complated..");
    return redirect("client_view_request.php");

}

?>


<div align="center">

        <form method="post">
            <h2 style="margin-top: 30px;"> Payment </h2> <hr> 
            <table style="width: 400px;" class="table table-borderless" id="b"> 
                <tr> 
                    <td>PAYMENT DETAILS</td> 
                    <td><img src="images/ccard.jpg" width="300px" /></td>

                </tr>
                  <tr> 
                    <td colspan="2"> <small>CARD HOLDER</small><br> 
                        <input type="text" placeholder="Name on card"  class="form-control" data-valid='only-text' required="" > </td>
                    </tr>
                <tr> 
                    <td colspan="2"> <small>CARD NUMBER</small><br> 
                        <input type="text" placeholder="Enter a valid card number"  class="form-control"  pattern="[0-9]{16}" title="Enter 16 digit Card number" required="">
                    </td> 
                </tr>
                <tr> 
                   <td> 
                       <small>EXPIRE DATE</small><br> 
                        <input type="text" placeholder="MM/YY"  class="form-control"  pattern="[0-9,/]{5}" title="Enter 3 digit CV number" required=""> 
                    </td>
                    <td > 
                        <small>CVV</small>  <br>   
                        <input type="password" placeholder="CVV"  class="form-control"  pattern="[0-9]{3}" title="Enter 3 digit CV number" required="">
                    </td>   
                </tr>
                    
                <tr><td colspan="2"> <small>AMOUNT</small><br>

                
                    <input type="text" name="amount"  class="form-control"  value="<?php echo $amount;?> " readonly="" ></td></tr>
                <tr> 
                        <td colspan="2"><input type="submit" value="PAY"  class="btn btn-success" style="width: 100%" name="pay"> </td>
                </tr>

                        

                        </table>
                </form>
            </div>

<?php
include'footer.php';
?>