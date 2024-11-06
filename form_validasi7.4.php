<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm" method="post" action="">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>

    <div id="hasil" style="margin-top: 20px;"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form secara default

                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Reset pesan kesalahan
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");

                // Validasi Nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                // Validasi Email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else if (!validateEmail(email)) {
                    $("#email-error").text("Format email tidak valid.");
                    valid = false;
                }

                // Validasi Password
                if (password.length < 8) {
                    $("#password-error").text("Password minimal 8 karakter.");
                    valid = false;
                }

                // Jika semua validasi berhasil, kirim data dengan AJAX
                if (valid) {
                    $.ajax({
                        url: "proses_validasi.php", // Ganti dengan nama file PHP yang sesuai
                        type: "POST",
                        data: { nama: nama, email: email, password: password },
                        success: function(response) {
                            $("#hasil").html(response); // Tampilkan respons dari server
                        },
                        error: function() {
                            $("#hasil").html("<p style='color:red;'>Terjadi kesalahan saat mengirim data.</p>");
                        }
                    });
                }
            });

            // Fungsi untuk memvalidasi format email
            function validateEmail(email) {
                var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Regular expression untuk validasi email
                return re.test(email);
            }
        });
    </script>
</body>
</html>
