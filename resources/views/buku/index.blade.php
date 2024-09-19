@include('layout')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 mb-3">
            <h1 class="text-center">Daftar Buku</h1>
            <a href="{{route('buku.create')}}" class="btn btn-primary float-end">Tambah Buku</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered align-middle text-center">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tanggal Terbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_buku as $index => $buku)
                        <tr>
                            <td>{{$buku->id}}</td>
                            <td>{{$buku->judul}}</td>
                            <td>{{$buku->penulis}}</td>
                            <td>{{"Rp " . number_format($buku->harga, 2, ',', '.')}}</td>
                            <td>{{ \Carbon\Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-primary me-1"><i class="bi bi-eye"></i></a>
                                <a href="#" class="btn btn-sm btn-warning me-1"><i class="bi bi-pencil"></i></a>
                                <form action="{{route('buku.destroy', $buku->id)}}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Yakin mau dihapus?')" type="submit"
                                        class="btn btn-sm btn-danger"><i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>