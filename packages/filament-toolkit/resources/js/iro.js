import iro from '@jaames/iro'

export default function colorPicker({
  state, width
}) {
  return {
    state,

    init(){
      const colorPicker = new iro.ColorPicker($refs.picker, {
        @if ($width)
        width: @js($width),
        @endif
        color: state
      })

      colorPicker.on('color:change', (color) => {
        state = color.hexString
      })
    }
  }
}