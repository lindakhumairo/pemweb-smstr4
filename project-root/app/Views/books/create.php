<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Tambah Buku</h2>
            <form action="/books/save" method="post">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="judul" class="form-control <?= ($validation->HasError('judul')) ? 'is-invalid' :
                                                                    ''; ?>" name="judul" id="judul" autofocus value="<?= old('judul'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('judul'); ?>
                        </div>
                    </div>
                </div>
                <div class=" row mb-3">
                    <label for="penulis" class="col-sm-2 col-form-label">penulis</label>
                    <div class="col-sm-10">
                        <input type="penulis" class="form-control <?= ($validation->HasError('penulis')) ? 'is-invalid' :
                                                                        ''; ?>" name=" penulis" id="penulis" autofocus value="<?= old('penulis'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('penulis'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-10">
                        <input type="penerbit" class="form-control <?= ($validation->HasError('penerbit')) ? 'is-invalid' :
                                                                        ''; ?>" name=" penerbit" id="penerbit" autofocus value="<?= old('penerbit'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('penerbit'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                    <div class="col-sm-10">
                        <input type="sampul" class="form-control" name="sampul" id="sampul" autofocus value="<?= old('sampul'); ?>">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>