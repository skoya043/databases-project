
function myFunction() {
var hostid = document.getElementById("id").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'id=' + hostid;
if (hostid == '') {
alert("Please Fill Out the Field");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxhostjs.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}
