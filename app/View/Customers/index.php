 <ul class="breadcrumb">
					<li><a href="../../users/index">Home</a></li>
					<li><a href="http://local.cakephp.com/services">View Scheduled Services</a></li>
					<li class="active">Customers</li>
</ul>
<div class="container">
<?php echo $this->Flash->render('positive') ?>

 <table class="table table-hover">
 <?php echo $this->Html->link("Add Customer", array(
		'controller' => 'Customers'
		,'action'=> '../customers/registration' ), array(
			'class' => 'btn btn-default'
		)
	) 
?>

	 <thead>
	 <tr>
	 	<th>Customer ID</th>	
	 	<th>First Name</th>
	 	<th>Middle Name</th>
	 	<th>Last Name</th>
	 	<th>Contact #</th>
	 	<th>Address</th>
	 	<th>Action</th>
	 </tr>
	 </thead>
	 <tbody>
	 <?php foreach ($customers as $key => $customer): ?>
	 	<tr>
	 		<td><?php echo $customer['Customer']['id'] ?></td>
	 		<td><?php echo $customer['Customer']['first_name'] ?></td>
	 		<td><?php echo $customer['Customer']['middle_name'] ?></td>
	 		<td><?php echo $customer['Customer']['last_name'] ?></td>
	 		<td><?php echo $customer['Customer']['contact_no'] ?></td>
	 		<td><?php echo $customer['Customer']['address'] ?></td>
	 		<td>
	 		<?php echo $this->Html->link(__('Add Pet', true), array(
 				'action' => '../pets/add', $customer['Customer']['id']), array(
 					'class' => 'btn btn-primary')
	 		); ?> 

	 		<?php echo $this->Html->link(__('View Pets', true), array(
 				'action' => '../pets/index', $customer['Customer']['id']), array(
 					'class' => 'btn btn-info')
	 		); ?> 

	 		<?php echo $this->Html->link(__('Edit', true), array(
	 			'action' => '../customers/edit', $customer['Customer']['id']), array(
	 				'class' => 'btn btn-warning')
	 		); ?> 
			<?php 
				echo $this->Html->link(__('Delete', true), array( 
					'action' => '../customers/delete', $customer['Customer']['id']), array(
						'class' => 'btn btn-danger')
				); 
			?></td>
	 	</tr>
	 		<?php endforeach; ?>
	 </tbody>
 </table>
</div>

<?php  
	echo $this->Paginator->numbers();

	// Shows the next and previous links
	// echo $this->Paginator->prev(
	//   '« Previous',
	//   null,
	//   null,
	//   array('class' => 'disabled')
	// );
	// echo $this->Paginator->next(
	//   'Next »',
	//   null,
	//   null,
	//   array('class' => 'disabled')
	// );

?>
