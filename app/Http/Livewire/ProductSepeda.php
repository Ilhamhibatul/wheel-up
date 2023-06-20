<?php

namespace App\Http\Livewire;

use App\Product;
use App\Sepeda;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSepeda extends Component
{
    use WithPagination;

    public $search, $sepeda;

    protected $updateQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($sepedaId)
    {
        $sepedaDetail = Sepeda::find($sepedaId);

        if($sepedaDetail) {
            $this->sepeda = $sepedaDetail;
        }
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('sepeda_id', $this->sepeda->id)->where('nama', 'like', '%'.$this->search.'%')->paginate(8);
        } else {
            $products = Product::where('sepeda_id', $this->sepeda->id)->paginate(8);
        }
        $products = Product::paginate(8);
        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'Jenis Sepeda' .$this->sepeda->nama
        ]);
    }
}
