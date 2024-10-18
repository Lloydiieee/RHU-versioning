<x-app-layout>
    <form action="{{ route('history.save') }}" method="POST">
        @csrf
        @include('pages.history.sub.form')
    </form>
    <hr>
    @include('pages.history.sub.obstable')
</x-app-layout>
