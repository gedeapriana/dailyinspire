<div class="w-full h-full">
    <ul>
        @foreach ($lists as $list)
            <li>{{ $list['title'] }}</li>
        @endforeach
    </ul>
</div>
