<div class="card">
	<div class="card-header">
		<h5 class="card-title">Manage Sections</h5>
	</div>
	<div class="card-block">
		<button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#dataModal">Add Section</button>
		<div class="modal fade" id="dataModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<h4 class="modal-title">Add Sections</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					</div>
					<div class="modal-body">
						<form action="inc/code.php" method="POST" role="form" id="formData">
								<div class="msg"></div>
								<div class="form-group">
									<label for="section_name">Section Name</label>
									<input type="text" class="form-control" id="section_name" name="section_name">
									<input type="hidden" class="form-control" id="section_id" name="section_id">
								</div>
								<div class="form-group">
									<label for="section_sts">Section Sts</label>
									<select class="form-control" id="section_sts" name="section_sts">
										<option value="">~~SELECT~~</option>
										<option value="1">Active</option>
										<option value="0">Deactive</option>
									</select>
								</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary waves-effect waves-light" id="saveData">Save</button>
						</form>		
						<button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

	<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped table-bordered" id="sections" style="width: 100%">
				<thead>
					<tr>
						<th>Sr.#</th>
						<th>Section Name</th>
						<th>Section Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div><!-- row -->	
	</div><!-- card body -->
</div><!-- card -->

