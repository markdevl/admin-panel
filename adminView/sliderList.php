<link rel="stylesheet" href="assets\css\style4.css">
<script>
    $(document).ready(function() {
        var dataTable = $('.user-table-data').DataTable({
            "pageLength": 10,
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': ['nosort'],
            }],
            // columnDefs: [{
            //     type: 'date-dd-mm-yyyy',
            //     aTargets: [5]
            // }],
            "aoColumns": [
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
<div class="head-title">
    <div class="left">
        <h1>Slider</h1>
    </div>
    <a href="#" class="btn-addlist">
        <i class='bx bx-plus'></i>
        <span class="text">Add New Slider</span>
    </a>
</div>

<section class="input-form">
    <div class="main-datatable">
        <div class="user-table">
            <div class="d-flex">
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
                            <th style="min-width:10px;">#</th>
                            <th style="min-width:15px;">image</th>
                            <th style="min-width:10px;">title</th>
                            <th style="min-width:10px;">status</th>
                            <th style="min-width:10px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once "../config/dbconnect.php";
                        $sql = "SELECT * from slider_list";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                                <tr class="user-data">
                                    <td><?= $row["id"] ?></td>
                                    <td><?= $row["image"] ?></td>
                                    <td><?= $row["title"] ?></td>
                                    <?php
                                    if ($row["status"] == 0) {

                                    ?>
                                        <td><button class="btn-danger">Active</button></td>
                                    <?php

                                    } else {
                                    ?>
                                        <td><button class="btn-success">Inactive</button></td>

                                    <?php
                                    }
                                    ?>
                                    <td></td>

                                </tr>
                        <?php

                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>