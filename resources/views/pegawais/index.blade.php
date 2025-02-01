<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pegawai') }}
        </h2>
    </x-slot>
    <div class="pull-right">

<a class="btn btn-success" href="{{ route('pegawais.create') }}"> Create New Product</a>

</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                <div class="overflow-hidden w-full overflow-x-auto rounded-sm border border-neutral-300 dark:border-neutral-700">
    <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
        <thead class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
            <tr>
                <th scope="col" class="p-4">No</th>
                <th scope="col" class="p-4">Nama</th>
                <th scope="col" class="p-4">Jabatan </th>
                <th scope="col" class="p-4">No Telp </th>
                <th scope="col" class="p-4">Alamat</th>
                <th scope="col" class="p-4">Action</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
            @foreach ( $pegawais as $pegawai )
                
            <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pegawai->nama }}</td>
            <td>{{ $pegawai->jabatan }}</td>
            <td>{{ $pegawai->no_telp }}</td>
            <td>{{ $pegawai->alamat }}</td>

<td>
    <form action="{{ route('pegawais.destroy',$pegawai->id) }}" method="POST">
        <a class="whitespace-nowrap rounded-sm bg-black border border-black px-4 py-2 text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-white dark:border-white dark:text-black dark:focus-visible:outline-white" href="{{ route('pegawais.show',$pegawai->id) }}">Show</a>
        <a class="whitespace-nowrap rounded-radius bg-warning border border-warning px-4 py-2 text-sm font-medium tracking-wide text-onWarning transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-warning active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-warning dark:border-warning dark:text-onWarning dark:focus-visible:outline-warning" href="{{ route('pegawais.edit',$pegawai->id) }}">Edit</a>
        @csrf
        @method('DELETE')
        <button type="submit" class="whitespace-nowrap rounded-radius bg-danger border border-danger px-4 py-2 text-sm font-medium tracking-wide text-onDanger transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-danger active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-danger dark:border-danger dark:text-onDanger dark:focus-visible:outline-danger">Delete</button>

    </form>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

