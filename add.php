<?php
require 'functions.php';
// cek data berhasil ditambahkan
if (addData($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
        </script>";
} else {
    echo "<script>
        alert('Data gagal ditambahkan!');
    </script>";
}
?>
