function iniciarMap(){
    var coord = {lat:-16.4973762 ,lng: -68.1359219};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}