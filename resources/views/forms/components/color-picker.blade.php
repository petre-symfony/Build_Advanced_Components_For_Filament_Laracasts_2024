<script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
  <div x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }">
    <div x-ref="picker"></div>
  </div>
</x-dynamic-component>
