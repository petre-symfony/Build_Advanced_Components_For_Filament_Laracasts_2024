<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
  <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
    Color
  </div>
</x-dynamic-component>
