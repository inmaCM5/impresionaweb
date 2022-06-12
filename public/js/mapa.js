/*function initMap() {
    //Ubicacion del instituto
    const ies = {
      lat: 37.54843881630168,
      lng: -5.9673153837468496
    };
    //Ponemos el zoom bastante grande para poder ver nuestro instituto
    //Hemos escogido este ID que viene como prueba
    const map = new google.maps.Map(document.getElementById("map"), {
      mapId: "8e0a97af9386f",
      zoom: 20,
      center: ies,
      zoomControl: false,
      scaleControl: true,
    });
    //Este codigo nos sirve para mostrar el icono rojo de posicion
    const marker = new google.maps.Marker({
      position: ies,
      map: map,
    });
  }*/
let map, infoWindow;

function initMap() {
  const papeleria = {
    lat: 37.54843881630168,
    lng: -5.9673153837468496
  };
  map = new google.maps.Map(document.getElementById("map"), {
    center: papeleria,
    zoom: 6,
  });
  //Segunda parte
  infoWindow = new google.maps.InfoWindow();

  const locationButton = document.createElement("button");

  locationButton.textContent = "Pincha para saber tu ubicacion";
  locationButton.classList.add("custom-map-control-button");
  //Controla que el boton quede arriba del mapa
  map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
  locationButton.addEventListener("click", () => {
    //Prueba si encuentra nuestra ubicación
    if (navigator.geolocation) {
      //Ubicación encontrada
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            //Recoge nuestra posicion
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };
          
          //Muestra nuestra posicion en texto y en el mapa
          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      //Ubicación no encontrda o no soportada por nuestro navegador
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
}

function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(
    browserHasGeolocation
      ? "Error: The Geolocation service failed."
      : "Error: Your browser doesn't support geolocation."
  );
  infoWindow.open(map);
}