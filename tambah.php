<?php
session_start();
if(!isset($_SESSION['email'])) { header("location: login.php"); exit; }
include "koneksi.php";

if(isset($_POST['submit'])) {
    $nomor_kendaraan = $_POST['nomor_kendaraan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $pemilik = $_POST['pemilik'];
    $tahun_pembuatan = $_POST['tahun_pembuatan'];

    $query = mysqli_query($conn, "INSERT INTO mobil_016 (nomor_kendaraan, jenis_kendaraan, pemilik, tahun_pembuatan) VALUES ('$nomor_kendaraan', '$jenis_kendaraan', '$pemilik', '$tahun_pembuatan')");

    if($query) {
        echo "<script>alert('Data mobil berhasil ditambahkan!'); window.location='index.php';</script>";
    }
}
include "header.php";
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow border-0">
            <div class="card-header text-white py-3" style="background-color: #1cc88a;">
                <h4 class="mb-0 fw-bold">Tambah Data Mobil</h4>
            </div>
            <div class="card-body p-4">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Nomor Kendaraan</label>
                        <input type="text" name="nomor_kendaraan" class="form-control" required placeholder="Contoh: D 1234 ABC">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Jenis Kendaraan</label>
                        <select name="jenis_kendaraan" class="form-select" required>
                            <option value="Sedan">Sedan</option>
                            <option value="Pickup">Pickup</option>
                            <option value="Truk">Truk</option>
                            <option value="Bemo">Bemo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Pemilik</label>
                        <input type="text" name="pemilik" class="form-control" required placeholder="Nama pemilik...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tahun Pembuatan</label>
                        <input type="text" name="tahun_pembuatan" maxlength="4" class="form-control" required placeholder="Contoh: 2022">
                    </div>
                    <button type="submit" name="submit" class="btn text-white w-100 fw-bold py-2 shadow-sm" style="background-color: #1cc88a;">Simpan Data</button>
                    <a href="index.php" class="btn btn-secondary w-100 fw-bold mt-2 py-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>