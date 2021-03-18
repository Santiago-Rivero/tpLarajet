var map = L.map('map').setView([-27.368628229188797, -55.89592181766902], 18);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 18
}).addTo(map);

L.marker([-27.37, -55.89]).addTo(map)
    .bindPopup('Silicon.<br> Misiones.')
    .openPopup();

var popup = L.popup();

function onMapClick(e) {
    popup
        .setLatLng(e.latlng)
        .setContent("Ubicación de Emprendimiento" + e.latlng.toString())
        .openOn(map);
        var lat = e.latlng.lat
        var long = e.latlng.lng

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
         maxZoom: 18
        }).addTo(map);
        L.marker([lat, long]).addTo(map)
        // .bindPopup('"Ubicación".<br> Emprendimiento.')
        // .openPopup();
        document.getElementById("latitud").value = lat;
        document.getElementById("longitud").value = long;

}

map.on('click', onMapClick);
