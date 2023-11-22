<?php

namespace App\Livewire;

use App\Models\VisitorLog;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class TopDevicesComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $popularDevices =VisitorLog::select(
            'device_type',
            'device_browser',
            'device_os',
            DB::raw('COUNT(*) as device_count')
        )
            ->groupBy('device_type', 'device_browser', 'device_os')
            ->orderByDesc('device_count')
            ->paginate(3);

        return view('livewire.top-devices-component',['popularDevices'=>$popularDevices]);
    }
}
