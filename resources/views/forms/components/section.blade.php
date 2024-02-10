<div {{ $attributes->class(['divide-y border shadow-sm rounded-2xl']) }}>
  @if ($icon = $getIcon())
    @svg($icon, 'w-6 h-6')
  @endif
  
  <div class="p-6 space-y-2">
    <h2 class="text-2xl font-bold">
      {{ $getHeading() }}
    </h2>
    <p class="text-sm text-gray-700">
      {{ $getDescription() }}
    </p>
  </div>

  <div class="p-6 space-y-6">
    {{ $getChildComponentContainer() }}
  </div>
</div>
