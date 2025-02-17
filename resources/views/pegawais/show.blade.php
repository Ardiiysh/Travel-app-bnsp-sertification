<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <div class="row">

<div class="col-lg-12 margin-tb">

    <div class="pull-left">

        <h2> Show pegawai</h2>

    </div>

    <div class="pull-right">

        <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>

    </div>

</div>

</div>



<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Name:</strong>
        {{ $pegawai->nama }}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Jabatan:</strong>
        {{ $pegawai->jabatan }}
    </div>
</div>
<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>No Telp:</strong>
        {{ $pegawai->no_telp }}
    </div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Alamat:</strong>
        {{ $pegawai->alamat }}
    </div>
</div>

</div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>


