<div>

    <form wire:submit="dictionarySearch">
        <div class="d-flex align-items-start py-2 mt-3 mx-auto text-center" style="width: 60%;">
            <div class="input-group">
                <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input class="form-control" id="searchInput" placeholder="Search" type="text" wire:model.live="word" onclick="this.select();">
            </div>

            <button wire:click="dictionarySearch" wire:loading.attr="disabled"
                class="btn bg-gradient-secondary w-auto ms-2">Search</button>
        </div>

        <div class="row text-center">

            <div class="col-6 mx-auto"> <!-- Increase the width to col-6 -->

                <ul class="float-start">
                    @foreach ($users as $user)
                        <a href="#" wire:click="dictionarySearch('{{ $user->Words }}')">. {{ $user->Words }}</a>
                    @endforeach
                </ul>



            </div>
            <div wire:loading>
                Searching Meaning...
            </div>
        </div>
    </form>
    <p class="text-center text-dark" id="text-to-speech">
        @if ($definition)
        {{ $definition }}
        <span><a href="#" onclick="textToAudio()"><i class='bx bx-volume-full bx-sm text-danger'></i></a></span>
        @elseif($nepaliMeaning)
        @else
            Search Meaning!
        @endif

    </p>
    <p class="text-center text-dark">{{ $nepaliMeaning }}</p>



    <div class="row h-100">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <p class="alert alert-secondary text-light text-center font-weight-bold" wire:offline>
                Whoops, your device has lost connection. The web page you are viewing is offline.
            </p>
        </div>
    </div>


</div>
