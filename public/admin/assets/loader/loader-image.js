    function gambarSelesaiDimuat(img) {
        var placeholder = img.previousElementSibling; // Ambil elemen placeholder sebelumnya

        // Sembunyikan placeholder dan tampilkan gambar sebenarnya
        placeholder.style.display = "none";
        img.style.display = "block";
    }

