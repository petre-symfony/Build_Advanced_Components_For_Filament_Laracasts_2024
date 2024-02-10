<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
  @dd($getState())
  
  <div
      x-data="{}"
      x-tooltip.raw="{{ $getState() }}"
      class="h-5 w-5 rounded"
      style="background-color: {{ $getState() }}"
  >

  </div>
</x-dynamic-component>
