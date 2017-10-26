// var events = require("events");
// var EventEmitter = events.EventEmitter;

// var emitter = new EventEmitter();

// emitter.on("myEvent", function(){
// 	console.log("Task 1");
// });

// emitter.on("myEvent", function(){
// 	console.log("Task 2");
// });

// emitter.emit("myEvent");

// console.log(EventEmitter.listenerCount(emitter,"myEvent"));

//anonymous function sample:
var events = require("events");
var emitter = new events.EventEmitter();
function handler(){
	console.log("Gwapa daw ko");
}
emitter.on("myEvent", handler);
emitter.emit("myEvent");
emitter.removeListener("myEvent", handler);
emitter.emit("myEvent");