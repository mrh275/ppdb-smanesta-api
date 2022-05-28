@extends('layouts.template')

@section('content')
    <div class="wrapper pt-20 lg:pt-32 px-10 pb-10 bg-zinc-200">
        <div class="relative shadow-md rounded-xl bg-white px-6 py-8">
            <h2 class="data-pendaftar-title">Data Pendaftar</h2>
            @php
                $jalur = ['KETM', 'Disabilitas', 'Kondisi Tertentu', 'Prestasi Rapor', 'Prestasi Kejuaraan', 'Perpindahan Orang Tua/Anak Guru', 'Zonasi'];
            @endphp
            <table id="data-pendaftar" class="display w-full text-sm text-left text-gray-700">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50" id="table-header">
                    <tr class="border-b bg-zinc-100" id="row-header ">
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
                            JALUR PENDAFTARAN
                        </th>
                        <th scope="col" class="px-2 py-5">
                            ASAL SEKOLAH
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodata as $item)
                        <tr class="border-b even:bg-white odd:bg-gray-100 ">
                            <th scope="row" class="px-5 py-3 font-medium text-gray-700 whitespace-nowrap text-center">
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
                                {{ $jalur[$item->jalur_pendaftaran - 1] }}
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
            $('#data-pendaftar').DataTable({
                scrollX: true,
                autoWidth: false,
                lengthChange: false,
                responsive: false,
                "initComplete": function(settings, json) {
                    $('#data-pendaftar thead th').css('text-align', 'center');
                    $('#data-pendaftar thead th').css('padding', '1.25rem 0.5rem');
                    $('#data-pendaftar thead th').css('font-size', '0.9rem');
                }
            });

            $('#myTable').DataTable().columns.adjust()
        });
    </script>
@endpush
