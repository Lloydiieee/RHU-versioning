<x-app-layout>
<form action="{{ route('info.save') }}" method="POST">
    @csrf
    @include('pages.health.sub.form')
</form>
<hr>
@include('pages.health.sub.healthtable')
</x-app-layout>