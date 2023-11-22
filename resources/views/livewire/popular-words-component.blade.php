<div>
   <!-- Nav tabs -->
                    <ul class="nav nav-tabs justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#today">Todays' Words</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#week">Week Words</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#month">Month Words</a>
                        </li> --}}
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane container active" id="today">
                            <div class="list-group d-block mx-auto mt-4" style="max-width: 50%">
                                <p class="text-dark text-center">Today's searched words</p>
                                @forelse ($todayPopular as $dictionary)
                                    <a href="#"
                                        class="list-group-item list-group-item-action">{{ $dictionary['Words'] }}</a>
                                @empty
                                    <a href="#" class="list-group-item list-group-item-action">No searched word today</a>
                                @endforelse
                                <br>
                                <div class="d-flex justify-content-end">
                                {{$todayPopular->links()}}
                                </div>


                            </div>
                        </div>
                        <div class="tab-pane container fade" id="week">
                            <div class="list-group d-block mx-auto mt-4" style="max-width: 50%">
                                <p class="text-dark text-center">This week most searched words</p>
                                @forelse ($pouplarThisWeek as $dictionary)
                                    <a href="#"
                                        class="list-group-item list-group-item-action">{{ $dictionary['Words'] }}</a>
                                @empty
                                    <a href="#" class="list-group-item list-group-item-action">No searched word today</a>
                                @endforelse

                            </div>


                        </div>
                        <div class="tab-pane container fade" id="month">
                            <div class="list-group d-block mx-auto mt-4" style="max-width: 50%">
                                <p class="text-dark text-center">This month most searched words</p>
                                @forelse ($popularThisMonth as $dictionary)
                                    <a href="#"
                                        class="list-group-item list-group-item-action">{{ $dictionary['Words'] }}</a>
                                @empty
                                    <a href="#" class="list-group-item list-group-item-action">No searched word today</a>
                                @endforelse

                            </div>
                        </div>
                    </div>
</div>
