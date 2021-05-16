function iniciarMapa(){
    var latitud= -17.391599;
    var longitud= -66.282151;

    coordenas={
      lng:longitud,
      lat:latitud
    }

    generarMapa(coordenas);

  }

  function generarMapa(coordenadas){
    var mapa = new google.maps.Map(document.getElementById('mapa'),
    {
        zoom: 12,
        center: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
    });
    marcador= new google.maps.Marker({
      map: mapa,
      draggable:true,
      position: new google.maps.LatLng(coordenadas.lat, coordenadas.lng)
    });
    marcador.addListener('dragend',function(event){
            document.getElementById("latitud").value = this.getPosition().lat();
            document.getElementById("longitud").value = this.getPosition().lng();
        });
  }