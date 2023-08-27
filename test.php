<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <title>test</title>

</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <td>id</td>
                <td>full name</td>
                <td>time</td>
                <td>mobile no</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>piyush</td>
                <td>6:23</td>
                <td>6355051444</td>
            </tr>
            <tr>
                <td>2</td>
                <td>sachin</td>
                <td>6:23</td>
                <td>6355051444</td>
            </tr>
        </tbody>
        
    </table>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
     $(document).ready(function(){
        $('.table').DataTable();
     } );
    </script>
</body>
</html>


<div class="user-table">
		<table>
			<tr>
				<th>#</th>
				<th>NAME</th>
				<th>mobile number</th>
				<th>whats copy</th>
				<th>date</th>
				<th>balance</th>
				<th>transfer</th>
				<th>active</th>
				<th>view</th>
			</tr>
			<?php
			include_once "../config/dbconnect.php";
			$sql = "SELECT * from users";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					if($row["user_status"]==0){
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


		</table>

	</div>


	.input-form {
    /* border: 2px solid red; */
    width: 98%;
    background: var(--light);
    margin: auto;
    margin-top: 10px;
    padding-top: 1.5%;
    padding-bottom: 1.5%;
    border-radius: 4px;
    box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    font-family: var(--poppins);
}

/* table section start  */
.user-table {
    width: 90%;
    margin: auto;
    margin-top: 2%;

}
.primary{
    margin-bottom: 2%;
}

.user-table-data{
    width: 50%;

}
.user-data{
    width: 70%;
}

.user-table table {
    text-align: center;
    border-collapse: collapse;
}

.user-table table th {
    text-transform: uppercase;
    font-size: 0.8rem;
    font-weight: 900;
    padding-top: 1%;
    padding-bottom: 1%;
    background-color: #D6EAF8;
}

.user-table 
tr {
    border-top: 1px solid gray;
    margin-bottom: 1%;
    margin-top: 1%;

}
td{
    border-bottom: 1px solid #dddddd;
    padding: 10px 20px;
    font-size: 14px;
}
tr:nth-child(even) {
    background-color: #dddddd;
}

tr:nth-child(odd) {
    background-color: #edeef1;
}



.btn-danger{
    cursor: pointer;
    background-color: var(--red);
    font-size: 15px;
    padding-left: 2px;
    padding-right: 2px;
    padding-top: 2px;
    padding-bottom: 2px;
    border-radius: 4px;
    border: var(--light);
}
.btn-success{
    cursor: pointer;
    background-color: var(--green);
    font-size: 15px;
    padding-left: 2px;
    padding-right: 2px;
    padding-top: 2px;
    padding-bottom: 2px;
    border-radius: 4px;
    border: var(--light);
}


.bxl-whatsapp {
    color: green;
    font-size: 1.8rem;
    font-weight: 900;
    cursor: pointer;

}

.bx-copy {
    color: black;
    font-size: 1.8rem;
    margin-left: 10%;
    cursor: pointer;
}

.bx-show-alt {
    font-size: 1.8rem;
    color: black;
    cursor: pointer;
}


<table class="user-table-data">
				<thead>
					<tr>
						<td>#</td>
						<td>NAME</td>
						<td>Mobile No</td>
						<td>Whats copy</td>
						<td>Date</td>
						<td>Balance</td>
						<td>Transfer</td>
						<td>Active</td>
						<td>View</td>
					</tr>
				</thead>
				<tbody>
					<?php
					include_once "../config/dbconnect.php";
					$sql = "SELECT * from users";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
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
									<td><button class="btn-danger" onclick="ChangeUserStatus('<?= $row['user_id'] ?>')">Unapproved</button></td>
								<?php

								} else {
								?>
									<td><button class="btn-success" onclick="ChangeUserStatus('<?= $row['user_id'] ?>')">Approved</button></td>

								<?php
								}
								?>
								<td><a class="bx bx-show-alt" data-href="./adminView/viewUserDetail.php?userID=<?= $row['user_id'] ?>" href="javascript:void(0);"></a></td>
							</tr>
					<?php

						}
					}
					?>
				</tbody>


			</table>

            <tbody>
					<?php
					include_once "../config/dbconnect.php";
					$sql = "SELECT * from winning_prediction";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
					?>
							<tr class="user-data">
								<td><?= $row["S.No"] ?></td>
								<td><?= $row["date"] ?></td>
								<td><?= $row["user_phone"] ?></td>
								<td><?= $row["game_name"] ?></td>
								<td><?= $row["game_type"] ?></td>
								<td><?= $row["session"] ?></td>
								<td><?= $row["open_pana"] ?></td>
								<td><?= $row["open_result"] ?></td>
								<td><?= $row["close_pana"] ?></td>
								<td><?= $row["close_result"] ?></td>
								<td><?= $row["bid_points"] ?></td>
								<td><?= $row["win_points"] ?></td>

							</tr>
					<?php

						}
					}
					?>
				</tbody>
                        <td>S.No</td>
						<td>Date</td>
						<td>User Phone</td>
						<td>Game Name</td>
						<td>Game Type</td>
						<td>Session</td>
						<td>Open Pana</td>
						<td>Open  Result</td>
						<td>Close Pana</td>
						<td>Close result</td>
						<td>Bid Points</td>
						<td>win Points</td>




                        <table class="user-table-data">
			<thead>
				<tr>
					<td>#</td>
					<td>NAME</td>
					<td>Mobile No</td>
					<td>Whats copy</td>
					<td>Date</td>
					<td>Balance</td>
					<td>Transfer</td>
					<td>Active</td>
					<td>View</td>
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


        <section class="input-form">
        <div class="user-table">
            <table class="user-table-data">
                <thead>
                    <tr>
                        <td>#</td>
                        <td>NAME</td>
                        <td>Mobile No</td>
                        <td>Date</td>
                        <td>Ip Address</td>
                        <td>active</td>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once "../config/dbconnect.php";
                    $sql = "SELECT * from users";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            if ($row["user_status"] == 1) {
                    ?>
                                <tr class="user-data">
                                    <td><?= $row["user_id"] ?></td>
                                    <td><?= $row["full_name"] ?></td>
                                    <td><?= $row["contact_no"] ?></td>
                                    <td><?= $row["registered_at"] ?></td>
                                    <td><?= $row["user_ip"] ?></td>
                                    <?php
                                    if ($row["user_status"] == 1) {

                                    ?>
                                        <td><button class="btn-success">Approved</button></td>
                                    <?php

                                    }
                                    ?>
                                </tr>
                    <?php

                            }
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    
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
			<div class="form-win ">
				<label for="">Session</label>
				<br>
				<select name="session" id="session" class="form-control">
					<option value="">Select Option</option>
					<option value=""></option>
					<option value=""></option>
				</select>
			</div>
			<div class="form-dec-btn ">
				<button class="go">Go</button>
			</div>
		</form>
	</section>



	<section class="input-form">
		<div class="user-table">
			<table class="winning-table-data">
				<thead>
					<tr>
						<td>S.No</td>
						<td>Game Name</td>
						<td>Open Time</td>
						<td>Close Time</td>
						<td>Open Result</td>
						<td>Close result</td>
					</tr>
				</thead>
				<tbody>
					<?php
					include_once "../config/dbconnect.php";
					$sql = "SELECT * from declare_result";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()) {
					?>
							<tr class="user-data">
								<td><?= $row["S.No"] ?></td>
								<td><?= $row["game_name"] ?></td>
								<td><?= $row["open_time"] ?></td>
								<td><?= $row["close_time"] ?></td>
								<td><?= $row["open_result"] ?><i class='bx bx-box'></i></td>
								<td><?= $row["close_result"] ?><i class='bx bx-box'></i></td>
							</tr>
					<?php

						}
					}
					?>
				</tbody>
			</table>
		</div>
	</section>
         

    <section class="input-form">
    <div class="user-table">
        <table class="user-table-data">
            <thead>
                <tr>
                    <td>S.No</td>
                    <td>Game NAME</td>
                    <td>Today Open</td>
                    <td>Today closed</td>
                    <!-- <td>Active</td> -->
                    <td>Market Status</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once "../config/dbconnect.php";
                $sql = "SELECT * from game_list";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr class="user-data">
                            <td><?= $row["S.No"] ?></td>
                            <td><?= $row["game_name"] ?></td>
                            <td><?= $row["open_time"] ?></td>
                            <td><?= $row["close_time"] ?></td>
                            <td><?= $row["market_status"] ?></td>
                            <?php
                            if ($row["market_status"] == 0) {

                            ?>
                                <td><button class="btn-danger">Market Close</button></td>
                            <?php

                            } else {
                            ?>
                                <td><button class="btn-success">Market Open</button></td>

                            <?php
                            }
                            ?>
                            <!-- <td><i class='bx bxl-whatsapp'></i> <i class='bx bx-copy'></i></td> -->

                        </tr>
                <?php

                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('.user-table-data').DataTable();
        });
    </script>

</section>