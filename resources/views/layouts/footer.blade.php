<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

    <footer id="custom-footer">
        <div class="footer-content">
            <div class="contact-item">
                <img src="marker.png" alt="Location Icon" class="icon">
                <div class="info">
                    <div class="label">Onde nos encontramos:</div>
                    <div class="location">R. Eça de Queirós, 4540-194 Arouca</div>
                </div>
            </div>
            <div class="contact-item">
                <img src="call.png" alt="Call Icon" class="icon">
                <div class="info">
                    <div class="label">Ligue-nos:</div>
                    <div class="phone">+(351) 917 667 986</div>
                </div>
            </div>
            <div class="contact-item">
                <img src="mail.png" alt="Mail Icon" class="icon">
                <div class="info">
                    <div class="label">Mail:</div>
                    <div class="email">rsarouca@gmail.com</div>
                </div>
            </div>
    
            <!-- New contact items -->
            <div class="contact-item">
                <div class="info">
                    <div class="label">Redes Sociais:</div>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/p/Rs-Pneus-Com%C3%A9rcio-De-Pneus-Novos-E-Usados-100065383846418/?paipv=0&eav=AfYzhzZSsM7EARQVvB4H6fSrY2nDf6AsChxk2QaxgeWUV6nOlck_O6fYTIAAe1F9J5A&_rdr">
                            <img src="facebook.png" alt="Facebook Icon" class="icon">
                        </a>
                        <img src="whatsapp.png" alt="WhatsApp Icon" class="icon">
                        <img src="messenger.png" alt="Messenger Icon" class="icon">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    <div id="map"></div>
    
    <script>
        // Function to initialize the map
        function initializeMap() {
            // Initialize the map on the 'map' div with Arouca, Aveiro, Portugal coordinates
            var map = L.map('map', {
                zoomControl: true // Show the default zoom control buttons
            }).setView([40.92660925476344, -8.249202278501464], 17);
    
            // Add the Esri World Imagery tile layer for satellite view
            L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                attribution: '&copy; <a href="https://www.esri.com/en-us/home">Esri</a> | &copy; OpenStreetMap contributors'
            }).addTo(map);
    
            // Add a marker at Arouca, Aveiro, Portugal with a hyperlink in the popup
            L.marker([40.92660925476344, -8.249202278501464]).addTo(map)
                .bindPopup(
                    '<a href="https://www.google.com/maps/place/Rs+Pneus/@40.9266014,-8.2492008,15z/data=!4m6!3m5!1s0xd2363bde7a4c7d9:0xed97ba3d9cc15320!8m2!3d40.9266014!4d-8.2492008!16s%2Fg%2F11gxsc3gtt?entry=ttu" target="_blank">RS Pneus</a>'
                )
                .openPopup();
    
            // Call invalidateSize to update the map layout after the tiles are loaded
            map.on('load', function() {
                map.invalidateSize();
            });
        }
    
        // Wait for the DOM to be fully loaded before initializing the map
        document.addEventListener('DOMContentLoaded', initializeMap);
    </script>
    