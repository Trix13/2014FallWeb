<!-- Button trigger modal -->
<? my_print($model); ?>
<title>Exercise</title>
<div class="container" id="background">
	<br/>	
	<button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal">Enter New Workout</button>
	<br/>
	<br/>
	<div class="panel panel-primary">
		<div class="panel-heading panel-success">Average Exercise</div>
	  	<div class="panel-body">
	  		          <div class="table-responsive">
	            <table class="table table-striped">
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
	<br/>
	<div class="panel panel-primary">
		<div class="panel-heading panel-success">All Exercises</div>
	  	<div class="panel-body">
	  		          <div class="table-responsive">
	            <table class="table table-striped">
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
					<h4 class="modal-title" id="myModalLabel">Enter your Workout</h4>
	  			</div>
	  			<div class="modal-body">
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
					<button type="button" class="btn btn-primary">Save changes</button>
	  			</div>
			</div>
		</div>
	</div>
</div>