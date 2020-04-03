
function host() {
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

function guest() {
var hostid = document.getElementById("id").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'id=' + guestid;
if (guestid == '') {
alert("Please Fill Out the Field");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxguestjs.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}


function employee() {
var employeeid = document.getElementById("id").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'id=' + employeeid;
if (guestid == '') {
alert("Please Fill Out the Field");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "ajaxemployeejs.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}