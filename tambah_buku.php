<div class="card">
    <div class="card-header">
        Form Tambah Data
    </div>
    <div class="card-body">
        <form action="crud.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <div class="mb-3">
                    <label for="">Kode Buku</label>
                    <input type="text" name="kb" class="form-control" placeholder="Masukkan kode buku">
                </div>
                <div class="mb-3">
                    <label for="">Judul Buku</label>
                    <input type="text" name="jb" class="form-control" placeholder="Masukkan judul buku">
                </div>
                <div class="mb-3">
                    <label for="">Nama Pengarang</label>
                    <input type="text" name="pengarang" class="form-control" placeholder="Masukkan nama pengarang">
                </div>
                <div class="mb-3">
                    <label for="">Nama Penerbit</label>
                    <input type="text" name="penerbit" class="form-control" placeholder="Masukkan nama Penerbit">
                </div>
                <div class="mb-3">
                    <label for="">Kategori</label>
                    <input type="text" name="kategori" class="form-control" placeholder="Masukkan kategori buku">
                </div>
                <div class="mb-3">
                    <label for="">Jumlah</label>
                    <input type="text" name="jml" class="form-control" placeholder="Masukkan jumlah buku">
                </div>
                <div class="mb-3">
                    <label for="">Image</label>
                    <input type="file" name="img" class="form-control">
                </div>
                <button type="submit" name="simpan_buku" class="btn btn-sm btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>