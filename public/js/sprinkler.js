// IP Arduino (Sesuaikan dengan sketch Arduino)
        const arduinoIP = "http://192.168.1.177";
        let valveStates = [0, 0, 0];

        // Fungsi untuk mengirim perintah ke Arduino
        function toggle(index) {
            // Tentukan status baru (kebalikan dari sekarang)
            let newState = valveStates[index] == 1 ? 0 : 1;
            
            // Kirim request ke Arduino
            // Format: /set?v=0&s=1 (Artinya: Valve index 0, Set ke 1)
            fetch(arduinoIP + "/set?v=" + index + "&s=" + newState)
            .then(response => response.json())
            .then(data => updateUI(data))
            .catch(err => console.error("Gagal konek ke Arduino", err));
        }

        // Fungsi polling (Cek status setiap 1 detik)
        // Ini PENTING agar jika tombol fisik ditekan, web ikut berubah
        setInterval(function() {
            fetch(arduinoIP + "/status") // Request sembarang akan trigger respon status JSON
            .then(response => response.json())
            .then(data => updateUI(data))
            .catch(err => console.log("Arduino offline?"));
        }, 1000); // 1000ms = 1 detik

        // Update warna tombol berdasarkan data JSON dari Arduino
        function updateUI(data) {
            valveStates[0] = data.v1;
            valveStates[1] = data.v2;
            valveStates[2] = data.v3;

            updateBtn("btn1", data.v1);
            updateBtn("btn2", data.v2);
            updateBtn("btn3", data.v3);
        }

        function updateBtn(id, state) {
            let btn = document.getElementById(id);
            if(state == 1) {
                btn.className = "btn on";
                btn.innerText = "OPEN";
            } else {
                btn.className = "btn off";
                btn.innerText = "CLOSED";
            }
        }