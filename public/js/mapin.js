
var map = L.map('map').setView([20, 30], 18);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18
}).addTo(map);

L.marker([-27.37, -55.89]).addTo(map)
    .bindPopup('Ubicación.<br> Emprendimiento.')
    .openPopup();

var popup = L.popup();
