<div class="container">

    <!-- BANNER  -->
    <div class="banner">
        <img src="{{ url('assets/slider/slider1.jpg') }}" alt="">
    </div>

    <!-- PILIH SEPEDA -->
    <section class="pilih-sepeda mt-4">
        <h3><strong> Choose Your Bike</strong></h3>
        <div class="row mt-4">
            @foreach($sepedas as $sepeda)
            <div class="col">
                <a href="{{ route('products.sepeda', $sepeda->id)  }}">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <img src="{{ url('assets/sepedas') }}/{{ $sepeda->gambar }}" class="img-fluid">
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </section>

    <!-- BEST PRODUK -->
    <section class="products mt-5 mb-5">
        <h3>
            <strong>Our Best Bikes</strong>
            <a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua </a>
        </h3>
        <div class="row mt-4">
            @foreach($products as $product)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body text-center">
                        <img src="{{ url('assets/products') }}/{{ $product->gambar }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product->nama }}</strong></h5>
                                <h5>Rp. {{ number_format($product->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                            <a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</div>