<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
  <div x-data="{}" class="flex flex-wrap gap-1">
    @foreach (Illuminate\Support\Arr::wrap($getState())  as $state)
      <div
          x-tooltip.raw="{{ $state }}"
          @class([
            'rounded',
            'h-4 w-4' => $getWidth() === 4,
            'h-5 w-5' => $getWidth() === 5 || $getWidth() === null,
            'h-6 w-6' => $getWidth() === 6
          ])
          style="background-color: {{ $state }}"
      >

      </div>
    @endforeach
  </div>
</x-dynamic-component>
