<?php

namespace App\Livewire;

use App\Models\VisitorLog;
use Livewire\Component;

class VisitorLogComponent extends Component
{
    
    public function render()
    {
        return view('livewire.visitor-log-component',[
            'count'=>VisitorLog::count(),
        ]);
    }
}
