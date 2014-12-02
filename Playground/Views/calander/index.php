		<!-- Button trigger modal -->
<title>Calendar</title>
<div class="container" id="background">
	<br/>
	<button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#myModal">Enter all Data</button>
	<br/>
	<br/>
	<div class="panel panel-danger">
		<div class="panel-heading panel-danger">Everything Average</div>
	  	<div class="panel-body">
	  		          <div class="table-responsive">
	            <table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>Name of Food</th>
	                  <th>Calories Eaten</th>
	                  <th>Fat Eaten(g)</th>
	                  <th>Carbs Eaten(g)</th>
	                  <th>Fiber (g)</th>
	                  <th>Time of Food Eaten</th>
	                  <th></th>
	                </tr>
	              </thead>
	              
	               <thead>
	                <tr>
	                  <th>Name of Workout</th>
	                  <th>Calories Burned</th>
	                  <th>Fat Burned (g)</th>
	                  <th>Workout Length</th>
	                  <th>Time of Workout</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	              	<? foreach ($model as $rs): ?>
	                <tr>
	                  <td><?=$rs['Name of Food']?></td>
	                  <td><?=$rs['Calories Eaten']?></td>
	                  <td><?=$rs['Fat Eaten']?></td>
	                  <td><?=$rs['Carbs Eaten']?></td>
	                  <td><?=$rs['Fiber']?></td>
	                  <td><?=$rs['Time of Food Eaten']?></td>
	                  <td>
						<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
	                  	
	                  </td>
	                </tr>
	                                <tr>
	                  <td><?=$rs['Name of Workout']?></td>
	                  <td><?=$rs['Calories']?></td>
	                  <td><?=$rs['Fat Burned']?></td>
	                  <td><?=$rs['Workout Length']?></td>
	                  <td><?=$rs['Time of Workout']?></td>
	                  <td>
						<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
	                  	
	                  </td>
	                </tr>
	                <? endforeach; ?>
	              </tbody>
	            </table>
	          </div>
	  	</div>
	</div>
	<div class="panel panel-danger">
		<div class="panel-heading panel-danger">Everything</div>
	  	<div class="panel-body">
	  		          <div class="table-responsive">
	            <table class="table table-striped">
	              <thead>
	                <tr>
	                  <th>Name of Food</th>
	                  <th>Calories Eaten</th>
	                  <th>Fat Eaten(g)</th>
	                  <th>Carbs Eaten(g)</th>
	                  <th>Fiber (g)</th>
	                  <th>Time of Food Eaten</th>
	                  <th></th>
	                </tr>
	              </thead>
	              
	               <thead>
	                <tr>
	                  <th>Name of Workout</th>
	                  <th>Calories Burned</th>
	                  <th>Fat Burned (g)</th>
	                  <th>Workout Length</th>
	                  <th>Time of Workout</th>
	                  <th></th>
	                </tr>
	              </thead>
	              <tbody>
	              	<? foreach ($model as $rs): ?>
	                <tr>
	                  <td><?=$rs['Name of Food']?></td>
	                  <td><?=$rs['Calories Eaten']?></td>
	                  <td><?=$rs['Fat Eaten']?></td>
	                  <td><?=$rs['Carbs Eaten']?></td>
	                  <td><?=$rs['Fiber']?></td>
	                  <td><?=$rs['Time of Food Eaten']?></td>
	                  <td>
						<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
	                  	
	                  </td>
	                </tr>
	                                <tr>
	                  <td><?=$rs['Name of Workout']?></td>
	                  <td><?=$rs['Calories']?></td>
	                  <td><?=$rs['Fat Burned']?></td>
	                  <td><?=$rs['Workout Length']?></td>
	                  <td><?=$rs['Time of Workout']?></td>
	                  <td>
						<a title="Edit" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=edit&id=<?=$rs['id']?>">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<a title="Delete" class="btn btn-default btn-sm toggle-modal" data-target="#myModal" href="?action=delete&id=<?=$rs['id']?>">
							<i class="glyphicon glyphicon-trash"></i>
						</a>
	                  	
	                  </td>
	                </tr>
	                <? endforeach; ?>
	              </tbody>
	            </table>
	          </div>
	  	</div>
	</div>
	
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<div class="modal-body">
					<h4 class="modal-title" id="myModalLabel">Enter your Workout</h4>
	  			<br/>
					<div class="input-group">
						<span class="input-group-addon">Meal/Snack</span>
						<input type="text" class="form-control" placeholder="Breakfast, Lunch, Dinner, Snack ...ect">
						<span class="input-group-addon">*</span>
					</div>
					<br/>
					<div class="input-group">
						<span class="input-group-addon">Name of Meal/Snack</span>
						<input type="text" class="form-control" placeholder="Eggs, Ham Sandwhich, Chicken ...ect">
						<span class="input-group-addon">*</span>
					</div>
					<br/>
					<div class="input-group">
						<span class="input-group-addon">Calories</span>
						<input type="text" class="form-control" placeholder="Calories">
						<span class="input-group-addon">*</span>
					</div>
					<br/>
					<div class="input-group">
						<span class="input-group-addon">Carbs</span>
						<input type="text" class="form-control" placeholder="Carbs">
						<span class="input-group-addon">*</span>
					</div>
					<br/>								
					<div class="input-group">
						<span class="input-group-addon">Time</span>
						<input type="text" class="form-control" placeholder="MM/DD/YYYY HH:MM">
						<span class="input-group-addon">*</span>
					</div>
				</div>
					<h4>Enter Your the following information below (all are required).</h4>	
					<br/>
					<div class="input-group">
						<span class="input-group-addon">Workout</span>
						<input type="text" class="form-control" placeholder="Running, Walking, Lifting ect...">
						<span class="input-group-addon">*</span>
					</div>
					<br/>
					<div class="input-group">
						<span class="input-group-addon">Calories Burned</span>
						<input type="text" class="form-control" placeholder="Calories">
						<span class="input-group-addon">*</span>
					</div>
					<br/>
					<div class="input-group">
						<span class="input-group-addon">Workout Time</span>
						<input type="text" class="form-control" placeholder="HH:MM">
						<span class="input-group-addon">*</span>
					</div>
					<br/>
					<div class="input-group">
						<span class="input-group-addon">Time</span>
						<input type="text" class="form-control" placeholder="MM/DD/YYYY HH:MM">
						<span class="input-group-addon">*</span>
					</div>
				</div>
				  			<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-danger">Save changes</button>
	  			</div>
	  			<br />
		</div>
	</div>
</div>