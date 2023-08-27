<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\style4.css">
    <link rel="stylesheet" href="assets\css\style6.css">
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

    <!-- <div class="head-title">
        <div class="left">
            <h1>Pages</h1>
        </div>
        <a href="#" class="btn-addlist">
            <i class='bx bx-plus'></i>
            <span class="text">Back To Page</span>
        </a>
    </div> -->


    <!-- <section class="form">
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
                <label for="">Ip Address</label>
                <br>
                <input type="number" name="IpAddress" placeholder="Ip Address">
            </div>
        </form>
    </section> -->



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
                                <th style="min-width:10px;">S.NO</th>
                                <th style="min-width:15px;">Video</th>
                                <th style="min-width:15px;">status</th>
                                <th style="min-width:15px;">action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr class="user-data">
                                <td>1</td>
                                <td>
                                    <div class="video">
                                        <video src="#">video</video>
                                    </div>
                                </td>
                                <td><button class="btn-success">Approved</button></td>
                                <td><i class='bx bx-pencil'></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>