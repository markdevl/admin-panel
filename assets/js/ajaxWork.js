
function ChangeUserStatus(id) {
    $.ajax({
        url: "./controller/updateUserStatus.php",
        method: "post",
        data: { record: id },
        success: function (data) {
            alert('User Status updated successfully');
            $('form').trigger('reset');
            showUsers();
        }
    });
}

function ChangeTransferStatus(id) {
    $.ajax({
        url: "./controller/updateTransferStatus.php.",
        method: "post",
        data: { record: id },
        success: function (data) {
            alert('Transfer Status updated successfully');
            $('form').trigger('reset');
            showUsers();
        }
    });
}

function ChangeUnapprovedUserStatus(id) {
    $.ajax({
        url: "./controller/updateUserStatus.php",
        method: "post",
        data: { record: id },
        success: function (data) {
            alert('User Status updated successfully');
            $('form').trigger('reset');
            showunapproved();
        }
    });
}

function showUsers() {
    $.ajax({
        url: "./adminView/userManagement.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

function showUserIp() {
    $.ajax({
        url: "./adminView/user_ip.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

function showmainusers() {
    $.ajax({
        url: "./adminView/userManagement.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

function showunapproved() {
    $.ajax({
        url: "./adminView/unapprovedUser.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}
function showGameList() {
    $.ajax({
        url: "./adminView/gameNameList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}
function showWinPred() {
    $.ajax({
        url: "./adminView/winningPrediction.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

function showDec() {
    $.ajax({
        url: "./adminView/declareResult.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

function showBid() {
    $.ajax({
        url: "./adminView/userBidHistory.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}
function showAddFundReportList() {
    $.ajax({
        url: "./adminView/fundReportList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}
function showWithdReq() {
    $.ajax({
        url: "./adminView/withdrawFundList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}
function showBidRevert() {
    $.ajax({
        url: "./adminView/bidRevert.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}



function shownotification() {
    $.ajax({
        url: "./adminView/notificationList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}


function showAutoDepositHistory() {
    $.ajax({
        url: "./adminView/autoDepositeHistory.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

function showTransferPoint() {
    $.ajax({
        url: "./adminView/transferPoint.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}
function showWithdrawReport() {
    $.ajax({
        url: "./adminView/withdrawReport.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}
function showGameListStarline() {
    $.ajax({
        url: "./adminView/gameNameStarline.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

function showBidHistoryStarline() {
    $.ajax({
        url: "./adminView/bidHistoryStarline.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}

function showResultHistoryStarline() {
    $.ajax({
        url: "./adminView/resultHistoryStarline.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showUserQueries() {
    $.ajax({
        url: "./adminView/userQueries.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}

function showSliderList() {
    $.ajax({
        url: "./adminView/sliderList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}

function showGameRatesListGali() {
    $.ajax({
        url: "./adminView/gameRatesListGali.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}

function showWinningReportList() {
    $.ajax({
        url: "./adminView/winningReportList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showWinningReportStarline() {
    $.ajax({
        url: "./adminView/winningReportStarline.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showWinningPredictionStar() {
    $.ajax({
        url: "./adminView/winningPredictionStarline.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
    
}
function showGameListGali() {
    $.ajax({
        url: "./adminView/gameNameListGali.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showBidHistoryListGali() {
    $.ajax({
        url: "./adminView/bidHistoryGali.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showResultHistoryGali() {
    $.ajax({
        url: "./adminView/bidHistoryGali.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showWinningReportGali() {
    $.ajax({
        url: "./adminView/bidHistoryGali.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showWinningPredictionGali() {
    $.ajax({
        url: "./adminView/winningPredictionGali.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}

function showApkManager() {
    $.ajax({
        url: "./adminView/apkManager.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showAppImage() {
    $.ajax({
        url: "./adminView/appImage.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showBanner() {
    $.ajax({
        url: "./adminView/banner.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function ShowPage() {
    $.ajax({
        url: "./adminView/page.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showVideo() {
    $.ajax({
        url: "./adminView/video.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showSettingList() {
    $.ajax({
        url: "./adminView/settingList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showGroupRoles() {
    $.ajax({
        url: "./adminView/groupRoles.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showAdminList() {
    $.ajax({
        url: "./adminView/adminList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showDeclareResultListGali() {
    $.ajax({
        url: "./adminView/declareResultGali.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showDeclareResultListStarline() {
    $.ajax({
        url: "./adminView/declareResultStarline.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showGameRatesListStarline() {
    $.ajax({
        url: "./adminView/gameRatesListStarline.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showGameRatesList(){
    $.ajax({
        url: "./adminView/gameRatesList.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showSellReportListGali() {
    $.ajax({
        url: "./adminView/sellReportGali.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showSinglePana() {
    $.ajax({
        url: "./adminView/singlePana.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

    
}
function showDoublePana() {
    $.ajax({
        url: "./adminView/doublePana.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showTriplePana() {
    $.ajax({
        url: "./adminView/triplePana.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showSingleDigit() {
    $.ajax({
        url: "./adminView/singleDigit.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showJodiDigit() {
    $.ajax({
        url: "./adminView/jodiDigit.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showFundReq() {
    $.ajax({
        url: "./adminView/fundRequestlist.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showBidWinningReport() {
    $.ajax({
        url: "./adminView/bidWinningReport.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showAddFund() {
    $.ajax({
        url: "./adminView/addFund.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}
