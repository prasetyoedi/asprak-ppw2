@include('layout')
<div class="container">
    <h4 class="mt-5 mb-5">Tambah Buku</h4>
    <form method="POST" action="{{route('buku.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="judul" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="penulis" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="harga" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tanggal Terbit</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" name="tgl_terbit" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="/buku" class="btn btn-outline-danger">Batal</a>
                </div>
            </div>
        </div>
    </form>
</div>
