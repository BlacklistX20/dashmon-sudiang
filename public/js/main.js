document.addEventListener("DOMContentLoaded", function (event) {
	const showNavbar = (toggleId, navId, bodyId) => {
		const toggle = document.getElementById(toggleId),
			nav = document.getElementById(navId),
			bodypd = document.getElementById(bodyId);

		// Validate that all variables exist
		if (toggle && nav && bodypd) {
			toggle.addEventListener("click", () => {
				// show navbar
				nav.classList.toggle("show");
				// change icon
				toggle.classList.toggle("bx-x");
				// add padding to body
				bodypd.classList.toggle("body-pd");
			});
		}
	};

	showNavbar("header-toggle", "nav-bar", "body-pd");

	/*===== LINK ACTIVE =====*/
	const linkColor = document.querySelectorAll(".nav_link");

	function colorLink() {
		if (linkColor) {
			linkColor.forEach((l) => l.classList.remove("active"));
			this.classList.add("active");
		}
	}
	linkColor.forEach((l) => l.addEventListener("click", colorLink));

});

// Date and Time
let hariIni = new Date();
let namaHari = hariIni.toLocaleString("id-ID", { weekday: "long" });
let tgl = hariIni.toLocaleString("id-ID", { dateStyle: "long" });

function startTime() {
	const today = new Date();
	let h = today.getHours();
	let m = today.getMinutes();
	m = checkTime(m);
	$('#time').text(h + ":" + m)
	setTimeout(startTime, 1000);
}

function checkTime(i) {
	if (i < 10) {
		i = "0" + i;
	} // add zero in front of numbers < 10
	return i;
}

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
	"use strict";

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll(".needs-validation");

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms).forEach(function (form) {
		form.addEventListener(
			"submit",
			function (event) {
				if (!form.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();
				}

				form.classList.add("was-validated");
			},
			false
		);
	});
})();
