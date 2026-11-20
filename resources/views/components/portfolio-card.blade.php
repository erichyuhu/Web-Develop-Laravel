<div class="card h-100 shadow-sm">
    @if(isset($item['crop']) && $item['crop'] === true)
        <div class="ratio ratio-16x9">
            <img src="{{ asset($item['image']) }}" class="card-img-top object-fit-cover" alt="{{ $item['title'] }}">
        </div>
    @else
        <img src="{{ asset($item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}">
    @endif

    <div class="card-body">
        <h5 class="card-title">{{ $item['title'] }}</h5>
        <p class="card-text">{{ $item['desc'] }}</p>
    </div>
    
    <div class="card-footer bg-transparent border-top-0">
        <span class="badge bg-secondary">{{ $item['tech'] }}</span>
    </div>
</div>