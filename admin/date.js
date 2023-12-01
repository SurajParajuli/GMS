// Get the current date
var today = new Date().toISOString().split('T')[0];

// Set the minimum date for the input field
document.getElementById("dDate").min = today;
