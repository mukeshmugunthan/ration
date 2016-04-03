
function myFunction() {
var rice = document.getElementById("rice").value;
var wheat = document.getElementById("wheat").value;
var sugar = document.getElementById("sugar").value;
var kerosene = document.getElementById("kerosene").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&rice1=' + rice1 + '&wheat1=' + wheat + '&sugar1=' + sugar + '&kerosene1=' + kerosene;
if (rice == '' || wheat == '' || sugar == '' || kerosene == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "price.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}