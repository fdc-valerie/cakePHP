<style>
img {
    display: block;
    margin: 0 auto;
}
</style>
<ul class="breadcrumb">
                    <li><a href="../users/index">Home</a></li>
                    <li><a href="../../customers/index">Customers</a></li>
                    <li class="active">Pets</li>
</ul>

<?php foreach ($pets as  $pet): ?>
<!-- <?php echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css',array('inline' => false)) ?> -->
 <div class="pull-left">
		
</div>

 <div class="container">
  <div class="row">
	<?php echo $this->Flash->render('positive') ?>
	    <div class="col-xs-5" style="padding-left:0;padding-right:0">
 			<div class="panel panel-default panel-table" >
				<div class="panel-heading" style="padding:18px" >
					<?php echo $pet['Pet']['name']; ?>
						<div class="pull-right">
							<?php echo $this->Html->link(__('Edit', true), array(
					 			'action' => '../pets/edit', $pet['Pet']['id']), array(
					 				'class' => 'btn btn-warning'
					 				)
					 			); 
					 		?> 
					 		<?php echo $this->Html->link(__('Delete', true), array( 
									'action' => '../pets/delete', $pet['Pet']['id']), array(
										'class' => 'btn btn-danger'
										)
									); 
								?>
						</div>
				</div>
					<div class="panel-body">
						<div class="tr">
							<div class="td">
									<?php echo $this->Html->image('/img/image/' .  $pet['Pet']['pet_picture'], array(
												'width'=>'160',
												'height' =>'160'
												)
											)
									?><br>
												
								   <!--  <label>Name:</label>  <?php echo $pet['Pet']['name']; ?> <br> -->
								    <label>Species:</label>  <?php echo $pet['Pet']['species']; ?><br>
									<label>Breed:</label>  <?php echo $pet['Pet']['breed']; ?><br>
									<label>Age:</label>  <?php echo $pet['Pet']['age']; ?><br>
									<label>Gender:</label>  <?php echo $pet['Pet']['gender']; ?><br>
							
							</div>
						</div>	
					</div>
					<div class="panel-footer">
						<?php
							echo $this->Html->link(__('Add Services', true), array( 
								'action' => '../services/add', $pet['Pet']['id']), array(
								'class' => 'btn btn-primary'
								)
							); 
						?>
						<?php 
							echo $this->Html->link(__('View Avail Services', true), array( 
								'action' => '../services/availservices', $pet['Pet']['id']), array(
								'class' => 'btn btn-info'
								)
							); 
						?>

					</div>	
				</div>
			</div>
		<?php endforeach; ?> 
		<h1 align="center">
			<?php 
				if(!$pets){
					echo "No records found";
				}	 
			?>	
		</h1>
	</div> 
</div> 

