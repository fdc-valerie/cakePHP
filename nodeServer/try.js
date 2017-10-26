

var http = require('http');

var server= http.createServer(function(req,res){
	res.writeHead(200, {"Content-Type":"text/plain"});
	res.end("Welcome to my first Node.js server! :) ");
});

server.listen(1234,function(){
	console.log("Server started..");
});


