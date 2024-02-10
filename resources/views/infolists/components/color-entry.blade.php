<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
  @foreach (Illuminate\Support\Arr::wrap($getState())  as $state)
    <div
        x-data="{}"
        x-tooltip.raw="{{ $state }}"
        class="h-5 w-5 rounded"
        style="background-color: {{ $state }}"
    >

    </div>
  @endforeach

</x-dynamic-component>
