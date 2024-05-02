@if($errors->any())
    <div class="px-4 border border-grey-200">
        <ol class="list-decimal text-red-600">
            @foreach($errors->all() as $message)
                <li>
                    {{ $message }}
                </li>
            @endforeach
        </ol>
    </div>
@endif
