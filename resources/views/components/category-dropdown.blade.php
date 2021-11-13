<x-dropdown>
    <x-slot name="trigger">
        <button class="inline-flex py-2 pl-3 pr-9 text-sm font-semibold w-48">
            Categories
            <x-icon.down-arrow class="absolute pointer-events-none"/>
        </button>
    </x-slot>

    <x-dropdown-link href="/" :active="!request(['category'])">All</x-dropdown-link>

    @foreach($categories as $category)
        <x-dropdown-link
            href="/?category={{$category->slug}}"
            :active="request(['category']) == $category->slug"
        >
            {{ucwords($category->name)}}
        </x-dropdown-link>
    @endforeach
</x-dropdown>
