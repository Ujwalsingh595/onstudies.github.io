
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "No of daily users:"
	},
	axisY:{
		includeZero: false
	},
	data: [{        
		type: "line",
      	indexLabelFontSize: 16,
		dataPoints: [
			{ y: 20 },
			{ y: 34},
			{ y: 40, indexLabel: "\u2191 highest",markerColor: "red", markerType: "triangle" },
			{ y: 20 },
			{ y: 50 },
			{ y: 60 },
			{ y: 80 },
			{ y: 80 },
			{ y: 70 , indexLabel: "\u2193 lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
			{ y: 90 },
			{ y: 80 },
			{ y: 100 }
		]
	}]
});
chart.render();

}


