<div>
    <div>
        <input type="text" class="form-control my-2" id="formGroupExampleInput" wire:model="search">
        <div class="d-flex my-1">
            <p>新增借用物品</p>
            <span wire:click="increment" class="fas fa-plus p-1"></span>
        </div>
        @foreach ($steps as $step)
            <div wire:key="{{ $step }} " class="border p-2 my-1">
                <div class="d-flex">
                    <h5>借用物品{{ $step + 1 }}</h5>
                    <span class="fas fa-times text-danger p-2" wire:click="remove({{ $step }})"></span>
                </div>
                <p class="pt-2">雜誌名稱</p>
                <select class="custom-select" name="steps[]" required>
                    <option selected>Open this select menu</option>
                    @foreach ($book as $b)
                        <option>{{'('.$b->number.')' . $b->object.'('. $b->issue.')'  }}</option>
                    @endforeach
                </select>
            </div>
        @endforeach
    </div>
</div>
