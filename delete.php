<?php
require 'functions.php';

$id = $_GET['id'];

if (delete($id) > 0) {
    echo "<script>
    alert('Data berhasil dihapus!');
</script>";
} else {
    echo "<script>
alert('Data gagal dihapus!');
</script>";
}

?>
