<div class="row clearfix">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="card">
      <div class="header">
        <h2>
          Tambah Admin
        </h2>
      </div>


      <div class="body">

        <form method="POST" enctype="multipart/form-data">
          <label>Kode User</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" name="kode_user" class="form-control" value="<?php echo $kode; ?>" readonly />
            </div>
          </div>

          <label>Nama User</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" name="nama_user" class="form-control" placeholder="Username" />
            </div>
          </div>

          <label>Password</label>
          <div class="form-group">
            <div class="form-line">
              <input type="password" name="password" class="form-control" placeholder="Password" required />
            </div>
          </div>

          <label>Level</label>
          <div class="form-group">
            <div class="form-line">
              <input type="text" name="level" class="form-control" value="admin" readonly />
            </div>
          </div>

          <label>Foto</label>
          <div class="form-group">
            <div class="form-line">
              <input type="file" name="foto" class="form-control" placeholder="Gambar" required />
            </div>
          </div>

          <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

        </form>
      </div>
    </div>
  </div>
</div>