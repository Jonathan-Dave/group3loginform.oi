

//Function to calculatee age

function calculateAge() {

	//get the dirthdate
	var birthdate = document.getElementById("birthdate").value;

	//Create a formdata object to send data to the Php file
	var formData = new FormData();
	formData.append('birthdate', birthdate);

	//send the birthdate to the php file using AJAX
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'server.php', true);
	xhr.onload =function() {
		if (xhr.status == 200) {
			//Display the result in the result
			document.getElementById("result").innerHTML = xhr.responseText;

		}
	};
	xhr.send(formData);

}