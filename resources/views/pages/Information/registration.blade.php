<x-app-layout>
    <x-slot name="back"></x-slot>
    <x-slot name="header">
        <h3 class="nk-block-title page-title">
            Patient Registration
        </h3>
    </x-slot>
    <x-slot name="subHeader">
        {{ __('A patient is any recipient of health care services. ') }}
    </x-slot>
    <x-slot name="btn"></x-slot>

    <div class="nk-block">
        <div class="card">
            <div class="card-aside-wrap">
                <div class="card-content">
                    <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <em class="icon ni ni-user-circle"></em>
                                <span>Patient Information</span>
                            </a>
                        </li>
                    </ul>
                    <div class="card-inner">
                        <div class="nk-block">
                            <div class="nk-block">
                                <h6 class="title overline-title text-dark text-base">
                                    Registration Form
                                </h6>
                                <p>You can add the patient registration here.</p>
                            </div>
                            <div class="nk-divider divider md"></div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('info.save') }}" method="POST" autocomplete="off">
                                @csrf
                                @include('pages.information.sub.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


{{-- <x-app-layout>
<form action="{{ route('info.save') }}" method="POST">
    @csrf
    @include('pages.information.sub.form')
</form>
<hr>
@include('pages.information.sub.infotable')
</x-app-layout> --}}
