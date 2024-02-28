<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
  @php
    $width = $getWidth();
  @endphp

  <div
      x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }"
  >
    {{ $getWidth() }}
    <div
        wire:ignore
        x-ref="picker"
    ></div>
  </div>
</x-dynamic-component>
