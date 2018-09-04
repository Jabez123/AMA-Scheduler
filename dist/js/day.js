// READ records
function readRecords() {
    $.get("monday.php", {}, function (data, status) {
        $(".monday").html(data);
    });
    $.get("tuesday.php", {}, function (data, status) {
        $(".tuesday").html(data);
    });
    $.get("wednesday.php", {}, function (data, status) {
        $(".wednesday").html(data);
    });
    $.get("thursday.php", {}, function (data, status) {
        $(".thursday").html(data);
    });
    $.get("friday.php", {}, function (data, status) {
        $(".friday").html(data);
    });
    $.get("saturday.php", {}, function (data, status) {
        $(".saturday").html(data);
    });
}
$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});