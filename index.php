<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer type="text/javascript" src="./assets/js/ajaxWork.js"></script>
    <script defer type="text/javascript" src="./assets/js/ajaxWork2.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script defer src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script defer src="assets\js\script.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\style2.css">
    <title>Admin</title>
</head>

<body>
    <?php
    include_once "./config/dbconnect.php";
    ?>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand"><i class='bx bxs-smile icon'></i>AdminHub</a>
        <ul class="side-menu">
            <li><a href="./index.php" class="active"><i class='bx bxs-dashboard icon'></i>
                    Dashboard</a></li>
            <li class="divider" data-text="main">Main</li>
            <li><a href="#AnkReport" onclick="showAnkReport()"><i class='bx bxs-file-blank icon'></i> Ank Report</a></li>
            <li><a href="#UserManagement" onclick="showUsers()"><i class='bx bxs-user icon'></i> User Management</a></li>
            <li><a href="#UserIp" onclick="showUserIp()"><i class='bx bxs-devices icon'></i> User Ip Report</a></li>
            <li>
                <a href="#"><i class='bx bxs-cube-alt icon'></i>Games Management<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#Gamelist" id="gamelist" onclick="showGameList()">Game Name List</a></li>
                    <li><a href="#GameRateList" onclick="showGameRatesList()">Game Rate List</a></li>
                </ul>

            </li>
            <li><a href="#DeclareResult" onclick="showDec()"><i class='bx bxs-chart icon'></i>Declare Result</a></li>
            <li><a href="#WinningPrediction" onclick="showWinPred()"><i class='bx bx-list-ul icon'></i>Winning Prediction</a></li>
            <li>
                <a href="#"><i class='bx bxs-book icon'></i>Report Management<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#UserBidHistory" onclick="showBid()">Userbid history List</a></li>
                    <li><a href="#">Customer Sell Report</a></li>
                    <li><a href="#WinningReportList" onclick="showWinningReportList()">Winning Report List</a></li>
                    <li><a href="#TransferPoint" onclick="showTransferPoint()">Transfer Point Report</a></li>
                    <li><a href="#BidWinningReport" onclick="showBidWinningReport()">Bid Winning Report</a></li>
                    <li><a href="#WithdrawReport" onclick="showWithdrawReport()">Withdraw Report List</a></li>
                    <li><a href="#AddFundReport" onclick="showAddFundReportList()">Add Fund Report List</a></li>
                    <li><a href="#AutoDepositeHistory" onclick="showAutoDepositHistory()">Auto Deposite History</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-wallet-alt icon'></i>Wallet Management<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#FundRequest" onclick="showFundReq()">Fund Request List</a></li>
                    <li><a href="#WithdrawRequest" onclick="showWithdReq()">Withdraw Request List</a></li>
                    <li><a href="#AddFund" onclick="showAddFund()">Add fund</a></li>
                    <li><a href="#BidRevert" onclick="showBidRevert()">Bid Revert</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-pyramid icon'></i>Games And Number <i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#SingleDigit" onclick="showSingleDigit()">Single Digit</a></li>
                    <li><a href="#JodiDigit" onclick="showJodiDigit()">Jodi Digit</a></li>
                    <li><a href="#SinglePana" onclick="showSinglePana()">Sinle Panna</a></li>
                    <li><a href="#DoublePana" onclick="showDoublePana()">Double Panna</a></li>
                    <li><a href="#TriplePana" onclick="showTriplePana()">Triple Panna</a></li>
                    <li><a href="#">Half Sangam</a></li>
                    <li><a href="#">Full Sangam</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-error-alt icon'></i>Notice Management<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#Notification" onclick="shownotification()">Notice List</a></li>
                    <li><a href="#NoticeAdd" onclick="showAddNotification()">Notice Add</a></li>
                </ul>

            </li>
            <li>
                <a href="#"><i class='bx bxs-component icon'></i>Starline Management<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#GameList" onclick="showGameListStarline()">Game Name List</a></li>
                    <li><a href="#GameRatesList" onclick="showGameRatesListStarline()">Game Rates List</a></li>
                    <li><a href="#BidHistory" onclick="showBidHistoryStarline()">Bid History List</a></li>
                    <li><a href="#DeclareList" onclick="showDeclareResultListStarline()">Declare Result List</a></li>
                    <li><a href="#ResultHistory" onclick="showResultHistoryStarline()">Result History List</a></li>
                    <li><a href="#SellReportList" onclick="showSellReportListStarline()">Sell Report List</a></li>
                    <li><a href="#WinningReportList" onclick="showWinningReportStarline()">Winning Report List</a></li>
                    <li><a href="#WinningPredictionList" onclick="showWinningPredictionStar()">Winning Prediction List</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-receipt icon'></i>Gali Disawar Management<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#GameList_Gali" onclick="showGameListGali()">Game Name List</a></li>
                    <li><a href="#GameRatesList" onclick="showGameRatesListGali()">Game Rates List</a></li>
                    <li><a href="#BidHistory_Gali" onclick="showBidHistoryListGali()">Bid History List</a></li>
                    <li><a href="#DeclareResultList" onclick="showDeclareResultListGali()">Declare Result List</a></li>
                    <li><a href="#ResultHistory_Gali" onclick="showResultHistoryGali()">Result History List</a></li>
                    <li><a href="#SellReportList" onclick="showSellReportListGali()">Sell Report List</a></li>
                    <li><a href="#WinningReport_Gali" onclick="showWinningReportGali()">Winning Report List</a></li>
                    <li><a href="#WinningPrediction_Gali" onclick="showWinningPredictionGali()">Winning Prediction List</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bxs-shield-alt-2 icon'></i>web Setting<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#Banner" onclick="showBanner()">Banner</a></li>
                    <li><a href="#AppImage" onclick="showAppImage()">App Image</a></li>
                    <li><a href="#ApkManager" onclick="showApkManager()">Apk Manager</a></li>
                    <li><a href="#Video" onclick="showVideo()">Video</a></li>
                    <li><a href="#Page" onclick="ShowPage()">Page</a></li>

                </ul>
            </li>
            <li><a href="#UserQueries" onclick="showUserQueries()"><i class='bx bxs-chat icon'></i>User_queries</a></li>
            <li>
                <a href="#"><i class='bx bxs-cog icon'></i>Setting<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#AccountList" onclick="showAccountList()">Account List</a></li>
                    <li><a href="#SettingList" onclick="showSettingList()">Setting List</a></li>
                    <li><a href="SliderList" onclick="showSliderList()">Slider List</a></li>
                    <li><a href="#HowToPlay" onclick="showHowToPlay()">How To Play List</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class='bx bx-sitemap icon'></i>Admin & Roles Modules<i class='bx bx-chevron-right icon-right'></i></a>
                <ul class="side-dropdown">
                    <li><a href="#GroupRoles" onclick="showGroupRoles()">Admin Group Roles</a></li>
                    <li><a href="#AdminList" onclick="showAdminList()">Admin List</a></li>
                    <li><a href="#">Admin Add</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- NAVBAR -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>
            <span class="divider"></span>
            <div class="profile">
                <img src="assets\images\profile.png">
                <ul class="profile-link">
                    <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
                    <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
                    <li><a href="logout.php"><i class='bx bxs-log-out-circle'></i> Logout</a></li>
                </ul>
            </div>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main class="allContent-section py-4">
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Home</a>
                        </li>
                    </ul>
                </div>
            </div>
            <ul class="box-info">
                <li>
                    <i class='bx bxs-group'></i>
                    <span class="text">
                        <h3><?php
                            $sql = "SELECT * from users";
                            $result = $conn->query($sql);
                            $count = 0;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {

                                    $count = $count + 1;
                                }
                            }
                            echo $count;
                            ?></h3>
                        <p>Total Users</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3><?php

                            $sql = "SELECT * from users Where user_status=0";
                            $result = $conn->query($sql);
                            $count = 0;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {

                                    $count = $count + 1;
                                }
                            }
                            echo $count;
                            ?></h3>
                        <p>Unapproved Users</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-game'></i>
                    <span class="text">
                        <h3><?php

                            $sql = "SELECT * from game_list";
                            $result = $conn->query($sql);
                            $count = 0;
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {

                                    $count = $count + 1;
                                }
                            }
                            echo $count;
                            ?></h3>
                        <p>Total Games</p>
                    </span>
                </li>
                <li>
                    <i class='bx bx-rupee'></i>
                    <span class="text">
                        <h3>3345</h3>
                        <p>Total Bids</p>
                    </span>
                </li>
            </ul>

        </main>
        <!-- MAIN -->
    </section>
    <!-- NAVBAR -->
</body>

</html>