<div class="card text-center mb-2 flex-fill" style="border: none; border-radius: 0">
    <div class="card-body">
        {{-- <img class="card-img-top rounded-circle mx-auto" src="{{ asset($image) }}" alt=""> --}}
        <i class="fa fa-2x fa-{{ $icon }}"></i>
        <h2 class="card-title text-capitalize text-bold heading-title">{{ $title }}</h2>
        <p class="card-text" style="color: #9BA5A7; font-size: 14px">{{ $text }}</p>
    </div>
</div>