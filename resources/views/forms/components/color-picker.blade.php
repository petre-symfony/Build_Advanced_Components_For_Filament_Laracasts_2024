<script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
  <div
      x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }"
      x-init="
        const colorPicker = new iro.ColorPicker($refs.picker, {
          color: state
        })

        colorPicker.on('color:change', (color) => {
          state = color.hexString
        })
      "
  >
    {{ $getWidth() }}
    <div
        wire:ignore
        x-ref="picker"
    ></div>
  </div>
</x-dynamic-component>
