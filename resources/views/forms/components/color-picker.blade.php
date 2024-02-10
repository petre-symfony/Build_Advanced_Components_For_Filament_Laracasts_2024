<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
  <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
    <input type="color">
  </div>
</x-dynamic-component>
