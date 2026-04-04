$(document).ready(
	function () {
		$("a[id=temp]").addClass("active");
		$("#date").text(namaHari + ", " + tgl);
	},
	startTime(),
);
import { addTableRows, extractDetails, setCard, setDetailSensor } from "./func.js";

document.addEventListener('DOMContentLoaded', function () {
	const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
	});
});

$(document).on('click', '.detailSensor', function() {
	const id = $(this).data('id');
	const detail = extractDetails(id);
	addTableRows(detail.qty);
	if (detail.floor !== "") {
		$("#detailFloor").text("Lantai " + detail.floor);
	} else {
		$("#detailFloor").text("");
	}
	$("#detailRoom").text("Ruang " + detail.room);
	// console.log(detail.table);
	setDetailSensor(detail.table);
});

let userInteracted = false;

$(document).one('click', function() {
	userInteracted = true;
	console.log(userInteracted);
	if (userInteracted) {
		$('#vol-icon').removeClass('bx-volume-mute');
		$('#vol-icon').addClass('bx-volume-full');
	}
});

async function alarmSound() {
	let data = await $.ajax({
		url: baseUrl + "data/temp/perSecond",
		dataType: "json",
	})

	let shouldPlay = false;
	const audio = $('#alarm')[0];

	data.forEach((item, index) => {
		if (index !== 20 && index !== 21 && item.temp > 32) {
			shouldPlay = true;
		}
	});

	if (shouldPlay && userInteracted) {
		audio.play().catch(err => console.warn("Playback error:", err));
	} else {
		audio.pause();
		audio.currentTime = 0;
	}
}

async function setLt2() {
	let data = await $.ajax({
		url: baseUrl + "data/temp/perSecond",
		dataType: "json",
	})
	const batt2 = data[0];
	const recti2 = data[1];
	const msc = data[2];
	const csps = data[3];
	const genset = data[20];
	const trafo = data[21];

	setCard(batt2, 'Batt2');
	setCard(recti2, 'Recti2');
	setCard(msc, 'Msc');
	setCard(csps, 'Csps');
	setCard(genset, 'Genset');
	setCard(trafo, 'Trafo');
};

async function setLt3() {
	let data = await $.ajax({
		url: baseUrl + "data/temp/perSecond",
		dataType: "json",
	})
	const batt3 = data[4];
	const recti3 = data[5];
	const mkios = data[8];
	const core = data[7];
	const invas = data[6];
	const ocs = data[9];

	setCard(batt3, 'Batt3');
	setCard(recti3, 'Recti3');
	setCard(mkios, 'Mkios');
	setCard(core, 'Core');
	setCard(invas, 'Invas');
	setCard(ocs, 'Ocs');
};

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

async function setLt5() {
	let data = await $.ajax({
		url: baseUrl + "data/temp/perSecond",
		dataType: "json",
	})
	const utilityA = data[15];
	const utilityB = data[16];
	const dataCenter = data[17];
	const pengembangan = data[18];
	const containment = data[19];

	setCard(utilityA, 'UtilityA');
	setCard(utilityB, 'UtilityB');
	setCard(dataCenter, 'DC');
	setCard(pengembangan, 'Peng');
	setCard(containment, 'Cont');
};

setInterval(() => {
	setLt2();
	setLt3();
	setLt4();
	setLt5();
	alarmSound();
}, 1000);