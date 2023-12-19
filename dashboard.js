let slideIndex = 0;
        const slides = document.getElementsByClassName("slide");

        function showSlides() {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
        }

        // Set interval untuk mengubah slide setiap 2 detik
        const slideInterval = setInterval(showSlides, 3000);

        // Hentikan interval jika diperlukan (misalnya, jika Anda ingin memberikan kontrol manual)
        // clearInterval(slideInterval);
        function initMap() {
            var myLatLng = {lat: -7.265757, lng: 112.734146};  // Koordinat awal peta

            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 14  // Level zoom awal
            });

            // Tambahkan marker pada peta
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Lokasi Saya'
            });
        }
     