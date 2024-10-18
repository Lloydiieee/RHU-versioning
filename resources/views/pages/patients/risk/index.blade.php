<x-app-layout>
<form action="{{ route('info.save') }}" method="POST">
    @csrf
    @include('pages.risk.sub.form')
</form>
<hr>
@include('pages.risk.sub.risktable')
</x-app-layout>