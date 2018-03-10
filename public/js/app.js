
function sendData() {
    var XHR = new XMLHttpRequest();

    // Bind the FormData object and the form element
    var FD = new FormData(form);

    
    // Define what happens on successful data submission
    XHR.addEventListener("load", function(event) {
	    if (XHR.status >= 200 && XHR.status < 400) {
	    	
	    	var data =  JSON.parse(event.target.responseText);
		    // Success!
		    if(data.success == true) {
               alert('success');
            } else {
            // We reached our target server, but it returned an error
            alert('error')
            }
    	} else {
    	    // We reached our target server, but it returned an error
    	    alert('error')
    	}
     
    });

    // Define what happens in case of error
    XHR.addEventListener("error", function(event) {
      alert('Something went wrong.');
    });

    // Set up our request
    XHR.open("POST", "upload.php");

    // The data sent is what the user provided in the form
    XHR.send(FD);


}

// Access the form element...
var upload = document.getElementById("upload_image");
var form = document.getElementById("upload_form");

// ...and take over its submit event.
upload.addEventListener("change", function (event) {
	event.preventDefault();

	sendData();
});
