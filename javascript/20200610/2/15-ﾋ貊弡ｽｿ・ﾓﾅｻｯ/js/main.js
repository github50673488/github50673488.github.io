let container = document.getElementById("container");
let arrBox=[];
for (let i = 0; i < 10; i++) {

	let box = new Box(container, {
		backgroundColor: 'rgb('+Tools.getRamdon(0,255) +','+Tools.getRamdon(0,255)+','+Tools.getRamdon(0,255) + ')'

	});
	arrBox.push(box);

}

setInterval(function(){
	for (let i = 0; i < 10; i++) {
		arrBox[i].random();
		}
	
},1000)