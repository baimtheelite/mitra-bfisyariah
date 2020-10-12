{{-- @props(['icon', 'title', 'detail']) --}}


<li class="list-group-item p-0 pt-2 pb-2" style="border: none">
    <h5>
        <i class="fa fa-{{ $icon }} mr-2"></i>
        {{ $title }}
    </h5>
    <p class="text-muted">{{ $slot }}</p>
</li>