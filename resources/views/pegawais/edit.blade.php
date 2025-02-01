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

                                <h2>Edit pegawai</h2>

                            </div>

                            <div class="pull-right">

                                <a class="btn btn-primary" href="{{ route('pegawais.index') }}"> Back</a>

                            </div>

                        </div>

                        </div>



                        @if ($errors->any())

                        <div class="alert alert-danger">

                            <strong>Whoops!</strong> There were some problems with your input.<br><br>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                        @endif



                        <form action="{{ route('pegawais.update',$pegawai->id) }}" method="POST">

                        @csrf

                        @method('PUT')



                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama:</strong>
                                    <input type="text" name="nama" value="{{ $pegawai->nama }}" class="form-control" placeholder="nama">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Jabatan:</strong>
                                    <input type="text" name="jabatan" value="{{ $pegawai->jabatan }}" class="form-control" placeholder="jabatan">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>No Telp:</strong>
                                    <input type="number" name="no_telp" value="{{ $pegawai->no_telp }}" class="form-control" placeholder="no_telp">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Alamat:</strong>
                                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="alamat">{{ $pegawai->alamat }}</textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                            <button type="submit" class="btn btn-primary">Submit</button>

                            </div>

                        </div>



                        </form>


                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


