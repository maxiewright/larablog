<div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl">
    <div x-data="{ show: false}" @click.away="show = false">
        <div @click="show = ! show">
            {{$trigger}}
        </div>

        {{--Links--}}
        <div x-show="show" class="py-2 mt-2 bg-gray-100 rounded-xl absolute z-50 overflow-auto max-h-52" style="display: none">
            {{$slot}}
        </div>
    </div>
</div>
