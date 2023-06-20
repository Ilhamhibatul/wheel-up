<div class="container">
    <div class="row mt-4 mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td>No.</td>
                            <td>Gambar</td>
                            <td>Keterangan</td>
                            <td>Name Set</td>
                            <td>Jumlah</td>
                            <td>Harga</td>
                            <td><strong>Total Harga</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @forelse ($pesanan_details as $pesanan_detail)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>
                            <img src="{{ url('assets/products') }}/{{ $pesanan_detail->product->gambar }}" class="img-fluid" width="200">
                            </td>
                            <td>
                                {{ $pesanan_detail->product->nama }}
                            </td>
                            <td>
                                @if($pesanan_detail->namaset)
                                    Nama : {{ $pesanan_detail->nama }} <br>
                                    Nomor : {{ $pesanan_detail->nomor }}
                                @else
                                    -
                                @endif
                            </td>
                            <td>{{ $pesanan_detail->jumlah_pesanan }}</td>
                            <td>Rp. {{ number_format($pesanan_detail->product->harga) }}</td>
                            <td><strong>Rp. {{ number_format($pesanan_detail->total_harga) }}</strong></td>
                            <!-- <td>
                                <i class="fas fa-times"></i>
                            </td> -->
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7">Data Kosong</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
