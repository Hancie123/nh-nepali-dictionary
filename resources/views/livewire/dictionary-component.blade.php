<div>
<form wire:submit="dictionarySearch">
        <div class="row text-center py-2 mt-3">
            <div class="col-6 mx-auto"> <!-- Increase the width to col-6 -->
                <div class="d-flex align-items-start mb-4">
                    <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input class="form-control" placeholder="Search" type="text" wire:model="word">
                    </div>
                    <button  wire:click="dictionarySearch" class="btn bg-gradient-secondary w-auto ms-2">Search</button>
                </div>
            </div>
        </div>
    </form>
    <p class="text-center p-5 text-dark">@if($definition)@else Search Meaning! @endif
        {{$definition}}<br><br>{{$nepaliMeaning}}</p>
</div>
