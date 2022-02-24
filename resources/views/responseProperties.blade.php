<div class="ml-2 my-1">
    <div class="w-full {{ $headerStyle }} py-1 px-2 max-w-100">
        <div>
            <span class="text-left w-1/2">
                <span class="uppercase font-bold mr-1">{{ $method }}</span>
                <span>{{ $url }}</span>
            </span>
            <span class="text-right w-1/2">
                {{ $statusCode }}
            </span>
        </div>

        @if(count($statResults))
            <div class="mt-1">
                @foreach ($statResults as $statResult)
                    <div>
                    <span
                        class="font-bold text-gray capitalize">{{ $statResult->name }}:</span> {{ $statResult->value }}
                    </div>
                @endforeach
            </div>
        @endif
    </div>

    @if($showHeaders)
        <div class="underline mt-1">Headers:</div>
        @foreach ($headers as $name => $value)
            <div>
                <span class="font-bold text-gray capitalize">{{ $name }}:</span> {{ $value[0] }}
            </div>
        @endforeach
    @endif
</div>
