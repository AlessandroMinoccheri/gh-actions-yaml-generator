@props([
'label' => 'Field',
'id',
'name',
'value' => '',
'list' => [],
'help' => '',
'model' => '',
'multiselect' => 0,
'onChange' => ''
]
)

<div class="pl-2">
  <label for="{{ $id ?? $name }}" class="block  font-medium text-gray-700">{{ $label }}</label>
  <select @change="{{ $onChange }}" wire:model.lazy="{{ $model }}" class="{{ $multiselect ? 'form-multiselect' : 'form-select' }} select select-bordered w-full max-w-xs" {{ $multiselect ? 'multiple' : '' }} name="{{ $name }}" id="{{ $id ?? $name }}">
    @foreach( $list as $key=> $item)
    <option value="{{ $key }}">{{  $item }}</option>
    @endforeach
  </select>
  @if ($help !== "")
    <p class="mt-2 text-sm text-gray-500">
      {{ $help }}
    </p>
  @endif
</div>
