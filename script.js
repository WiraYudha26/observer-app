document.getElementById('observationForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Ambil nilai dari input
    let formData = {
        temperature: document.getElementById('temperature').value,
        humidity: document.getElementById('humidity').value,
        pressure: document.getElementById('pressure').value,
        rainfall: document.getElementById('rainfall').value,
        radiation: document.getElementById('radiation').value,
        windSpeed: document.getElementById('windSpeed').value,
        windDirection: document.getElementById('windDirection').value
    };

    // Kirim data ke server (AJAX)
    fetch('http://localhost/saveObservation.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(formData),
    })
    .then(response => response.json())
    .then(data => {
        console.log('Success:', data);
        // Tambahkan data baru ke daftar observasi
        let observationList = document.getElementById('observationList');
        observationList.innerHTML += `<p>Suhu: ${formData.temperature} °C, Kelembaban: ${formData.humidity}%, Tekanan: ${formData.pressure} hPa, Curah Hujan: ${formData.rainfall} mm, Radiasi Matahari: ${formData.radiation} W/m², Kecepatan Angin: ${formData.windSpeed} m/s, Arah Angin: ${formData.windDirection}°</p>`;
    })
    .catch((error) => {
        console.error('Error:', error);
    });
});
