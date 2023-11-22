<div wire:poll.visible>
    <table class="table table-hover m-b-0 without-header">
        <tbody>

            @forelse ($popularDevices as $datas)
                <tr>
                    <td>
                        <div
                            class="d-inline-block align-middle">

                            <div class="d-inline-block">
                                <h6>{{ $datas->device_type }}
                                </h6>
                                <p class="text-muted m-b-0">
                                    {{ $datas->device_os }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="text-right">
                        <h6 class="f-w-700">Viewed
                            {{ $datas->device_count }} times<i
                                class="fas fa-level-up-alt text-c-green m-l-10"></i>
                        </h6>
                    </td>
                </tr>
            @empty

                <tr>
                    <td colspan="2">No popular devices
                        found.</td>
                </tr>
            @endforelse




        </tbody>

    </table>
    <div class="d-flex justify-content-end">
    {{ $popularDevices->links() }}
    </div>
</div>



