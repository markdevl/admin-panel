<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->
	<!-- <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"> -->
	<!-- <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> -->
	<link rel="stylesheet" href="assets\css\style3.css">
	<!-- <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet"> -->
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
</head>

<body>


	<section class="form">
		<form action="" class="form-search">
			<div class="form-win">
				<label for="">Date</label>
				<br>
				<input type="date" name="date" placeholder="">
			</div>
			<div class="form-win ">
				<label for="">Game Name</label>
				<br>
				<select name="game name" id="game name" class="form-control">
					<option value="">Enter name</option>
					<option value=""></option>
					<option value=""></option>
				</select>
			</div>
			<div class="form-dec-btn ">
				<button class="go">Go</button>
			</div>
		</form>
	</section>



	
</body>

</html>