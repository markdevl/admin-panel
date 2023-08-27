<link rel="stylesheet" href="assets\css\style4.css">
<script>
	$(document).ready(function() {
		var dataTable = $('.user-table-data').DataTable({
			"pageLength": 10,
			'aoColumnDefs': [{
				'bSortable': false,
				'aTargets': ['nosort'],
			}],
			columnDefs: [{
				type: 'date-dd-mm-yyyy',
				aTargets: [5]
			}],
			"aoColumns": [
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null
			],
			"order": false,
			"bLengthChange": false,
			"dom": '<"top">ct<"top"p><"clear">'
		});
		$("#filterbox").keyup(function() {
			dataTable.search(this.value).draw();
		});
	});
</script>

<section class="form">
	<form action="" class="form-search">
		<div class="form-group-user">
			<label for="">Username</label>
			<br>
			<input type="text" name="name" placeholder="username">
		</div>

		<div class="form-group-user">
			<label for="">Mobile No.</label>
			<br>
			<input type="number" name="mobile" placeholder="mobile">
		</div>

		<div class="form-group-user">
			<label for="">Transfer</label>
			<br>
			<select name="transfer" id="transfer" class="form-control">
				<option value="">Select Option</option>
				<option value="1">Yes</option>
				<option value="0">No</option>
			</select>
		</div>

		<div class="form-group-user">
			<label for="">Status</label>
			<br>
			<select name="status" id="status" class="form-control">
				<option value="">Select Option</option>
				<option value="1">Active</option>
				<option value="2">Inactive</option>
			</select>
		</div>

	</form>
</section>


<section class="input-form">
	<div class="main-datatable">
		<div class="user-table">
			<div class="d-flex">
				<a href="#UserManagement" onclick="showmainusers()"><button class="primary">Show All Users</button></a>
				<div class="add_flex">
					<div class="searchInput">
						<label type="email">Search:</label>
						<input type="search" id="filterbox" placeholder=" ">
					</div>
				</div>
			</div>
			<div class="filtertable">
				<table class="user-table-data" style="width:100%;">
					<thead>
						<tr>
							<th style="min-width:10px;">ID</th>
							<th style="min-width:15px;">Name</th>
							<th style="min-width:15px;">Mobile No</th>
							<th style="min-width:10px;">Whats copy</th>
							<th style="min-width:10px;">Date</th>
							<th style="min-width:15px;">Balance</th>
							<th style="min-width:15px;">Transfer</th>
							<th style="min-width:10px;">Active</th>
							<th style="min-width:10px;">View</th>
						</tr>
					</thead>
					<tbody>
						<?php
						include_once "../config/dbconnect.php";
						$sql = "SELECT * from users";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							while ($row = $result->fetch_assoc()) {
								if ($row["user_status"] == 0) {
						?>
									<tr class="user-data">
										<td><?= $row["user_id"] ?></td>
										<td><?= $row["full_name"] ?></td>
										<td><?= $row["contact_no"] ?></td>
										<td><i class='bx bxl-whatsapp'></i> <i class='bx bx-copy'></i></td>
										<td><?= $row["registered_at"] ?></td>
										<td><?= $row["user_balance"] ?></td>
										<?php
										if ($row["transfer_status"] == 0) {

										?>
											<td><button class="btn-danger" onclick="ChangeTransferStatus('<?= $row['user_id'] ?>')">No</button></td>
										<?php

										} else {
										?>
											<td><button class="btn-success" onclick="ChangeTransferStatus('<?= $row['user_id'] ?>')">Yes</button></td>

										<?php
										}
										?>
										<?php
										if ($row["user_status"] == 0) {

										?>
											<td><button class="btn-danger" onclick="ChangeUnapprovedUserStatus('<?= $row['user_id'] ?>')">Unapproved</button></td>
										<?php
										}
										?>
										<td><a class="bx bx-show-alt" data-href="./adminView/viewUserDetail.php?userID=<?= $row['user_id'] ?>" href="javascript:void(0);"></a></td>
									</tr>
						<?php

								}
							}
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</section>