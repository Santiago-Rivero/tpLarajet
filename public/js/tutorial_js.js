// Creamos la variable "map" que será el contenedor de nuestro visor
var map = L.map('map',{
    center: [38.398600, -0.436578],
    zoom: 15
  });

  // Carga del mapa base de OSM
  var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom : 18,
    attribution : 'Map data © <a href="https://openstreetmap.org">OpenStreetMap'
    +'</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">'
    +'CC-BY-SA</a>'
  }).addTo(map);

  // Le damos estilos .SVG a nuestra capa personalizada de tiendas de Sant Joan d'Alacant
  // (opcional, otra opción es definir una variable de estilos para puntos de leaflet)

  var iconoSVG = L.icon({
      iconUrl: './datos/shop.svg',
      iconSize: [30, 65],
      });

  // Capa de puntos .kml cargada con omnivore
  var establecimientos = L.geoJson(null, {
      onEachFeature: function(feature, layer){
          layer.bindPopup(feature.properties["name"])
      },
      pointToLayer: function(feature, latlng) {
          return L.marker(latlng, {icon: iconoSVG});
      }
  });

  omnivore.kml('./datos/Establecimientos.kml', null, establecimientos).addTo(map);
