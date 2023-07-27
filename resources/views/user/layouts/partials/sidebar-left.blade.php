@push('styles')
    @livewireStyles
@endpush
<aside class="w-full grid bg-slate-200 h-full grid-cols-1 grid-rows-12">
    <div id="brand" class="row-span-1 flex justify-center items-center text-xl text-slate-700 font-bold">
        {{ config('app.name') }}</div>
    <div id="side-lists" class="row-span-10 bg-red-100">
        @livewire('nav-lists')
    </div>
    <div id="side-footer" class="row-span-1">Footer</div>
</aside>
@push('script')
    @livewireScripts
@endpush
