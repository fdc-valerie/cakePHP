var events = require("events");
var emitter = new events.EventEmitter();

var uid = "valerie";
var pwd = "gayle";

emitter.on("addUser", function(user, pass){
	console.log("Add user " + user);
});

emitter.emit("addUser", uid, pwd);

uid="daniel";
pwd="kang";
emitter.emit("addUser", uid, pwd);