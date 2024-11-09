<a {{$attributes}} 
    class="{{request()->fullUrlIs(url($href)) ? 'bg-pink-700 text-white' : 'text-pink-300 hover:bg-pink-800 hover:text-white'}}rounded-md px-3 py-2 text-sm font-medium">
    {{$slot}}
</a>