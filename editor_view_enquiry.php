<?php include 'editor_view_header.php';

?>

<div class="container" style="padding: 2em;">

<form method="post">

			<table class="table" style="width: 500px">
			<h1 >Enquiry</h1><br>
				
<!-- 			
			<thead>
				<tr>
					<th style="color: black;">Enquiry</th>
					<th style="color: black;">Date</th>
					<th style="color: black;" >Reply</th>

				</tr>
			<			/thead> -->
			<tbody>
				<?php 
				$q="SELECT * FROM `enquiry` where editor_id='$eid'";
				$res=select($q);
				$i = 0;
				foreach ($res as $row) { ?>
					
					<tr style="color: black;">
                        <th style="color: black;">Enquiry : </th>
					    <td style="color: black;"><?php echo $row['enquiry']; ?></td>
                    </tr>
                    <tr>
                        <th style="color: black;">Date : </th>
                        <td style="color: black;"><?php echo $row['date']; ?></td>
                    </tr>
					<tr>
                        <th>Reply : </th>
					<?php if($row['reply']=="Pending"){ ?>
						<td style="color: black;"><input type="text" class="form-control"  name="reply<?php echo $i; ?>" style="border-color: #000;">
						<input type="submit" class="btn btn-primary" name="replys<?php echo $i; ?>" value="Send">
						<input type="hidden" name="enquiry_id<?php echo $i; ?>" value="<?php echo $row['enquiry_id'];?>"></td>
				<?php	} 
				else{ ?>
					<td><?php echo $row['reply']; ?></td>
			<?php	}

				?>
					</tr>
                    <tr>
                        <td colspan="2"><hr style="border-color: red;"></td>
                    </tr>


				
			<?php	 
			if(isset($_POST['replys'.$i])){
				extract($_POST);
				 $qr="update enquiry set reply='".$_POST['reply'.$i]."' where enquiry_id='".$_POST['enquiry_id'.$i]."'";
				update($qr);
				redirect("editor_view_enquiry.php");
				}
				$i = $i+ 1;
			}

					?>
				

			</tbody>
			
		</table>
		</form>
	
</div>
<?php   
include "footer.php";
 ?>