/** Not used yet
var GoogleMaps = {
  init: function () {

    // The location of Uluru
    var uluru = {
      lat: -25.344,
      lng: 131.036
    };
    // The map, centered at Uluru
    var map = new google.maps.Map(
      document.getElementById('map'), {
        zoom: 4,
        center: uluru
      });
    // The marker, positioned at Uluru
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });

  }
}
*/

var MajolikaSite = {
  init: function () {
    //GoogleMaps.init();
    this.removeEntryMeta();
    this.mastheadPromo();
  },
  removeEntryMeta: function() {
    const metaData = document.querySelector('.entry-meta');
    if(metaData) {
      metaData.parentNode.removeChild(metaData);
    }  
  },
  mastheadPromo: function() {
    const masthead = document.getElementById('masthead');
    masthead.addEventListener('click', function(event) {
      console.log()
      if(event.target.className === 'col-full') {
        window.location = '/produkt/doza-srdce-habanska/'
      }
    })
  }
}
MajolikaSite.init();