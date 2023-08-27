function showSellReportListStarline() {
    $.ajax({
        url: "./adminView/sellReportStarline.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}
function showAnkReport() {
    $.ajax({
        url: "./adminView/ankReport.php",
        method: "post",
        data: { record: 1 },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });

}