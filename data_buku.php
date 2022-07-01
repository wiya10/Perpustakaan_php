<div class="card">
    <div class="card-header">
        Data Buku
    </div>
    <div class="card-body">
        <a href="media.php?page=tambah_buku" class="btn btn-sm btn-primary">Tambah Data</a>
        <div class="table-responsive">
            <table class="table table-bordered mt-3">
                <thead>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Nama Pengarang</th>
                    <th>Nama Penerbit</th>
                    <th>Kategori Buku</th>
                    <th>Jumlah</th>
                    <th>Gambar Buku</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <a href="media.php?halaman=crud&&hapus_buku=<?php echo $data['id_buku'] ?>" class="btn btn-sm btn-danger">hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>