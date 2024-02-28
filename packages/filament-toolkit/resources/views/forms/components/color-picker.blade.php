<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
  @php
    $width = $getWidth();
  @endphp

  <div
      x-data="colorPicker({ state: $wire.$entangle('{{ $getStatePath() }}'), width: @js($width) })"
  >
    {{ $getWidth() }}
    <div
        wire:ignore
        x-ref="picker"
    ></div>
  </div>
</x-dynamic-component>
