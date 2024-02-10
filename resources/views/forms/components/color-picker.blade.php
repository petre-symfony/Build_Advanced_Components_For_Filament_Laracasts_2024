<script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>

<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
  <div
      x-data="{ state: $wire.$entangle('{{ $getStatePath() }}') }"
      x-init="
        const colorPicker = new iro.ColorPicker($refs.picker)

        colorPicker.on('color:change', (color) => {
          console.log(color.hexString)
        })
      "
  >
    <div
        wire:ignore
        x-ref="picker"
    ></div>
  </div>
</x-dynamic-component>
