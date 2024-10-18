<x-app-layout>
    <form action="{{ route('hpv.save') }}" method="POST">
        @csrf
        @include('pages.hpv-vaccination.sub.form')
    </form>
    <hr>
    @include('pages.hpv-vaccination.sub.hpvtable')
    </x-app-layout>