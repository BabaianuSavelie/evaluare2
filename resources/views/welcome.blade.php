<x-app-layout>
    <div class="container">
        <div class="grid grid-cols-4 gap-3">
        @foreach($events as $event)
            <x-card :event="$event"/>
        @endforeach
        </div>
    </div>
</x-app-layout>
