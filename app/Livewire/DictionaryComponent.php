<?php

namespace App\Livewire;

use App\Models\Dictionary;
use Livewire\Component;

class DictionaryComponent extends Component
{
    public $word;
    public $definition;
    public $nepaliMeaning;
    public function dictionarySearch()
    {
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
        return view('livewire.dictionary-component',);
    }
}
