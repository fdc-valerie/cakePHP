// var fs=require("fs");
// var file ="sample.txt";

// function readFile(err,data){
// 	if(err) throw err;
// 	console.log(data);
// }
// function status(err, stat){
// 	if(err) throw err;
// 	if(stat.isFile()){
// 		fs.readFile(file,'utf8', readFile);
// 		console.log(err);
// 	}
// }
// function fileExists(exists){
// 	if(exists)
// 		fs.stat(file, status);
// }

// fs.exists(file, fileExists);

//Error Handling
var fs=require("fs");
var domain = require("domain").create();

domain.run(function(){
		fs.readFile("sampl.txt", "utf8", function(error,data){
		if(error){
			throw error;
		}
		console.log(data);
	});
});

domain.on("error", function(error){
	console.log("The exception was caught");
})