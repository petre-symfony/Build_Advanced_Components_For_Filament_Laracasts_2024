<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
  <div x-data="{}" class="flex flex-wrap gap-1">
    @foreach (Illuminate\Support\Arr::wrap($getState())  as $state)
      <div
          x-tooltip.raw="{{ $state }}"
          class="h-5 w-5 rounded"
          style="background-color: {{ $state }}"
      >

      </div>
    @endforeach
  </div>
</x-dynamic-component>
