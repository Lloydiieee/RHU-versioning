<x-app-layout>
<form action="{{ route('tetanus.save') }}" method="POST">
    @csrf
    @include('pages.tetanus-toxoid.sub.form')
</form>
<hr>
@include('pages.tetanus-toxoid.sub.tetoxtable')
</x-app-layout>