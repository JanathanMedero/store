@if ($errors->any())
    <div class="errors block card w-1/3 rounded shadow-lg mx-auto px-4 py-2 bg-red-400 my-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-white text-center">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
