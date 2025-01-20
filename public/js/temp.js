$(document).ready(
	function () {
		$("a[id=temp]").addClass("active");
		$("#date").text(namaHari + ", " + tgl);
	},
	startTime(),
);

document.addEventListener('DOMContentLoaded', function () {
	const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
	});
});

function setCard(data, className) {
	const card = $("#card" + className);
	const disconnected = card.find("#disconnected");

	if (data.status === 'D') {
		disconnected.removeClass("invisible");
		card.removeClass("text-bg-info text-bg-success text-bg-warning text-bg-danger");
	} else if (data.status === 'C') {
		disconnected.addClass("invisible");
		card.removeClass("text-bg-info text-bg-success text-bg-warning text-bg-danger");
		if (data.temp < 17) {
			card.addClass("text-bg-info");
		} else if (data.temp >= 17 && data.temp < 27) {
			card.addClass("text-bg-success");
		} else if (data.temp >= 27 && data.temp < 33) {
			card.addClass("text-bg-warning");
		} else if (data.temp >= 33 || data.temp == 0) {
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

async function setLt4() {
	let data = await $.ajax({
		url: baseUrl + "data/temp/perSecond",
		dataType: "json",
	})
	const batt4 = data[10];
	const recti4 = data[11];
	const bss = data[12];
	const inter = data[13];
	const trans = data[14];

	setCard(batt4, 'Batt4');
	setCard(recti4, 'Recti4');
	setCard(bss, 'Bss');
	setCard(inter, 'Inter');
	setCard(trans, 'Trans');
};

setInterval(() => {
	setLt4();
}, 1000);