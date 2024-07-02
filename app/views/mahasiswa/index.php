<div class="container mt-3">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash() ?>
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
          Tambah Data
        </button>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <form action="<?= BASE_URL ?>/mahasiswa/cari_mahasiswa" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Cari Siswa" name="keyword" id="keyword" autocomplete="off">
            <div class="input-group-append">
              <button class="btn btn-primary" type="submit" id="cari">Cari</button>
            </div>
          </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h3 class="mt-2">Daftar Mahasiswa</h3>
                <ul class="list-group">
                    <?php foreach($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs['nama']?>
                            <a class="badge badge-primary float-right" href="<?= BASE_URL ?>/mahasiswa/detail_mahasiswa/<?= $mhs['id'] ?>">detail</a>
                            <a class="badge badge-danger float-right" onclick="return confirm('anda yakin ingin menghapus data ini?')" href="<?= BASE_URL ?>/mahasiswa/hapus_mahasiswa/<?= $mhs['id'] ?>">hapus</a>
                            <a class="badge badge-success float-right tampilModalUbah" data-toggle="modal" data-target="#formModal" href="<?= BASE_URL ?>/mahasiswa/edit_mahasiswa/<?= $mhs['id'] ?>" data-id="<?= $mhs['id'] ?>">edit</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL ?>/mahasiswa/tambah_mahasiswa" method="post">
          <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group">
                <label for="kelas">kelas</label>
                <input type="text" class="form-control" name="kelas" id="kelas">
            </div>
            <div class="form-group">
                <label for="sekolah">sekolah</label>
                <input type="text" class="form-control" name="sekolah" id="sekolah">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>