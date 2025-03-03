<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Nilai Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">Form Nilai Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="nilai_siswa.php">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nama Mahasiswa:</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Mata Kuliah:</label>
                        <select name="matkul" class="form-select" required>
                            <option value="">-- Pilih Mata Kuliah --</option>
                            <option value="Pemrograman Web">Pemrograman Web</option>
                            <option value="Basis Data">Basis Data</option>
                            <option value="Jaringan Komputer">Jaringan Komputer</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nilai UTS:</label>
                        <input type="number" name="nilai_uts" class="form-control" min="0" max="100" placeholder="Masukkan Nilai UTS (0-100)" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nilai UAS:</label>
                        <input type="number" name="nilai_uas" class="form-control" min="0" max="100" placeholder="Masukkan Nilai UAS (0-100)" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nilai Tugas:</label>
                        <input type="number" name="nilai_tugas" class="form-control" min="0" max="100" placeholder="Masukkan Nilai Tugas (0-100)" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" name="proses" class="btn btn-success">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll("input[type=number]").forEach(input => {
            input.addEventListener("input", function() {
                if (this.value < 0) this.value = 0;
                if (this.value > 100) this.value = 100;
            });
        });
    </script>
</body>
</html>
