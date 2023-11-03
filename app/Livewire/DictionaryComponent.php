<?php

namespace App\Livewire;

use App\Models\Dictionary;
use Livewire\Component;
use Livewire\Attributes\Url;

class DictionaryComponent extends Component
{
    #[Url]
    public $word="";
    public $definition;
    public $nepaliMeaning;
    public $users = [];


    public function dictionarySearch($word = null)
    {
        if ($word) {
            // If a parameter is provided, use it
            $this->word = $word;

        }elseif (empty($this->word)) {
            $this->word = null;
            
        } else {
            // If no parameter is provided, use the input value
            $this->word;
        }
        $dictionaryEntry = Dictionary::where('words', $this->word)->first();

        if ($dictionaryEntry) {
            $this->definition = $dictionaryEntry->Meaning;
            $this->nepaliMeaning = $dictionaryEntry->{'Meaning in Nepali'};
        } else {
            $this->definition = 'Word not found in the dictionary.';
            $this->nepaliMeaning=null;
        }
    }


    public function render()
    {
        if (!empty($this->word)) {
            $this->users = Dictionary::where('words', 'like', '%' . $this->word . '%')->limit(5)->get();
        } else {
            // Fetch 5 random words when the search input is empty
            $this->users = Dictionary::inRandomOrder()->limit(5)->get();
        }

        return view('livewire.dictionary-component');
    }

}
