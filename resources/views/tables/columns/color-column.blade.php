<div class="px-4 py-3">
  <div
      x-data="{
        state: @js($getState())
      }"
      x-init="
        $watch('state', () => {
          console.log(state)
        })
      "
  >
    <input
        x-model.lazy="state"
        type="color"
    >
  </div>
</div>
