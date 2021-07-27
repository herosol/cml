Highcharts.chart("pie", {
	chart: {
		plotBackgroundColor: null,
		plotBorderWidth: 0,
		spacingTop: -80,
		spacingBottom: -100,
		plotShadow: false
	},
	title: {
		text: ""
	},
	tooltip: {
		enabled: false
	},
	plotOptions: {
		pie: {
			dataLabels: {
				enabled: false
			},
			states: {
				inactive: {
					opacity: 1
				},
				hover: {
					enabled: false
				}
			},
			startAngle: -90,
			endAngle: 90,
			center: ["50%", "75%"],
			size: "100%"
		}
	},
	series: [
		{
			type: "pie",
			name: "",
			innerSize: "95%",
			data: [
				58.9,
				13.29,
				13,
				3.78,
				3.42,
				{
					name: "",
					y: 7.61,
					dataLabels: {
						enabled: false
					}
				}
			]
		}
	]
});
