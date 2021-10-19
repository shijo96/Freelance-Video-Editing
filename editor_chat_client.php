<?php include 'editor_view_header.php' ?>

<?php 
if(isset($_POST['send'])){
    extract($_POST);
    $q="insert into chat (sender_id,receiver_id,message) values('$lid','{$_GET['clid']}','$reply')";
    insert($q);
}
?>
<div class="row">
    <div style="z-index: 1000;background-color: #fff"  align="center" >

        <div class="col-md-4" style="" >
            <h2 class="wow fadeInUp" style="font-family:monotype corsiva;"> <u>Chats with Client </u></h2>


           

        </div>
            <?php if(isset($_GET['clid'])) :?>

            <?php 
             $q="SELECT DISTINCT sender_id,CONCAT(fname,' ',lname) AS client_name FROM `chat` INNER JOIN `client` ON `client`.`login_id`=`chat`.`receiver_id` WHERE receiver_id='{$_GET['clid']}' ";
            $row=select($q);
           
            ?>
        <div class="col-md-2"></div>
        <div class="col-md-6" style="margin-top: 50px;background-color: #fff;z-index: 1000">
                <div style="margin-right: 50px;align-content: left;width: 90%;padding-right: 20px" >
                    <h3 style="border-bottom:1px solid #fff;border-top:0px;font-weight:bold;font-size:30px;background-color: #bbb;padding-bottom: 5px;font-color:white" >
                       Chat with <?php if(sizeof($row)>0){ echo $row[0]['client_name']; } ?></h3>
                       <div style="margin-right: 50px;align-content: left;height: 400px;overflow-y: auto;border:2px solid #aaa ;border-radius:10px;width: 100%" id="data" >
                        <table class="table" align="center" style="width: 1000px;border-top:0px;border:1px;padding-left: 100px;" >
    

                    <?php 
 
                        $q="SELECT * FROM chat  WHERE sender_id='{$_GET['clid']}' or receiver_id='{$_GET['clid']}' ";
                        $res=select($q);
                        $i=1;
                    ?>
                    <?php foreach ($res as $row) :  ?>    
                        <tr style="">
                         
                            <?php if ($row['sender_id']==$_GET['clid']): ?>  
                              <td align="left" style="width: 100%" >
                                     <div class="speech-bubble" style="border-radius: 10px;color: blue;font-size:16px;max-width: 70%;min-height: 30px;max-height: auto;min-width: auto;padding-left: 10px;padding-right: 10px;display: inline-block"><?php echo $row['message'] ?>
                                          
                                     </div>
                                    
                               </td>
                            <?php else: ?>
                                    <td align="right" style="width: 100%">
                                
                                    <div class="speech-bubble_r" style="border-radius: 10px;color: black;font-size:16px;max-width: 70%;min-height: 30px;max-height: auto;min-width: 10px;width: auto;padding-right: 10px;display: inline-block;padding-left: 10px"><?php echo $row['message'] ?>
                                    </div>
                                
                                <?php endif ?>
                                </td>
                        </tr>
                    <?php endforeach ?>

                        
                    </table>
                </div>
                <form method="POST">
                    <table class="table" style="border-top:0px;" >
                        <tr style="height: 80px">    

                            <td>
                                <br>
                                <textarea  style="background-color: #eee" class="form-control" name="reply" required title="Please type a message"></textarea>
                            </td>
                            <td align="left" style="vertical-align: bottom;">
                                <input   type="submit"  class="btn btn-primary" name="send" value="Send">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    <?php endif ?>

</section>
</div>

<!-- <div style="height:300px" style="clear: both;" > </div> -->
</div>

<?php include 'footer.php';?>
<script>
    $( document ).ready(function() {
     $('#data').animate({
        scrollTop: $('#data').get(0).scrollHeight}, 2000); 
 });

    
</script>