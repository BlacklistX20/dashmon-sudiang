$(document).ready(function () {
	$("a[id=fuel]").addClass("active");
	$("#date").text(namaHari + ", " + tgl);
}, startTime());

const maxDaily = 1500;
const maxMonthly = 10000;

// $(document).ready(getDataFuel(), setInterval(getDataFuel, 1000));

async function setDaily() {
	let data = await $.ajax({
		url: baseUrl + "data/fuel",
		dataType: "json",
	});

	const tank1 = data.daily.tank1;
	const tank2 = data.daily.tank2;

	let percenTank1 = ((tank1 / maxDaily) * 100).toFixed(1) + "%";
	let percenTank2 = ((tank2 / maxDaily) * 100).toFixed(1) + "%";

	$("#tank1Value").text(tank1);
	$("#tank1-level").animate({ height: percenTank1});
	$("#tank1-percent").text(percenTank1);
	$("#tank2Value").text(tank2);
	$("#tank2-level").animate({ height: percenTank2 });
	$("#tank2-percent").text(percenTank2);
	$("#dateDailyTank").text(data.daily.updated_at);
}

async function setMonthly() {
	let data = await $.ajax({
		url: baseUrl + "data/fuel",
		dataType: "json",
	});

	const tank3 = data.monthly.tank1;
	const tank4 = data.monthly.tank2;
	const tank5 = data.monthly.tank3;

	let percenTank3 = ((tank3 / maxMonthly) * 100).toFixed(1) + "%";
	let percenTank4 = ((tank4 / maxMonthly) * 100).toFixed(1) + "%";
	let percenTank5 = ((tank5 / maxMonthly) * 100).toFixed(1) + "%";

	$("#tank3Value").text(tank3);
	$("#tank3-level").animate({ height: percenTank3});
	$("#tank3-percent").text(percenTank3);
	$("#tank4Value").text(tank4);
	$("#tank4-level").animate({ height: percenTank4 });
	$("#tank4-percent").text(percenTank4);
	$("#tank5Value").text(tank5);
	$("#tank5-level").animate({ height: percenTank5 });
	$("#tank5-percent").text(percenTank5);
	$("#dateMonthlyTank").text(data.monthly.updated_at);
}

setDaily();
setMonthly();