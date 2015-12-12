<?php
	function myAssoc() {
		$connection = mysqli_connect("localhost", "root", "abc123", "thrtbx_db");
		if(!$connection) {
			if(this.__DIR__ == null) {
				die("Couldn't connect to the database. Please check your network.");
			}
		}
	}

?>
<!doctype html>
<html>
	<head><title>Testing speed connection...</title></head>
	<body>You're now in the 8080 tunnel</body>
<script>
	//we are using facebook's BigPipe function
	//to speed up the internet connection
	//between the client and the server
	'use strict';
	var bigpipe = require('bigpipe');
	var bigpipe = BigPipe.createServer(443, {
  		key: fs.readFileSync(__dirname +'/ssl.key', 'utf-8'),
  		cert: fs.readFileSync(__dirname +'/ssl.cert', 'utf-8'),
		redirect: 80
	});
	bigpipe.listen('8080', function listening() {
		console.log("Yeayy, we're listening to port 8080!");
	});
	console.log(bigpipe.version);
	bigpipe.define('../pagelets', done(err) {
		
	});
	var connection = bigpipe.key;
	if(connection == '0') {
		console.log("Sorry to hear that your internet connection are being taken down. Please check your network connection again.");
	}
</script>