async function fetchData(url) {
	try {
		const response = await fetch(baseUrl + url);
		if (!response.ok) {
			throw new Error(`HTTP error! Status: ${response.status}`);
		}
		const data = await response.json();
		return data;
	} catch (err) {
		console.error(`Error fetching data from ${url}:`, err);
		return null;
	}
}

function formatDate(dateString) {
	// Split the date string into parts
	var parts = dateString.split("-");

	// Extract day and month
	var day = parts[2];
	var month = parts[1];

	// Construct the formatted date
	var formattedDate = day + "/" + month;

	return formattedDate;
}

function convertDates(data) {
	return data.map(function (item) {
		return formatDate(item.date);
	});
}

function splitArrayData(array, data) {
	return array.map(function (item) {
		return item[data];
	});
}

function formatDateTime(data) {
	return data.map((entry) => {
		const dateParts = entry.date.split("-");
		const formattedDate = `${dateParts[2]}-${dateParts[1]}`;
		const timeParts = entry.time.split(":");
		const formattedTime = `${timeParts[0]}:${timeParts[1]}`;
		return formattedDate + " " + formattedTime;
	});
}

// Calculate dataMin and dataMax
function getMinData(data) {
	const dataMin = Math.min(...data);
	
	return  Math.round(dataMin / 10) * 10;
}

function getMaxData(data) {
	const dataMax = Math.max(...data);

	return  Math.round(dataMax / 10) * 10;
}

// Function to create a chart and store it in the object by name
const charts = {};
function createChart(name, ctx, type, chartData, chartOptions = {}) {
	const chart = new Chart(ctx, {
		type: type,
		data: chartData,
		plugins: [ChartDataLabels],
		options: chartOptions
	});
	charts[name] = chart;
	return chart;
}

const tables = {};
function createTable (name) { 
	const table = new DataTable('#' + name, 
		{
			paging: true,
			pageLength: 15,
			ordering: false,
			layout: {
				topStart: 'buttons'
			},
			buttons: {
				buttons: [
					{
						text: '<span class="icon text-white-50 px-1"><i class="bx bx-chevron-left" style="color:#ffffff"></i></span><span>Kembali</span>',
						className: 'btn-success px-1',
						attr: {
							type: 'button',
						},
						action: function (e, dt, node, config) {
							window.location.href = baseUrl + 'potency/home';
						}
					},
					{
						text: '<span class="icon text-white-50 px-1"><i class="bx bx-plus" style="color:#ffffff"></i></span><span>Tambah</span>',
						className: 'btn-primary px-1',
						attr: {
							type: 'button',
							'data-bs-toggle': 'modal',
							'data-bs-target': '#addModal',
						},
					},
				],
				dom: {
					button: {
						className: 'btn mx-1',
					},
					buttonLiner: {
						tag: null,
					},
				},
			},
		}
	);
	tables[name] = table;
	return tables;
};

function toggleActive(group, target) {
	$(`#${group} .active`).removeClass("active");
	$(`#${target}`).addClass("active");
}

function getDates(data) {
	return data.map(item => {
		const date = new Date(item.updated_at);
		const day = String(date.getDate()).padStart(2, '0'); // Ensure two-digit format
		const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are 0-indexed
		return `${day}/${month}`;
	});
}

function getFormattedTimes(data) {
	return data.map(item => {
			// Extract the time in HH:mm format from updated_at
			const date = new Date(item.updated_at);
			const hours = String(date.getHours()).padStart(2, '0'); // Ensure 2-digit format
			const minutes = String(date.getMinutes()).padStart(2, '0'); // Ensure 2-digit format
			return `${hours}:${minutes}`;
	});
}

function setCard(data, className) {
	const card = $("#card" + className);
	const disconnected = card.find("#disconnected");

	if (data.status === 'D') {
		disconnected.removeClass("invisible");
		card.removeClass("text-bg-info text-bg-success text-bg-warning text-bg-danger");
	} else if (data.status === 'C') {
		disconnected.addClass("invisible");
		card.removeClass("text-bg-info text-bg-success text-bg-warning text-bg-danger");
		if (data.temp > 0 && data.temp < 17) {
			card.addClass("text-bg-info");
		} else if (data.temp >= 17 && data.temp < 27) {
			card.addClass("text-bg-success");
		} else if (data.temp >= 27 && data.temp < 32) {
			card.addClass("text-bg-warning");
		} else if (data.temp >= 32 && data.temp == 0) {
			card.addClass("text-bg-danger");
		}
	}

	if (data.temp !== undefined) {
		$("#temp" + className).text(data.temp);
	}
	if (data.hum !== undefined) {
		$("#hum" + className).text(data.hum);
	}
	if (data.last_update !== undefined) {
		$("#date" + className).text(data.last_update);
	}
}

export {
	splitArrayData,
	getMinData,
	getMaxData,
	createChart,
	charts,
	createTable,
	tables,
	toggleActive,
	getDates,
	getFormattedTimes,
	setCard,
};