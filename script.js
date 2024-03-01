$(document).ready(function () {
    $("#searchInput").on("input", function () {
        searchUsers();
        fu
    });
});
function searchUsers() {
    var searchTerm = $("#searchInput").val();

    $.ajax({
        url: "search.php",
        method: "POST",
        data: { searchTerm: searchTerm },
        success: function (response) {
            $("#userData").html(response);
        }
    });
}