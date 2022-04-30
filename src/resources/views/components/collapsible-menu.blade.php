<div id="sidebar">
    
    @foreach ($sidebarObject as $menus)
        @php
            $menus['id'] = Str::slug($menus['parent']);
        @endphp
        <div>
            <input id="{{$menus['id']}}" type="checkbox" class="peer hidden">
            <label for="{{$menus['id']}}" class="cursor-pointer block">
                {{$menus['parent']}}
            </label>
            @foreach ($menus['content'] as $item)
                <div class="overflow-hidden h-0 transition-height ease-in-out duration-500 peer-checked:h-7 bg-blue-200 flex items-center">
                    {{$item}}
                </div>
            @endforeach
        </div>
    @endforeach
</div>