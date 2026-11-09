<?php
session_start();
if(!isset($_SESSION['email'])) { header("location: login.php"); exit; }
include "koneksi.php";

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mobil_016 WHERE no_id='$id'"));

if(isset($_POST['update'])) {
    $nomor_kendaraan = $_POST['nomor_kendaraan'];
    $jenis_kendaraan = $_POST['jenis_kendaraan'];
    $pemilik = $_POST['pemilik'];
    $tahun_pembuatan = $_POST['tahun_pembuatan'];

    $query = mysqli_query($conn, "UPDATE mobil_016 SET nomor_kendaraan='$nomor_kendaraan', jenis_kendaraan='$jenis_kendaraan', pemilik='$pemilik', tahun_pembuatan='$tahun_pembuatan' WHERE no_id='$id'");

    if($query) {
        echo "<script>alert('Data mobil berhasil diupdate!'); window.location='index.php';</script>";
    }
}
include "header.php";
?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card shadow">
            <div class="card-header bg-warning text-dark">
                <h4>Edit Data Mobil</h4>
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nomor Kendaraan</label>
                        <input type="text" name="nomor_kendaraan" value="<?= $data['nomor_kendaraan']; ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kendaraan</label>
                        <select name="jenis_kendaraan" class="form-select" required>
                            <option value="Sedan" <?= ($data['jenis_kendaraan'] == 'Sedan') ? 'selected' : ''; ?>>Sedan</option>
                            <option value="Pickup" <?= ($data['jenis_kendaraan'] == 'Pickup') ? 'selected' : ''; ?>>Pickup</option>
                            <option value="Truk" <?= ($data['jenis_kendaraan'] == 'Truk') ? 'selected' : ''; ?>>Truk</option>
                            <option value="Bemo" <?= ($data['jenis_kendaraan'] == 'Bemo') ? 'selected' : ''; ?>>Bemo</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pemilik</label>
                        <input type="text" name="pemilik" value="<?= $data['pemilik']; ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tahun Pembuatan</label>
                        <input type="text" name="tahun_pembuatan" value="<?= $data['tahun_pembuatan']; ?>" maxlength="4" class="form-control" required>
                    </div>
                    <button type="submit" name="update" class="btn btn-warning w-100">Update</button>
                    <a href="index.php" class="btn btn-secondary w-100 mt-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>