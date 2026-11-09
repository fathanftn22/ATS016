<?php
session_start();
if(isset($_SESSION['email'])) {
    header("location: index.php");
    exit;
}
include "header.php";
?>
<div class="row justify-content-center mt-5">
    <div class="col-md-5">
        <div class="card shadow border-0">
            <div class="card-header text-white text-center py-3" style="background-color: #4e73df;">
                <h4 class="mb-0 fw-bold">Login Sistem Rental Mobil</h4>
            </div>
            <div class="card-body p-4">
                <form action="proses_login.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email</label>
                        <input type="email" name="email" class="form-control" required placeholder="Masukkan email...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" class="form-control" required placeholder="Masukkan password...">
                    </div>
                    <button type="submit" name="login" class="btn text-white w-100 fw-bold py-2 shadow-sm" style="background-color: #4e73df;">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>