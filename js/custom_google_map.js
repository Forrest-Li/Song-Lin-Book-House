// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: 23.970134, lng: 121.096726 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
        position: uluru,
        map: map,
    });
}