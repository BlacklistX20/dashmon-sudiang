import { charts, createChart, toggleActive, getFormattedTimes, splitArrayData, getMinData, getMaxData } from "./func.js";

$(document).ready(function () {
	$("a[id=electric]").addClass("active");
	$("#date").text(namaHari + ", " + tgl);
	$('#dataSelect').change(function () {
		// Get the selected option
		const selectedAction = $(this).find(':selected').data('action');
		// Update the form's action attribute
		$('#downloadData').attr('action', baseUrl + selectedAction || '#');
	});
}, startTime());

const lastId = [];
const updateId = [];
const nameId = [
	"pue", "lvmdp", "it", "recti", "ups",
	"p205", "p236", "p305", "p310", "p429",
	"ups202", "ups203", "ups301", "ups302",
	"ups501", "ups502"
];

var pueElectric = document.getElementById("pueChart");
createChart('chartPue', pueElectric, 'line', {
	labels: [],
	datasets: []
},
	{
		maintainAspectRatio: false,
		responsive: true,
		plugins: {
			datalabels: {
				display: false
			},
			legend: {
				display: false,
			},
			title: {
				display: true,
			},
		},
		elements: {
			line: {
				tension: 0.3,
				fill: true,
			},
			point: {
				radius: 5,
				hitRadius: 20,
			}
		},
	});

var lvmdpElectric = document.getElementById("lvmdpChart");
createChart('chartLvmdp', lvmdpElectric, 'line', {
	labels: [],
	datasets: []
},
	{
		maintainAspectRatio: false,
		responsive: true,
		plugins: {
			datalabels: {
				display: false
			},
			legend: {
				display: false,
			},
			title: {
				display: true,
			},
		},
		elements: {
			line: {
				tension: 0.3,
				fill: true,
			},
			point: {
				radius: 5,
				hitRadius: 20,
			}
		},
	});

var itElectric = document.getElementById("itChart");
createChart('chartIt', itElectric, 'line', {
	labels: [],
	datasets: []
},
	{
		maintainAspectRatio: false,
		responsive: true,
		plugins: {
			datalabels: {
				display: false
			},
			legend: {
				display: false,
			},
			title: {
				display: true,
			},
		},
		elements: {
			line: {
				tension: 0.3,
				fill: true,
			},
			point: {
				radius: 5,
				hitRadius: 20,
			}
		},
	});

var rectiElectric = document.getElementById("rectiChart");
createChart('chartRecti', rectiElectric, 'line', {
	labels: [],
	datasets: []
},
	{
		maintainAspectRatio: false,
		responsive: true,
		plugins: {
			datalabels: {
				display: false
			},
			legend: {
				display: false,
			},
			title: {
				display: true,
			},
		},
		elements: {
			line: {
				tension: 0.3,
				fill: true,
			},
			point: {
				radius: 5,
				hitRadius: 20,
			}
		},
	});

var panelRecti = document.getElementById("panelRectiChart");
createChart('chartPanelRecti', panelRecti, 'bar', {
	labels: [],
	datasets: []
},
	{
		maintainAspectRatio: false,
		responsive: true,
		scales: {
			x: {
				barPercentage: 0.5,
				categoryPercentage: 0.1,
			},
		},
		plugins: {
			datalabels: {
				display: false
			},
			legend: {
				display: false,
			},
			title: {
				display: true,
			},
		},
	});

var upsElectric = document.getElementById("upsChart");
createChart('chartUps', upsElectric, 'line', {
	labels: [],
	datasets: []
},
	{
		maintainAspectRatio: false,
		responsive: true,
		plugins: {
			datalabels: {
				display: false
			},
			legend: {
				display: false,
			},
			title: {
				display: true,
			},
		},
		elements: {
			line: {
				tension: 0.3,
				fill: true,
			},
			point: {
				radius: 5,
				hitRadius: 20,
			}
		},
	});

var panelUps = document.getElementById("panelUpsChart");
createChart('chartPanelUps', panelUps, 'bar', {
	labels: [],
	datasets: []
},
	{
		maintainAspectRatio: false,
		responsive: true,
		scales: {
			x: {
				barPercentage: 0.8,
				categoryPercentage: 0.9,
			},
		},
		plugins: {
			datalabels: {
				display: false
			},
			legend: {
				display: false,
			},
			title: {
				display: true,
			},
		},
	});

async function setValue() {
	let data = await $.ajax({
		url: baseUrl + "data/electric/value",
		dataType: "json",
	})

	data.forEach(item => {
		const card = $(`#${item.name}Card`);
		if (item.status === 'D') {
			card.addClass('bg-danger text-white');
		} else {
			card.removeClass('bg-danger text-white');
		}
	});

	$('#pue').text(data[0].loads);
	$('#pueDate').text(data[0].last_update);

	for (let i = 1; i < data.length; i++) {
		const item = data[i]; // Current data entry
		const name = item.name; // Use the `name` field to construct IDs

		$(`#${name}Load`).text(item.loads);
		$(`#${name}Voltage`).text(item.voltage);
		$(`#${name}Current`).text(item.current);
		$(`#${name}Freq`).text(item.frequency);
		$(`#${name}Date`).text(item.last_update);
	}
}

async function setChart() {
	let data = await $.ajax({
		url: baseUrl + "data/electric/chartHour",
		dataType: "json",
	})

	// nameId.forEach((id) => {
	// 	lastId.push(parseFloat(data[id][11]['id']));
	// });

	const labelPue = getFormattedTimes(data.pue);
	const labelLvmdp = getFormattedTimes(data.lvmdp);
	const labelIt = getFormattedTimes(data.it);
	const labelRecti = getFormattedTimes(data.recti);
	const labelP205 = getFormattedTimes(data.p205);
	const labelUps = getFormattedTimes(data.ups);
	const labelUps202 = getFormattedTimes(data.ups202);

	const dataPue = splitArrayData(data.pue, 'pue');
	const dataLvmdp = splitArrayData(data.lvmdp, 'loads');
	const dataIt = splitArrayData(data.it, 'loads')
	const dataRecti = splitArrayData(data.recti, 'loads');
	const dataP205 = splitArrayData(data.p205, 'loads');
	const dataP236 = splitArrayData(data.p236, 'loads');
	const dataP305 = splitArrayData(data.p305, 'loads');
	const dataP310 = splitArrayData(data.p310, 'loads');
	const dataP429 = splitArrayData(data.p429, 'loads');
	const dataPanelRecti = [...dataP205, ...dataP236, ...dataP305, ...dataP310, ...dataP429];
	const dataUps = splitArrayData(data.ups, 'loads');
	const dataUps202 = splitArrayData(data.ups202, 'loads');
	const dataUps203 = splitArrayData(data.ups203, 'loads');
	const dataUps301 = splitArrayData(data.ups301, 'loads');
	const dataUps302 = splitArrayData(data.ups302, 'loads');
	const dataUps501 = splitArrayData(data.ups501, 'loads');
	const dataUps502 = splitArrayData(data.ups502, 'loads');
	const dataPanelUps = [...dataUps202, ...dataUps203, ...dataUps301, ...dataUps302, ...dataUps501, ...dataUps502];
	const backgroundColors = [
		'rgba(255, 87, 51)',  // Red
		'rgba(255, 141, 51)', // Orange
		'rgba(255, 195, 0)',  // Yellow
		'rgba(51, 255, 87)',  // Green
		'rgba(51, 133, 255)', // Blue
		'rgba(168, 51, 255)'  // Purple
	];

	charts['chartPue'].data.labels = labelPue;
	charts['chartPue'].data.datasets[0] = { data: dataPue, backgroundColor: "rgba(245, 37, 37, 0.5)" };
	charts['chartPue'].options.plugins.title = {
		font: {
			size: 20,
		},
		text: 'Pue (1 Jam)',
		display: true,
	}
	charts['chartPue'].options.scales['y'] = {
		min: 1.5,
		max: 2
	};
	charts['chartPue'].update();

	charts['chartLvmdp'].data.labels = labelLvmdp;
	charts['chartLvmdp'].data.datasets[0] = { data: dataLvmdp, backgroundColor: "rgba(245, 37, 37, 0.5)" };
	charts['chartLvmdp'].options.plugins.title = {
		font: {
			size: 20,
		},
		text: 'LVMDP (1 Jam)',
		display: true,
	}
	charts['chartLvmdp'].options.scales['y'] = {
		ticks: {
			font: {
				size: 12,
			},
			callback: function (value) {
				return value + " kVA";
			},
		},
		beginAtZero: true,
		min: getMinData(dataLvmdp) - 20,
		max: getMaxData(dataLvmdp) + 20
	};
	charts['chartLvmdp'].update();

	charts['chartIt'].data.labels = labelIt;
	charts['chartIt'].data.datasets[0] = { data: dataIt, backgroundColor: "rgba(245, 37, 37, 0.5)" };
	charts['chartIt'].options.plugins.title = {
		font: {
			size: 20,
		},
		text: 'IT (1 Jam)',
		display: true,
	}
	charts['chartIt'].options.scales['y'] = {
		ticks: {
			font: {
				size: 12,
			},
			callback: function (value) {
				return value + " kVA";
			},
		},
		beginAtZero: true,
		min: getMinData(dataIt) - 10,
		max: getMaxData(dataIt) + 10
	};
	charts['chartIt'].update();

	charts['chartRecti'].data.labels = labelRecti;
	charts['chartRecti'].data.datasets[0] = { data: dataRecti, backgroundColor: "rgba(245, 37, 37, 0.5)" };
	charts['chartRecti'].options.plugins.title = {
		font: {
			size: 20,
		},
		text: 'Rectifier',
		display: true,
	}
	charts['chartRecti'].options.scales['y'] = {
		ticks: {
			font: {
				size: 12,
			},
			callback: function (value) {
				return value + " kVA";
			},
		},
		beginAtZero: true,
		min: getMinData(dataRecti) - 20,
		max: getMaxData(dataRecti) + 20
	};
	charts['chartRecti'].update();

	charts['chartPanelRecti'].data.labels = labelP205;
	charts['chartPanelRecti'].data.datasets[0] = {
		label: 'Panel 2.05',
		backgroundColor: backgroundColors[0],
		borderColor: backgroundColors[0],
		data: dataP205,
	};
	charts['chartPanelRecti'].data.datasets[1] = {
		label: 'Panel 2.36',
		backgroundColor: backgroundColors[1],
		borderColor: backgroundColors[1],
		data: dataP236,
	};
	charts['chartPanelRecti'].data.datasets[2] = {
		label: 'Panel 3.05',
		backgroundColor: backgroundColors[2],
		borderColor: backgroundColors[2],
		data: dataP305,
	};
	charts['chartPanelRecti'].data.datasets[3] = {
		label: 'Panel 3.10',
		backgroundColor: backgroundColors[3],
		borderColor: backgroundColors[3],
		data: dataP310,
	};
	charts['chartPanelRecti'].data.datasets[4] = {
		label: 'Panel 4.29',
		backgroundColor: backgroundColors[4],
		borderColor: backgroundColors[4],
		data: dataP429,
	};
	charts['chartPanelRecti'].options.plugins.title = {
		font: {
			size: 20,
		},
		text: 'Panel Rectifier',
		display: true,
	}
	charts['chartPanelRecti'].options.plugins.legend.display = true;
	charts['chartPanelRecti'].options.scales['y'] = {
		ticks: {
			font: {
				size: 12,
			},
			callback: function (value) {
				return value + " kVA";
			},
		},
		beginAtZero: true,
		max: getMaxData(dataPanelRecti) + 10
	};
	charts['chartPanelRecti'].update();

	charts['chartUps'].data.labels = labelUps;
	charts['chartUps'].data.datasets[0] = { data: dataUps, backgroundColor: "rgba(245, 37, 37, 0.5)" };
	charts['chartUps'].options.plugins.title = {
		font: {
			size: 20,
		},
		text: 'UPS',
		display: true,
	}
	charts['chartUps'].options.scales['y'] = {
		ticks: {
			font: {
				size: 12,
			},
			callback: function (value) {
				return value + " kVA";
			},
		},
		beginAtZero: true,
		min: getMinData(dataUps) - 20,
		max: getMaxData(dataUps) + 20
	};
	charts['chartUps'].update();

	charts['chartPanelUps'].data.labels = labelUps202;
	charts['chartPanelUps'].data.datasets[0] = {
		label: 'UPS 2.02',
		backgroundColor: backgroundColors[0],
		borderColor: backgroundColors[0],
		data: dataUps202,
	};
	charts['chartPanelUps'].data.datasets[1] = {
		label: 'UPS 2.03',
		backgroundColor: backgroundColors[1],
		borderColor: backgroundColors[1],
		data: dataUps203,
	};
	charts['chartPanelUps'].data.datasets[2] = {
		label: 'UPS 3.01',
		backgroundColor: backgroundColors[2],
		borderColor: backgroundColors[2],
		data: dataUps301,
	};
	charts['chartPanelUps'].data.datasets[3] = {
		label: 'UPS 3.02',
		backgroundColor: backgroundColors[3],
		borderColor: backgroundColors[3],
		data: dataUps302,
	};
	charts['chartPanelUps'].data.datasets[4] = {
		label: 'UPS 5A',
		backgroundColor: backgroundColors[4],
		borderColor: backgroundColors[4],
		data: dataUps501,
	};
	charts['chartPanelUps'].data.datasets[5] = {
		label: 'UPS 5B',
		backgroundColor: backgroundColors[5],
		borderColor: backgroundColors[5],
		data: dataUps502,
	};
	charts['chartPanelUps'].options.plugins.title = {
		font: {
			size: 20,
		},
		text: 'Panel UPS',
		display: true,
	}
	charts['chartPanelUps'].options.plugins.legend.display = true;
	charts['chartPanelUps'].options.scales['y'] = {
		ticks: {
			font: {
				size: 12,
			},
			callback: function (value) {
				return value + " kVA";
			},
		},
		beginAtZero: true,
		max: getMaxData(dataPanelUps) + 10
	};
	charts['chartPanelUps'].update();
}

async function setChartHour(name) {
	let data = await $.ajax({
		url: baseUrl + "data/electric/chartHour",
		dataType: "json",
	});

	const labelPue = getFormattedTimes(data.pue);
	const labelLvmdp = getFormattedTimes(data.lvmdp);
	const labelIt = getFormattedTimes(data.it);

	const dataPue = splitArrayData(data.pue, 'pue');
	const dataLvmdp = splitArrayData(data.lvmdp, 'loads');
	const dataIt = splitArrayData(data.it, 'loads');

	let labels, chartData;
	if (name === "Pue") {
		labels = labelPue;
		chartData = dataPue;
	} else if (name === "Lvmdp") {
		labels = labelLvmdp;
		chartData = dataLvmdp;
	} else if (name === "It") {
		labels = labelIt;
		chartData = dataIt;
	} else {
		console.error("Invalid chart name!");
		return;
	}

	charts['chart' + name].data.labels = labels;
	charts['chart' + name].data.datasets[0] = { data: chartData, backgroundColor: "rgba(245, 37, 37, 0.5)" };
	charts['chart' + name].options.plugins.title.text = `${name} (1 Jam)`;

	if (name === "Lvmdp" || name === "It") {
		charts['chart' + name].options.scales['y'] = {
			ticks: {
				font: {
					size: 12,
				},
				callback: function (value) {
					return value + " kVA";
				},
			},
			beginAtZero: true,
			min: getMinData(chartData) - (name === "Lvmdp" ? 20 : 10),
			max: getMaxData(chartData) + (name === "Lvmdp" ? 20 : 10),
		};
	} else if (name === "Pue") {
		charts['chartPue'].options.scales['y'] = {
			min: 1.5,
			max: 2,
		};
	}

	charts['chart' + name].update();
}

async function setChartDay(name) {
	let data = await $.ajax({
		url: baseUrl + "data/electric/chartDay",
		dataType: "json",
	})

	const labelPue = getFormattedTimes(data.pue);
	const labelLvmdp = getFormattedTimes(data.lvmdp);
	const labelIt = getFormattedTimes(data.it);

	const dataPue = splitArrayData(data.pue, 'pue');
	const dataLvmdp = splitArrayData(data.lvmdp, 'loads');
	const dataIt = splitArrayData(data.it, 'loads')

	let labels, chartData;
	if (name === "Pue") {
		labels = labelPue;
		chartData = dataPue;
	} else if (name === "Lvmdp") {
		labels = labelLvmdp;
		chartData = dataLvmdp;
	} else if (name === "It") {
		labels = labelIt;
		chartData = dataIt;
	} else {
		console.error("Invalid chart name!");
		return;
	}

	charts['chart' + name].data.labels = labels;
	charts['chart' + name].data.datasets[0] = { data: chartData, backgroundColor: "rgba(245, 37, 37, 0.5)" };
	charts['chart' + name].options.plugins.title.text = `${name} (1 Jam)`;

	if (name === "Lvmdp" || name === "It") {
		charts['chart' + name].options.scales['y'] = {
			ticks: {
				font: {
					size: 12,
				},
				callback: function (value) {
					return value + " kVA";
				},
			},
			beginAtZero: true,
			min: getMinData(chartData) - (name === "Lvmdp" ? 20 : 10),
			max: getMaxData(chartData) + (name === "Lvmdp" ? 20 : 10),
		};
	} else if (name === "Pue") {
		charts['chartPue'].options.scales['y'] = {
			min: 1.5,
			max: 2,
		};
	}

	charts['chart' + name].update();
}

async function setChartWeek(name) {
	let data = await $.ajax({
		url: baseUrl + "data/electric/chartWeek",
		dataType: "json",
	})

	const labelPue = getFormattedTimes(data.pue);
	const labelLvmdp = getFormattedTimes(data.lvmdp);
	const labelIt = getFormattedTimes(data.it);

	const dataPue = splitArrayData(data.pue, 'pue');
	const dataLvmdp = splitArrayData(data.lvmdp, 'loads');
	const dataIt = splitArrayData(data.it, 'loads')

	let labels, chartData;
	if (name === "Pue") {
		labels = labelPue;
		chartData = dataPue;
	} else if (name === "Lvmdp") {
		labels = labelLvmdp;
		chartData = dataLvmdp;
	} else if (name === "It") {
		labels = labelIt;
		chartData = dataIt;
	} else {
		console.error("Invalid chart name!");
		return;
	}

	charts['chart' + name].data.labels = labels;
	charts['chart' + name].data.datasets[0] = { data: chartData, backgroundColor: "rgba(245, 37, 37, 0.5)" };
	charts['chart' + name].options.plugins.title.text = `${name} (1 Jam)`;

	if (name === "Lvmdp" || name === "It") {
		charts['chart' + name].options.scales['y'] = {
			ticks: {
				font: {
					size: 12,
				},
				callback: function (value) {
					return value + " kVA";
				},
			},
			beginAtZero: true,
			min: getMinData(chartData) - (name === "Lvmdp" ? 20 : 10),
			max: getMaxData(chartData) + (name === "Lvmdp" ? 20 : 10),
		};
	} else if (name === "Pue") {
		charts['chartPue'].options.scales['y'] = {
			min: 1.5,
			max: 2,
		};
	}

	charts['chart' + name].update();
}

async function updateChartHour(name) {
	let data = await $.ajax({
		url: baseUrl + "data/electric/chartHour",
		dataType: "json",
	})

	const labelPue = getFormattedTimes(data.pue);
	const labelLvmdp = getFormattedTimes(data.lvmdp);
	const labelIt = getFormattedTimes(data.it);

	const dataPue = splitArrayData(data.pue, 'pue');
	const dataLvmdp = splitArrayData(data.lvmdp, 'loads');
	const dataIt = splitArrayData(data.it, 'loads')

	let labels, chartData;
	if (name === "Pue") {
		labels = labelPue;
		chartData = dataPue;
	} else if (name === "Lvmdp") {
		labels = labelLvmdp;
		chartData = dataLvmdp;
	} else if (name === "It") {
		labels = labelIt;
		chartData = dataIt;
	} else {
		console.error("Invalid chart name!");
		return;
	}

	charts['chart' + name].data.labels.shift();
	charts['chart' + name].data.labels.push(labels[labels.length - 1]);
	charts['chart' + name].data.datasets[0].data.shift();
	charts['chart' + name].data.datasets[0].data.push(chartData[chartData.length - 1]);
	charts['chart' + name].update();
}

async function updateChartDay(name) {
	let data = await $.ajax({
		url: baseUrl + "data/electric/chartDay",
		dataType: "json",
	})

	const labelPue = getFormattedTimes(data.pue);
	const labelLvmdp = getFormattedTimes(data.lvmdp);
	const labelIt = getFormattedTimes(data.it);

	const dataPue = splitArrayData(data.pue, 'pue');
	const dataLvmdp = splitArrayData(data.lvmdp, 'loads');
	const dataIt = splitArrayData(data.it, 'loads')

	let labels, chartData;
	if (name === "Pue") {
		labels = labelPue;
		chartData = dataPue;
	} else if (name === "Lvmdp") {
		labels = labelLvmdp;
		chartData = dataLvmdp;
	} else if (name === "It") {
		labels = labelIt;
		chartData = dataIt;
	} else {
		console.error("Invalid chart name!");
		return;
	}

	charts['chart' + name].data.labels.shift();
	charts['chart' + name].data.labels.push(labels[labels.length - 1]);
	charts['chart' + name].data.datasets[0].data.shift();
	charts['chart' + name].data.datasets[0].data.push(chartData[chartData.length - 1]);
	charts['chart' + name].update();
}

async function updateChartWeek(name) {
	let data = await $.ajax({
		url: baseUrl + "data/electric/chartWeek",
		dataType: "json",
	})

	const labelPue = getFormattedTimes(data.pue);
	const labelLvmdp = getFormattedTimes(data.lvmdp);
	const labelIt = getFormattedTimes(data.it);

	const dataPue = splitArrayData(data.pue, 'pue');
	const dataLvmdp = splitArrayData(data.lvmdp, 'loads');
	const dataIt = splitArrayData(data.it, 'loads')

	let labels, chartData;
	if (name === "Pue") {
		labels = labelPue;
		chartData = dataPue;
	} else if (name === "Lvmdp") {
		labels = labelLvmdp;
		chartData = dataLvmdp;
	} else if (name === "It") {
		labels = labelIt;
		chartData = dataIt;
	} else {
		console.error("Invalid chart name!");
		return;
	}

	charts['chart' + name].data.labels.shift();
	charts['chart' + name].data.labels.push(labels[labels.length - 1]);
	charts['chart' + name].data.datasets[0].data.shift();
	charts['chart' + name].data.datasets[0].data.push(chartData[chartData.length - 1]);
	charts['chart' + name].update();
}

// async function setUpdateId() {
// 	let data = await $.ajax({
// 		url: baseUrl + "data/electric/chartUpdate",
// 		dataType: "json",
// 	})
// 	nameId.forEach((id) => {
// 		updateId.push(data[id]['id']);
// 	});
// }

async function updateChart() {
	let data = await $.ajax({
		url: baseUrl + "data/electric/chartUpdate",
		dataType: "json",
	})

	charts['chartRecti'].data.labels.shift();
	charts['chartRecti'].data.labels.push(data.recti.time);
	charts['chartRecti'].data.datasets[0].data.shift();
	charts['chartRecti'].data.datasets[0].data.push(data.recti.loads);
	charts['chartRecti'].update();

	charts['chartPanelRecti'].data.labels.shift();
	charts['chartPanelRecti'].data.labels.push(data.p205.time);
	charts['chartPanelRecti'].data.datasets[0].data.shift();
	charts['chartPanelRecti'].data.datasets[0].data.push(data.p205.loads);
	charts['chartPanelRecti'].data.datasets[1].data.shift();
	charts['chartPanelRecti'].data.datasets[1].data.push(data.p236.loads);
	charts['chartPanelRecti'].data.datasets[2].data.shift();
	charts['chartPanelRecti'].data.datasets[2].data.push(data.p305.loads);
	charts['chartPanelRecti'].data.datasets[3].data.shift();
	charts['chartPanelRecti'].data.datasets[3].data.push(data.p310.loads);
	charts['chartPanelRecti'].data.datasets[4].data.shift();
	charts['chartPanelRecti'].data.datasets[4].data.push(data.p429.loads);
	charts['chartPanelRecti'].update();

	charts['chartUps'].data.labels.shift();
	charts['chartUps'].data.labels.push(data.ups.time);
	charts['chartUps'].data.datasets[0].data.shift();
	charts['chartUps'].data.datasets[0].data.push(data.ups.loads);
	charts['chartUps'].update();

	charts['chartPanelUps'].data.labels.shift();
	charts['chartPanelUps'].data.labels.push(data.ups202.time);
	charts['chartPanelUps'].data.datasets[0].data.shift();
	charts['chartPanelUps'].data.datasets[0].data.push(data.ups202.loads);
	charts['chartPanelUps'].data.datasets[1].data.shift();
	charts['chartPanelUps'].data.datasets[1].data.push(data.ups203.loads);
	charts['chartPanelUps'].data.datasets[2].data.shift();
	charts['chartPanelUps'].data.datasets[2].data.push(data.ups301.loads);
	charts['chartPanelUps'].data.datasets[3].data.shift();
	charts['chartPanelUps'].data.datasets[3].data.push(data.ups302.loads);
	charts['chartPanelUps'].data.datasets[4].data.shift();
	charts['chartPanelUps'].data.datasets[4].data.push(data.ups501.loads);
	charts['chartPanelUps'].data.datasets[5].data.shift();
	charts['chartPanelUps'].data.datasets[5].data.push(data.ups502.loads);
	charts['chartPanelUps'].update();
}

setChart();

// PUE Chart buttons
$("#pueDay").click(() => {
	toggleActive("pueChartButton", "pueDay");
	setChartDay("Pue");
});
$("#pueWeek").click(() => {
	toggleActive("pueChartButton", "pueWeek");
	setChartWeek("Pue");
});
$("#pueHour").click(() => {
	toggleActive("pueChartButton", "pueHour");
	setChartHour("Pue");
});

// LVMDP Chart buttons
$("#lvmdpDay").click(() => {
	toggleActive("lvmdpChartButton", "lvmdpDay");
	setChartDay("Lvmdp");
});
$("#lvmdpWeek").click(() => {
	toggleActive("lvmdpChartButton", "lvmdpWeek");
	setChartWeek("Lvmdp");
});
$("#lvmdpHour").click(() => {
	toggleActive("lvmdpChartButton", "lvmdpHour");
	setChartHour("Lvmdp");
});

// IT Chart buttons
$("#itDay").click(() => {
	toggleActive("itChartButton", "itDay");
	setChartDay("It");
});
$("#itWeek").click(() => {
	toggleActive("itChartButton", "itWeek");
	setChartWeek("It");
});
$("#itHour").click(() => {
	toggleActive("itChartButton", "itHour");
	setChartHour("It");
});



setInterval(setValue, 1000);
setInterval(updateChart, 300000)