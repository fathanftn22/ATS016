<?php
session_start();
if(!isset($_SESSION['email'])) {
    header("location: login.php");
    exit;
}
include "koneksi.php";
include "header.php";
?>

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-dark">Data Kendaraan Rental</h2>
    <a href="tambah.php" class="btn text-white fw-bold shadow-sm" style="background-color: #1cc88a;">+ Tambah Mobil</a>
</div>

<div class="card shadow border-0">
    <div class="card-body">
        <table class="table table-hover table-striped align-middle">
            <thead class="text-white" style="background-color: #4e73df;">
                <tr>
                    <th>No</th>
                    <th>Nomor Kendaraan</th>
                    <th>Jenis Kendaraan</th>
                    <th>Pemilik</th>
                    <th>Tahun</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = mysqli_query($conn, "SELECT * FROM mobil_016");
                while($row = mysqli_fetch_assoc($sql)):
                ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td class="fw-semibold"><?= $row['nomor_kendaraan']; ?></td>
                    <td><span class="badge bg-secondary"><?= $row['jenis_kendaraan']; ?></span></td>
                    <td><?= $row['pemilik']; ?></td>
                    <td><?= $row['tahun_pembuatan']; ?></td>
                    <td class="text-center">
                        <a href="edit.php?id=<?= $row['no_id']; ?>" class="btn btn-warning btn-sm fw-semibold text-dark">Edit</a>
                        <a href="hapus.php?id=<?= $row['no_id']; ?>" class="btn btn-danger btn-sm fw-semibold" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include "footer.php"; ?>