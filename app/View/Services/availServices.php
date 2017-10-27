<div class="container">
	<ul class="breadcrumb">
                    <li><a href="../users/index">Home</a></li>
                    <li><a href="../../customers/index">Customers</a></li>
                    <li>Pets</li>
                    <li class="active">Availed Services</li>
</ul>
 <table class="table table-hover">
 	<?php echo $this->Html->link(__('Download Services', true), array(
				'action' => '../services/download', $this->request->params['pass'][0]), array(
				'class' => 'btn btn-warning')
				); ?> 
	 <thead>
	 <tr>
	 	<th>Service ID</th>	
	 	<th>Title</th>
	 	<th>Description</th>
	 	<th>Scheduled Date</th>
	 	<th>Action</th>
	 </tr>
	 </thead>
	<tbody>
			<?php 
				if(!$services){
					echo '<tr><td colspan="30"><h1 align="center">No records found 	</h1></td></tr>';
				}	 
			?>	
		<?php foreach ($services as $key => $services): ?>
			<tr>
				<td><?php echo $services['Service']['id'] ?></td>
				<td><?php echo $services['Service']['title'] ?></td>
				<td><?php echo $services['Service']['description'] ?></td>
				<td><?php echo $services['Service']['date'] ?></td>
				<td>
				<?php echo $this->Html->link(__('Edit', true), array(
				'action' => '../services/edit', $services['Service']['id']), array(
				'class' => 'btn btn-warning')
				); ?> 
				<?php 
				echo $this->Html->link(__('Delete', true), array( 
				'action' => '../services/delete', $services['Service']['id']), array(
				'class' => 'btn btn-danger')
				); ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>
</div>
</div> 
