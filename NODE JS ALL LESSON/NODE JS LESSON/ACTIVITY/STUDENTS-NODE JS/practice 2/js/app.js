function afterRequest(response) {
	// TODO	: display the gender in the DOM
	console.log(response);
}


// Perform the GET request with appropriate URL and call the afterRequest function as callback

let nameToTest = "ronan";
const GENDER_URL_BASE = "https://api.genderize.io?name=";
const GENDER_URL = 		// TODO

// Request a GET on GENDER_URL to get the data from the JSON
// Once done the function afterRequest will be called
axios.get(GENDER_URL).then(afterRequest);