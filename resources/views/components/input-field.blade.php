<div class="form-group w-full">
    <input type="{{ $type }}" class="{{ $class }} transition-all @error($model) border-danger @endError" wire:model.defer="{{ $model }}" placeholder="{{ $placeholder }}" />
    @error($model)
        <div class="error py-1">{{ $errors->first($model) }}</div>
    @endError    
</div>