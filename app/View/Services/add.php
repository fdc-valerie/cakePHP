<script type="text/javascript">
						function populate(s1,d2){
							var s1 = document.getElementById(s1);
							var d2 = document.getElementById(d2);
							d2.innerHTML = "";
							
							if(s1.value=="Major Surgery"){
								var optionArray = ["internal wound|Internal Wound", "gastrointestinal procedure|Gastrointestinal Procedure", "orthopedic procedure|Orthopedic Procedures", "urinary procedures|Urinary Procedures"];
							}else if(s1.value=="Minor Surgery"){
								var optionArray = ["mass removals|Mass Removals", "spay/neuter|Spay/Neuter", "dental cleaning procedures|Dental Cleaning Procedures", "aural hematoma| Aural Hematoma", "skin biopsy| Skin biopsy"];
							}else if(s1.value=="Grooming"){
								var optionArray = ["premium grooming|Premium Grooming", "regular grooming|Regular Grooming"];
							}else if(s1.value=="Vaccination"){
							var optionArray = ["anti-rabies vaccination|Anti-Rabies Vaccination", "pseudo virus|Pseudo Virus", "deworming|Deworming"];
							}
							for(var option in optionArray){
								var pair = optionArray[option].split("|");
								var newOption = document.createElement("option");
								newOption.value = pair[0];
								newOption.innerHTML = pair[1];
								d2.options.add(newOption);
							}
						}
						
</script>
<ul class="breadcrumb">
                    <li class="active">Home</li>
                    <li><a href="http://local.cakephp.com/services">View Scheduled Services</a></li>
                    <li><a href="../../customers/index">
                    Customers</a></li>
                    
</ul>
<div class="container">
	<?php echo $this->Flash->render('positive') ?>

	<?php 
        $pet = (isset($pets['Pet'])) ? $pets['Pet'] : header('Location: http://local.cakephp.com/customers/index/');
    ?>

 	<form action ="/services/add/<?php echo $pet['id'] ?>" method="POST" class="form-horizontal" role="form">
		<legend>Services</legend>
		 	<div class="form-group">
			  	<div class="col-sm-4">
			  		<div class="form-group">
						<div class="col-sm-4">
						<!-- 	<label for="service_date">Pet ID:</label> -->
							<input type="hidden" class="form-control" name="data[Service][pet_id]" value="<?php echo $pet['id'] ?>" />
						</div>
					</div>

					<!-- <div class="form-group">
						<div class="col-sm-4">
							<label for="service_date">Service Title:</label>
							<input type="input" class="form-control" name="data[Services][title]" />
						</div>
					</div> -->

			  		<label for="serv_name">Services Title</label>
						  	<select id="title" name="data[Service][title]" class ="form-control" onclick="populate(this.id,'description')">					 
								<option value="Major Surgery">Major Surgeries</option>
								<option value="Minor Surgery">Minor Surgeries</option>
								<option value="Grooming">Grooming</option>
								<option value="Vaccination">Vaccination</option>
						    </select>
						</div>
					</div>
	  
				<div class="form-group">
					<div class="col-sm-4">
						<label for="serv_description">Service Description</label>
							<select id="description" name="data[Service][description]" class="form-control">
							</select>
						</div>
				</div>

				<div class="form-group">
					<div class="col-sm-4">
						<label for="service_date">Date Availed:</label>
						<input type="date" class="form-control" name="data[Service][date]" />
					</div>
				</div>
	  			  
				<div class="form-group">
					<div class="col-sm-4">
						 <button class="btn btn-primary" name="data[Service][submit]" type="submit" value="Submit" >  Add Service</button>
                    </div>
				</div>
			</form>	
		</div>



