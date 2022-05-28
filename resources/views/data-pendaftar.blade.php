@extends('layouts.template')

@section('content')
    <div class="wrapper pt-20 lg:pt-32 px-10 pb-10 bg-zinc-200 dark:bg-zinc-800">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <tbody class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700 text-center">
                        <th scope="col" class="px-2 w-2 py-5">
                            No
                        </th>
                        <th scope="col" class="px-2 py-5">
                            Nomor Pendaftaran
                        </th>
                        <th scope="col" class="px-2 py-5">
                            NISN
                        </th>
                        <th scope="col" class="px-2 py-5">
                            NAMA LENGKAP
                        </th>
                        <th scope="col" class="px-2 py-5">
                            Asal Sekolah
                        </th>
                    </tr>
                    @foreach ($biodata as $item)
                        <tr class="border-b dark:bg-gray-800 dark:border-gray-700 odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700">
                            <th scope="row" class="px-5 py-3 font-medium text-gray-900 dark:text-white whitespace-nowrap text-center">
                                {{ $loop->iteration }}
                            </th>
                            <td class="px-5 py-3 text-center">
                                {{ $item->noreg_ppdb }}
                            </td>
                            <td class="px-5 py-3 text-center">
                                {{ $item->nisn }}
                            </td>
                            <td class="px-5 py-3">
                                {{ $item->nama }}
                            </td>
                            <td class="px-5 py-3 text-center">
                                {{ $item->asal_sekolah }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#data-pendaftar').DataTable();
        });
    </script>
@endpush
