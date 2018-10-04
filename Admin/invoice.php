<?php
session_start();
include("header.php");


?>


<script language="javascript" type="text/javascript">

function myModal()
{
window.print(); 
}
</script>

<?php

	if(isset($_POST['class'])){
		$_SESSION['class'] = $_POST['class'];
		}
		
		if(isset($_POST['section'])){
			$_SESSION['section'] = $_POST['section'];
		}
		
		if(isset($_POST['month'])){
			$_SESSION['month'] = $_POST['month'];
		}

	
					
		$result=$db->query("select * from payment where class='".$_SESSION['class']."' AND section='".$_SESSION['section']."' AND month='".$_SESSION['month']."'");
		
		while($row=mysqli_fetch_array($result))
		{


?>



  <!--print invoice-->


  
<div>
    <div class="modal-dialog">
    <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">View Invoice</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <p><strong>Creation Date</strong> <?php echo $row['date']; ?></p>
            <p><strong>Title</strong> <?php echo $row['cat_name']; ?></p>
            <p><strong>Status</strong> <?php echo $row['status']; ?></p>
		<div class="row">	
			<div class="col-md-6">
				<p><strong>Payment To</strong></br> SCHOOL MANAGEMENT SYSTEM</p>
			</div>
			<div class="col-md-6">
				<p><strong>Bill To</strong></br> <?php echo $row['name']; ?></p>
			</div>
        </div>
		<hr/>
		<div class="row">	
			<div class="col-md-6">
				
			</div>
			<div class="col-md-6">
				<p><strong>Total Amount: </strong> <?php echo $row['total_amount']; ?></p>
				<p><strong>Paid Amount: </strong><?php echo $row['pay_amount']; ?></p>
				<p><strong>Due Amount: </strong></p>
			</div>
        </div>
		<hr/>
		<p><strong>Payment History</strong></p>
		<table class="table table-striped" border='1'>
			<tr>
				<th>Date</th>
				<th>Amount</th>
				<th>Status</th>
			</tr>
			<tr>
				<td><?php echo $row['date']; ?></td>
				<td><?php echo $row['pay_amount']; ?></td>
				<td><?php echo $row['status']; ?></td>
			</tr>
		</table>
		<form id="form1" name="form1" method="post" action="">
		<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onClick="return myModal();" >Print Invoice</button>
        </div>
        </form>
        
       </div>
    </div>
  </div>
  
				
  
</div>

<?php
	}
?>
