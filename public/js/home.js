import { createChart, charts, getDates, splitArrayData } from "./func.js";

$(document).ready(function () {
	$("a[id=home]").addClass("active");
});

Chart.defaults.font.size = 20;
const label = ["01/01", "02/01", "03/01", "04/01", "05/01", "06/01", "07/01"];
const data = { labels: label, datasets: [] };
const config = {
	maintainAspectRatio: false,
	responsive: true,
	scales: {
		y: {
			ticks: {
				font: {
					size: 12,
				},
			},
			beginAtZero: true,
		},
		x: {
			ticks: {
				font: {
					size: 13,
				},
			},
		},
	},
	plugins: {
		datalabels: {
			display: true // Initially enable data labels
		},
		legend: {
			display: false,
		},
		title: {
			display: true,
			text: 'Chart',
			padding: 3,
			font: {
				size: 18,
			},
		},
	},
};

function changeColor(a, b) {
	if (a > 18) {
		$("#" + b).removeClass("text-bg-danger");
		$("#" + b).addClass("text-bg-success");
	} else {
		$("#" + b).removeClass("text-bg-success");
		$("#" + b).addClass("text-bg-danger");
	}
}

var pueWeekly = document.getElementById("pueWeeklyChart");
createChart('pueWeeklyChart', pueWeekly, 'line', data, config);

var pueMorning = document.getElementById("pueMorningChart");
createChart('pueMorning', pueMorning, 'bar', data, config);

var pueNoon = document.getElementById("pueNoonChart");
createChart('pueNoon', pueNoon, 'bar', data, config);

var pueNight = document.getElementById("pueNightChart");
createChart('pueNight', pueNight, 'bar', data, config);

var occupancy = document.getElementById("occupancyChart");
createChart('occupancy', occupancy, 'doughnut',
	{
		labels: [
			"Occupancy PLN (1385 kVA)",
			"PLN Other",
			"Occupancy Trafo (2000 kVA)",
			"Traco Other",
			"Occupancy Genset (2500 kVA)",
			"Genset Other",
		],
		datasets: [
			{
				data: [0, 100],
				backgroundColor: ['#FF5E57', '#E0E0E0'],
				hoverOffset: 0,
			},
			{
				data: [0, 100],
				backgroundColor: ['#4CAF50', '#E0E0E0'],
				hoverOffset: 0,
			},
			{
				data: [0, 100],
				backgroundColor: ['#3B82F6', '#E0E0E0'],
				hoverOffset: 0,
			},
		],
	},
	{
		responsive: true,
		maintainAspectRatio: false,
		cutout: '10%', // Ensures smaller inner space
		rotation: -90,
		circumference: 180, // Restrict to a half-circle
		layout: {
			padding: 25,
		},
		plugins: {
			legend: {
				display: true,
				position: 'top',
				labels: {
					generateLabels: function (chart) {
						// Filter and customize labels
						return chart.data.labels
							.map((label, index) => {
								const datasetIndex = Math.floor(index / 2); // Determine the dataset index
								const dataIndex = index % 2; // Index within the dataset

								// Show only "Occupancy" labels
								if (!label.includes("Occupancy")) return null;

								return {
									text: label,
									fillStyle:
										chart.data.datasets[datasetIndex].backgroundColor[dataIndex],
									hidden: !chart.isDatasetVisible(
										datasetIndex
									),
									index,
								};
							})
							.filter((label) => label !== null); // Remove null labels
					},
				},
			},
			tooltip: {
				enabled: false, // Disable tooltips
			},
			datalabels: {
				formatter: function (value, context) {
					if (context.dataIndex === 0) {
						// Show only "Occupancy" data
						return `${value}%`;
					}
					return null; // Hide for "Other" values
				},
				color: 'black', // Label color
				anchor: 'center',
				align: 'center',
			},
		},
	},
)

var fuelDaily = document.getElementById("fuelDailyChart");
createChart('fuelDaily', fuelDaily, 'bar', data, config);

var fuelMonthly = document.getElementById("fuelMonthlyChart");
createChart('fuelMonthly', fuelMonthly, 'bar', data, config);

var dcTemp = document.getElementById("dcTempChart");
createChart('dcTemp', dcTemp, 'bar', data, config);

async function setPue() {
	try {
		let data = await $.ajax({
			url: baseUrl + "data/home/pue",
			dataType: "json",
		})
		$('#pueRealTime').text(parseFloat(data.rt[0].pue).toFixed(2));
		$('#pueWeekly').text(parseFloat(data.week[0].pue).toFixed(2));
		$('#pueMin').text(parseFloat(data.min[0].pue).toFixed(2));
		$('#pueAvg').text(parseFloat(data.avg[0].pue).toFixed(2));
		$('#pueMax').text(parseFloat(data.max[0].pue).toFixed(2));
	} catch (error) {
		// Handle AJAX failure and show Bootstrap alert
		const alertContainer = document.getElementById("alert-container");
		// Clear existing alerts if necessary
		alertContainer.innerHTML = "";
		const errorMessage = error.responseJSON?.message || error.statusText || "An unexpected error occurred.";
		// Add a new alert
		const alertHTML = `
				<div class="alert alert-danger alert-dismissible fade show custom-alert" role="alert">
						<h3 class="fw-bold">Failed to load PUE data.</h3>
						<p class="display-4">${errorMessage}</p>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
		`;
		alertContainer.innerHTML = alertHTML;
	}
};

async function setTemp() {
	let data = await $.ajax({
		url: baseUrl + "data/home/temp",
	})
	$('#tempFloor4').text(data.hum4);
	$('#dateFloor4').text(data.hum4);
}

async function setChart() {
	try {
		let data = await $.ajax({
			url: baseUrl + "data/home/chart",
			dataType: "json",
		})
		const lvmdp = parseFloat(data.lvmdp[0].loads);
		const pln = [((lvmdp / 1385) * 100).toFixed(2), 100 - ((lvmdp / 1385) * 100).toFixed(2)];
		const trafo = [((lvmdp / 2000) * 100).toFixed(2), 100 - ((lvmdp / 2000) * 100).toFixed(2)];
		const genset = [((lvmdp / 2500) * 100).toFixed(2), 100 - ((lvmdp / 2500) * 100).toFixed(2)];

		const labelDaily = getDates(data.daily);
		const labelMonthly = getDates(data.monthly);
		const labelMorning = getDates(data.morning);
		const labelNoon = getDates(data.noon);
		const labelNight = getDates(data.night);
		const labelWeek = getDates(data.week);

		const dataTankDaily1 = splitArrayData(data.daily, 'tank1');
		const dataTankDaily2 = splitArrayData(data.daily, 'tank2');
		const dataTankMonthly1 = splitArrayData(data.monthly, 'tank1');
		const dataTankMonthly2 = splitArrayData(data.monthly, 'tank2');
		const dataTankMonthly3 = splitArrayData(data.monthly, 'tank3');
		const dataMorning = splitArrayData(data.morning, 'pue');
		const dataNoon = splitArrayData(data.noon, 'pue');
		const dataNight = splitArrayData(data.night, 'pue');
		const dataWeek = splitArrayData(data.week, 'pue');

		charts['pueWeeklyChart'].data.labels = labelWeek;
		charts['pueWeeklyChart'].data.datasets[0] = { backgroundColor: "rgba(245, 37, 37, 0.5)", data: dataWeek };
		charts['pueWeeklyChart'].options.plugins.title.text = 'PUE Mingguan';
		charts['pueWeeklyChart'].options.plugins.datalabels.display = false;
		charts['pueWeeklyChart'].options.elements = { line: { tension: 0.3, fill: true }, point: { radius: 5, hitRadius: 20, backgroundColor: 'black', borderColor: 'black' } };
		charts['pueWeeklyChart'].options.scales['y'] = {
			min: 1.3,
			max: 1.9
		};
		charts['pueWeeklyChart'].update();

		charts['pueMorning'].data.labels = labelMorning;
		charts['pueMorning'].data.datasets[0] = { backgroundColor: "rgba(245, 37, 37, 0.5)", data: dataMorning };
		charts['pueMorning'].options.plugins.title.text = 'PUE Pagi';
		charts['pueMorning'].options.plugins.datalabels.display = false;
		charts['pueMorning'].update();

		charts['pueNoon'].data.labels = labelNoon;
		charts['pueNoon'].data.datasets[0] = { backgroundColor: "rgba(245, 37, 37, 0.5)", data: dataNoon };
		charts['pueNoon'].options.plugins.title.text = 'PUE Siang';
		charts['pueNoon'].options.plugins.datalabels.display = false;
		charts['pueNoon'].update();

		charts['pueNight'].data.labels = labelNight;
		charts['pueNight'].data.datasets[0] = { backgroundColor: "rgba(245, 37, 37, 0.5)", data: dataNight };
		charts['pueNight'].options.plugins.title.text = 'PUE Malam';
		charts['pueNight'].options.plugins.datalabels.display = false;
		charts['pueNight'].update();

		charts['occupancy'].data.datasets[0].data = pln;
		charts['occupancy'].data.datasets[1].data = trafo;
		charts['occupancy'].data.datasets[2].data = genset;
		charts['occupancy'].update();

		charts['fuelDaily'].data.labels = labelDaily;
		charts['fuelDaily'].data.datasets[0] = { label: 'Tangki 1', backgroundColor: "rgba(255, 79, 44, 0.5)", data: dataTankDaily1, borderWidth: 1 };
		charts['fuelDaily'].data.datasets[1] = { label: 'Tangki 2', backgroundColor: "rgba(239, 16, 20, 0.5)", data: dataTankDaily2, borderWidth: 1 };
		charts['fuelDaily'].options.plugins.title.text = 'Tangki Harian';
		charts['fuelDaily'].options.plugins.legend.display = true;
		charts['fuelDaily'].options.plugins.datalabels.display = false;
		charts['fuelDaily'].options.scales['y'] = {
			min: 1000,
			max: 1500
		};
		charts['fuelDaily'].options.scales['x'] = {
			barPercentage: 0.8,
			categoryPercentage: 0.9
		};
		charts['fuelDaily'].update();

		charts['fuelMonthly'].data.labels = labelMonthly;
		charts['fuelMonthly'].data.datasets[0] = { label: 'Tangki 1', backgroundColor: "rgba(255, 44, 114, 0.5)", data: dataTankMonthly1, borderWidth: 1 };
		charts['fuelMonthly'].data.datasets[1] = { label: 'Tangki 2', backgroundColor: "rgba(255, 44, 44, 0.5)", data: dataTankMonthly2, borderWidth: 1 };
		charts['fuelMonthly'].data.datasets[2] = { label: 'Tangki 3', backgroundColor: "rgba(255, 114, 44, 0.5)", data: dataTankMonthly3, borderWidth: 1 };
		charts['fuelMonthly'].options.plugins.title.text = 'Tangki Bulanan';
		charts['fuelMonthly'].options.plugins.legend.display = true;
		charts['fuelMonthly'].options.plugins.datalabels.display = false;
		charts['fuelMonthly'].options.scales['y'] = {
			min: 5000,
			max: 11000
		};
		charts['fuelMonthly'].options.scales['x'] = {
			barPercentage: 0.8,
			categoryPercentage: 0.9
		};
		charts['fuelMonthly'].update();

		console.log(data.noon);
	} catch (error) {
		// Handle AJAX failure and show Bootstrap alert
		const alertContainer = document.getElementById("alert-container");
		// Clear existing alerts if necessary
		alertContainer.innerHTML = "";
		const errorMessage = error.responseJSON?.message || error.statusText || "An unexpected error occurred.";
		// Add a new alert
		const alertHTML = `
				<div class="alert alert-danger alert-dismissible fade show custom-alert" role="alert">
						<h3 class="fw-bold">Failed to load Chart data.</h3>
						<p class="display-4">${errorMessage}</p>
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
		`;
		alertContainer.innerHTML = alertHTML;
		console.log(error);
	}
}

setInterval(() => {
	setPue();
}, 1000)
setTemp();
setChart();