(function () {
	var messageSuccess = getQueryParam('message_success');

	//alert("This is yet another test!");

	function getQueryParam (key) {
		var query = window.location.search.substring(),
			parts = query.split('&'),
			pairs = {};

		// THIS ALMOST WORKS... KIND OF... WHATEVER
		for (var i = 0; i < parts.length; i++) {
			var pair = parts[i].split('=');
			pairs[pair[0]] = pair[1];
		}

		return pairs[key];

	}

	console.log(messageSuccess);
}());
