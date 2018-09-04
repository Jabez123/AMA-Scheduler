
// Add Record 
function addRecord() {
    // get values
    var subject = $("#subject").val();
    var section = $("#section").val();
    var room = $("#room").val();
    var professor = $("#professor").val();
    var start = $("#start").val();
    var end = $("#end").val();
    var day = $("#day").val();

    // Add record
    $.post("addRecord.php", {
        subject: subject,
        section: section,
        room: room,
        professor: professor,
        start: start,
        end: end,
        day: day
    }, function (data, status) {
        alert(data);
        // close the popup
        $("#addModal").modal("hide");
        // read records again
        readRecords();

        // clear fields from the popup
        $("#subject").val("");
        $("#section").val("");
        $("#room").val("");
        $("#professor").val("");
        $("#start").val("");
        $("#end").val("");
        $("#day").val("");
    });
}

// READ records
function readRecords() {
    $.get("readRecord.php", {}, function (data, status) {
        $(".records_content").html(data);
    });
}
$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});

function DeleteUser(id) {
    var conf = confirm("Are you sure, do you really want to delete Class?");
    if (conf == true) {
        $.post("deleteRecord.php", {
                id: id
            },
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}

function GetUserDetails(id) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("readRecordDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#update_subject").val(user.subject);
            $("#update_section").val(user.section);
            $("#update_room").val(user.room);
            $("#update_professor").val(user.professor);
            $("#update_start").val(user.start);
            $("#update_end").val(user.end);
            $("#update_day").val(user.day);
        }
    );
    // Open modal popup
    $("#editModal").modal("show");
}

function UpdateUserDetails() {
    // get values
    var subject = $("#update_subject").val();
    var section = $("#update_section").val();
    var room = $("#update_room").val();
    var professor = $("#update_professor").val();
    var start = $("#update_start").val();
    var end = $("#update_end").val();
    var day = $("#update_day").val();
 
    // get hidden field value
    var id = $("#hidden_user_id").val();
 
    // Update the details by requesting to the server using ajax
    $.post("updateRecord.php", {
            id: id,
            subject: subject,
            section: section,
            room: room,
            professor: professor,
            start: start,
            end: end,
            day: day
        },
        function (data, status) {
            // hide modal popup
            $("#editModal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    );
}