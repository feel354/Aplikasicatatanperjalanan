<div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Tulis Catatan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="config/simpan_catatan.php" method="post">
                <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pilih Tanggal</label>
                    <div class="col-sm-10">
                      <input type="date" name="tanggal" class="form-control">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Pilih Jam</label>
                    <div class="col-sm-10">
                      <input type="time" name="jam" class="form-control">
                    </div>
                  </div>                  
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Lokasi</label>
                    <div class="col-sm-10">
                      <input type="text" name="lokasi" class="form-control" placeholder="Masukkan Lokasi">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Suhu Tubuh</label>
                    <div class="col-sm-10">
                      <input type="number" name="suhu" class="form-control" placeholder="Masukkan Suhu Tubuh (Celcius)">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right m-2"> <i class="fa fa-save"></i>Simpan</button>
                  <button type="reset" class="btn btn-warning float-right m-2"><i class="fa fa-trash"></i>Kosongkan</button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>