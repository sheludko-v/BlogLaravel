@if($alert = session()->pull('alert'))
    <div id="alert" class="alert my-alert mb-0 text-center rounded-0 py-2 big revealator-fade (revealator-duration10)">
        {{$alert}}
    </div>
@endif




