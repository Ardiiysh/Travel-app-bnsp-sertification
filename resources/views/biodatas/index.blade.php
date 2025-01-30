<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Biodata') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Details</th>
                </tr>
            </thead>
  
            <tbody>
                <tr>
                    <td>Ardi</td>
                    <td>Bogor, Indoesia</td>

                </tr>
            </tbody>
  
        </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>