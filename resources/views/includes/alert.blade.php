@if($alert = session()->pull('alert'))
    <div id="alert" class="my-alert-s mb-0 text-center rounded-3 py-2 big revealator-fade (revealator-duration10)">
        {{$alert}}
    </div>
@endif




