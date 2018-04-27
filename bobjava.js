var car = {
	colour : ["red", "blue", "green", "yellow"],
	speed : 200,
	engine : { 	gears: 5,
				horsepower: 500,
				pistons: 4,
				fuel: "electric"
			},
	drive: function() {
    return "divvie";
}
};

var list = [
	"balloons",
	"jokes",
	"pinics",
	"water",
	"sugar"
]	

function textred() {
    var x = document.getElementById("redt");
    x.style.color = "red";
	x.style.fontFamily = "Arial";
	x.style.fontSize = "30px";
	x.style.fontWeight = "bold";
	x.style.fontStyle = "italic";
}

function textblue() {
    var x = document.getElementById("bluet");
    x.style.color = "blue";
	x.style.fontFamily = "Calibri";
	x.style.fontSize = "20px";
	x.style.fontWeight = "900";
}

function goBack() {
	window.history.back();
}

function myFunction() {
    var d = new Date();
    var n = d.getDate();
	var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
	var da = weekday[d.getDay()];
	var month = new Array();
	month[0] = "January";
	month[1] = "February";
	month[2] = "March";
	month[3] = "April";
	month[4] = "May";
	month[5] = "June";
	month[6] = "July";
	month[7] = "August";
	month[8] = "September";
	month[9] = "October";
	month[10] = "November";
	month[11] = "December";
	var m = month[d.getMonth()];
	var y = d.getFullYear();
    document.getElementById("demo").innerHTML = n;
	document.getElementById("demod").innerHTML = da;
	document.getElementById("demom").innerHTML = m;
	document.getElementById("demoy").innerHTML = y;
	document.getElementById("dem").innerHTML = d;
	console.log (d, n+"th", da, m, y);
}

function ramdon() {
	window.location.reload();
}

function tea(heat, size, brew) {
	var maketea = "Boil water to " + heat + " degrees ";
	maketea += "pour water into mug with " + size + "ml capcity and over tea bag ";
	maketea += "leave to brew for " + brew + " minutes";
	return maketea;
}

function dolly() {
	var l = "Hello Dolly." + " " + "It's so good to see you back where you belong.";
	document.getElementById("dolly").innerHTML = l;
}

var src = ['images/chara0.png', 'images/chara1.png', 'images/chara2.png'];

function show_image(src, width, height, alt) {
	var img = document.createElement("img");
	img.iup = 2;
	img.src = src[img.iup];
    img.width = width;
    img.height = height;
    img.alt = alt;
    // This next line will just add it to the <body> tag
    document.body.appendChild(img);
}