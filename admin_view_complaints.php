<?php include 'admin_header.php';

?>



			<table align="center"  class="table" style="width: 900px">
				<form method="post">
			
			<thead>
				<tr>
					<th style="color: black;">Client Name</th>
					<th style="color: black;">complaint</th>
					<th style="color: black;">Complaint Date</th>

					<th style="color: black;" >Reply</th>
			
				</tr>
			</thead>
			<tbody>
				<?php 
				$q="SELECT * FROM `complaint` INNER JOIN `client` USING(`client_id`)";
				$res=select($q);
				$i = 0;
				foreach ($res as $row) { ?>
					
					<tr 	style="color: black;">
					<td style="color: black;"><?php echo $row['fname']; ?> <?php echo $row['lname']; ?></td>
					<td style="color: black;"><?php echo $row['complaint']; ?></td>
					<td style="color: black;"><?php echo $row['date']; ?></td>
					<?php if($row['reply']=="pending"){ ?>
						<td style="color: black;"><input type="text" class="form-control"  name="reply<?php echo $i; ?>" style="border-color: #000;">
						<input type="submit" class="btn btn-primary" name="replys<?php echo $i; ?>" value="Send">
						<input type="hidden" name="complaint_id<?php echo $i; ?>" value="<?php echo $row['complaint_id'];?>"></td>
				<?php	} 
				else{ ?>
					<td><?php echo $row['reply']; ?></td>
			<?php	}

				?>
					</tr>


				
			<?php	 
			if(isset($_POST['replys'.$i])){
				extract($_POST);
				 $qr="update complaint set reply='".$_POST['reply'.$i]."' where complaint_id='".$_POST['complaint_id'.$i]."'";
				update($qr);
				redirect("admin_view_complaints.php");
				}
				$i = $i+ 1;
			}

					?>
				

			</tbody>
			</form>
		</table>
	

<?php   
include "footer.php";
 ?>