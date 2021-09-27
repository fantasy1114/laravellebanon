// function initMap() {
//   const myLatLng = { lat: -25.363, lng: 131.044 };
//   const map = new google.maps.Map(document.getElementById("map"), {
//     zoom: 4,
//     center: myLatLng,
//   });
//   new google.maps.Marker({
//     position: myLatLng,
//     map,
//     title: "Hello World!",
//   });
// }
// The following example creates five accessible and
// focusable markers.
function initMap() {
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 17,
    center: { lat: maplat, lng: maplng }
  });
  // Set LatLng and title text for the markers. The first marker (Boynton Pass)
  // receives the initial focus when tab is pressed. Use arrow keys to
  // move between markers; press tab again to cycle through the map controls.
  const tourStops = [
    [{ lat: maplat, lng: maplng}, ""],
    // [{ lat: 40.6212524, lng: 22.9110077 }, "Thessaloniki"],
    // [{ lat: 38.2491284, lng: 21.6755653 }, "Patras"],
    // [{ lat: 35.3220814, lng: 25.1000511 }, "Heraklion"],
    // [{ lat: 35.5076009, lng: 24.0072304 }, "Chania"],
  ];
  // Create an info window to share between markers.
  const infoWindow = new google.maps.InfoWindow();
  // Create the markers.
  tourStops.forEach(([position, title], i) => {
    const marker = new google.maps.Marker({
      position,
      map,
      title: `${i + 1}. ${title}`,
      label: `${i + 1}`,
      optimized: false,
    });
    // Add a click listener for each marker, and set up the info window.
    marker.addListener("click", () => {
      infoWindow.close();
      infoWindow.setContent(marker.getTitle());
      infoWindow.open(marker.getMap(), marker);
    });
  });
}