<div>
    @if ($counter > 600)
        <div class="alert alert-danger mt-4">
            Есть ограничение на количество посетителей в размере <strong>600</strong>
        </div>
    @endif

    <h3 class="mt-4 text-center">
        Сейчас в магазине:
    </h3>
    <div class="digits text-center {{ $counter > 600 ? 'text-danger' : 'text-success' }}" style="font-size: 180px;">
        {{ $counter }}
    </div>
    <div class="mt-5">
        <div class="row">
            <div class="col">
                <button class="btn btn-outline-danger rounded-0 btn-lg btn-block p-5"
                        {{ $counter <= 0 ? 'disabled' : '' }}
                        wire:click="decrement">
                    <i class="fas fa-minus fa-fw fa-3x"></i>
                </button>
            </div>
            <div class="col">
                <button class="btn btn-outline-success rounded-0 btn-lg btn-block p-5" wire:click="increment">
                    <i class="fas fa-plus fa-fw fa-3x"></i>
                </button>
            </div>
        </div>
    </div>
</div>
