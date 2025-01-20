import { createTable, tables } from "./func.js";

function changeOption() {
	const rooms = {
		"Basement": ["HYDRANT", "Tangga Darurat"],
		"Semi Basement": ['Lobby', 'House Keeping', "Genset", 'Koridor', 'Toilet', 'Gudang', 'Parkiran', "Parkiran Belakang", "Tangga Darurat", "Selasar", "Tangki Bulanan", "Pos Security", "LAMPU SOROT", "LAMPU TAMAN", "Parkiran Depan", "Staff"],
		1: ["Trafo", "Tangga Trafo", "Vendor", "Mechanical Engineering", "Musholla", "Panel", "Pantry", "Koridor", "Control", "Staff", "Toilet", "Lobby", "Selasar Depan", "Tangga Darurat"],
		2: ["Staging", "Toilet", "Koridor", "Tangga Darurat", "Selasar Depan", "Selasar Belakang", "Istirahat", "Operator", "Battery", "Rectifier", "Panel", "MSC", "CSPS"],
		3: ["Staging", "Toilet", "Koridor", "Tangga Darurat", "Selasar Depan", "Selasar Belakang", "Istirahat", "Operator", "Battery", "Rectifier", "Panel", "INVAS", "Core", "MKIOS", "OCS"],
		4: ["Staging", "Toilet", "Koridor", "Tangga Darurat", "Selasar Depan", "Selasar Belakang", "Rapat", "Operator", "Battery", "Rectifier", "Panel", "BSS/TRAU", "Interkoneksi", "Transmisi"],
		5: ["Staging", "Toilet", "Koridor", "Tangga Darurat", "Selasar Depan", "Selasar Belakang", "Shaff Data", "Shaff Power", "Utility A", "Utility B", "Panel", "Data Center", "Pengembangan", "Containment"],
		"Rooftop": ["Rooftop", "Tangga Darurat", "Lift", "Gudang"]
	};

	// Event listener for floor selection
	$('.change-floor').change(function () {
		const selectedFloor = $(this).val();
		const roomSelect = $('.change-room');

		// Clear previous options
		roomSelect.removeAttr("disabled");
		roomSelect.empty().append('<option value="">--Select Room--</option>');

		// Populate room options based on selected floor
		if (selectedFloor) {
			$.each(rooms[selectedFloor], function (index, room) {
				roomSelect.append(new Option(room, room));
			});
		}
	});
}

async function getQty() {
	let data = await $.ajax({
		url: baseUrl + "data/potency/powerQty"
	})
	// console.log();
	$('#potEl').text(data.power);
	$('#potElPln').text(data.pln);
	$('#potElGenset').text(data.genset);
	$('#potElCubicle').text(data.cubicle);
	$('#potElTrafo').text(data.trafo);
	$('#potElRecti').text(data.recti);
	$('#potElUps').text(data.ups);
	$('#potElPanel').text(data.panel);
	$('#potUser').text(data.rack);
	$('#potUserIt').text(data.it);
	$('#potUserCore').text(data.core);
	$('#potUserRadio').text(data.radio);
	$('#potUserTrans').text(data.transmisi);
	$('#potAc').text(data.cool);
	$('#potAcPac').text(data.pac);
	$('#potAcSplit').text(data.split);
	$('#potAcStanding').text(data.standing);
	$('#potFireExt').text(data.fire);
	$('#potFireApar').text(data.apar);
	$('#potFireFm200').text(data.fm200);
	$('#potFireHydrant').text(data.hydrant);
	$('#potTank').text(data.tank);
	$('#potTankDaily').text(data.daily);
	$('#potTankMonthly').text(data.monthly);
	$('#potSecurity').text(data.security);
	$('#potLamp').text(data.light);
	$('#potpotPump').text(data.pump);
}

$(document).ready(function () {
	$("a[id=potency]").addClass("active");
	$("#date").text(namaHari + ", " + tgl);
	changeOption();
	getQty();
}, startTime());

createTable('power');
createTable('user');
createTable('cool');
createTable('fire');
createTable('tank');
createTable('security');
createTable('light');
createTable('pump');

// console.log(tables['light']);
