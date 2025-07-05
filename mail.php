<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = $_POST["nama"];
  $email = $_POST["email"];
  $pesan = $_POST["pesan"];
  file_put_contents("pesan.txt", "Dari: $nama <$email>\nPesan: $pesan\n\n", FILE_APPEND);
  echo "Pesan berhasil dikirim.";
}
?>