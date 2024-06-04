
<!-- Modal Tambah User -->
<div class="modal" id="tambah_uppd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg overflow-auto" >
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h1 class="modal-title fs-5 text-light" id="exampleModalLabel">Tambah Data Pengguna</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="row">
                
                    <span class="fw-semibold mb-3">
                        DATA UPPD
                    </span>
                    <form action="/uppd" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="uppd-nama_uppd" class="col-sm-3 col-form-label ms-2">Nama UPPD</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="nama-uppd" name="nama_uppd" autofocus='on' value="{{old('nama_uppd')}}">
                            </div>
                            @error('nama_uppd')
                                <div class="text-danger fs-6 fst-italic">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="uppd-wilayah_kerja" class="col-sm-3 col-form-label ms-2">Wilayah Kerja</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="wilayah_kerja" name="wilayah_kerja" value="{{old('wilayah_kerja')}}">
                            </div>
                            @error('wilayah_kerja')
                                <div class="text-danger fs-6 fst-italic">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="kota" class="col-sm-3 col-form-label ms-2">Kota</label>
                            <div class="col-sm">
                                <input type="text" class="form-control" id="kota" name="kota" value="{{old('kota')}}">
                            </div>
                            @error('kota')
                                <div class="text-danger fs-6 fst-italic">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>   
                
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="btn-tambah-user">Simpan</button>
      </div>
  </form>
    </div>
  </div>
</div>