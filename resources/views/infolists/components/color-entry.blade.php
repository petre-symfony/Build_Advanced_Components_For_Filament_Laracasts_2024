<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
  <div
      class="h-5 w-5 rounded"
      style="background-color: {{ $getState() }}"
  >

  </div>
</x-dynamic-component>
