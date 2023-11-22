<?php

namespace App\Livewire;

use App\Models\Dictionary;
use Livewire\Component;
use Livewire\WithPagination;

class PopularWordsComponent extends Component
{
    use WithPagination;


    public function render()
    {
        $todayPopular=Dictionary::popularToday()->latest()->paginate(7);
        $pouplarThisWeek=Dictionary::popularThisWeek()->latest()->paginate(10);
        $popularThisMonth=Dictionary::popularThisMonth()->latest()->paginate(10);

        return view('livewire.popular-words-component',['todayPopular'=>$todayPopular,
        'pouplarThisWeek'=>$pouplarThisWeek,'popularThisMonth'=>$popularThisMonth]);
    }
}
