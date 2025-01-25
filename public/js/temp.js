$(document).ready(
	function () {
		$("a[id=temp]").addClass("active");
		$("#date").text(namaHari + ", " + tgl);
	},
	startTime(),
);
import { setCard } from "./func.js";

document.addEventListener('DOMContentLoaded', function () {
	const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
	const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
		return new bootstrap.Tooltip(tooltipTriggerEl);
	});
});

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
}, 1000);