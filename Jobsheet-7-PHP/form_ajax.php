<!DOCTYPE html>
<html>
    <head>
        <title>Contoh Form dengan PHP dan jQuery</title>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <h2>Form Contoh</h2>
        <form method="post">
            <label for="nama">Pilih Buah:</label>
            <select name="buah" id="buah">
                <option value="apel">Apel</option>
                <option value="jeruk">Jeruk</option>
                <option value="mangga">Mangga</option>
            </select>
            <br /><br />

            <p>Pilih Warna Favorit:</p>
            <input type="checkbox" name="warna[]" value="merah" /> Merah<br />
            <input type="checkbox" name="warna[]" value="biru" /> Biru<br />
            <input type="checkbox" name="warna[]" value="hijau" /> Hijau<br /><br />

            <p>Pilih Jenis Kelamin:</p>
            <input type="radio" name="jenis_kelamin" value="laki-laki" /> Laki-laki<br />
            <input type="radio" name="jenis_kelamin" value="perempuan" /> Perempuan<br /><br />

            <input type="submit" value="Kirim" />
        </form>

        <div id="hasil">
            <!-- Hasil akan ditampilkan di sini -->
        </div>

        <script>
            $(document).ready(function () {
                $('form').submit(function (event) {
                    event.preventDefault(); // Mencegah pengiriman form secara default

                    var formData = $(this).serialize(); // Mengambil data form

                    $.ajax({
                        type: 'POST',
                        url: 'proses_lanjut.php', // Ganti dengan nama file PHP yang sesuai
                        data: formData,
                        success: function (response) {
                            // Tampilkan hasil dari server di div #hasil
                            $('#hasil').html(response);
                        },
                    });
                });
            });
        </script>
    </body>
</html>
