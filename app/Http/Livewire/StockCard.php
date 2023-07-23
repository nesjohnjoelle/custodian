<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class StockCard extends Component
{
    use WithPagination;

    public $stock, $search="", $stockcard_data, $display_search = "show", $inventory_id, $click_search_bar = 0, $display_table = "hide";

    public function render()
    {
        if ($this->search != ""){
            $this->feed();
        }
        else{
            $this->stock = [];
        }
        return view('livewire.stock-card');
    }

    public function feed(){
        $this->stock = DB::table('inventories')
            ->where('item_name','LIKE', '%'.$this->search.'%')
            ->orderBy('item_name','asc')
            ->take(5)
            ->get();
    }

    public function click_suggest($id){
        $this->inventory_id = $id;
        $this->search = \App\Models\Inventory::find($id)->item_name;
        $this->display_search = "hide";
    }

    public function find(){
        $this->display_table = "show";
        $this->stockcard_data = DB::table('stock_cards')
            ->where('inventory_id',$this->inventory_id)
            ->take(6)
            ->get();

    }

    public function updatedSearch(){
        $this->display_search = "show";
        $this->display_table = "hide";
    }
}
