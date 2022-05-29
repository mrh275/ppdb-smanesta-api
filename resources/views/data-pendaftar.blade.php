@extends('layouts.template')

@section('content')
    <div class="wrapper data-pendaftar-wrapper pt-20 lg:pt-32 px-4 lg:px-10 pb-10 bg-zinc-200">
        <div class="relative shadow-md rounded-xl bg-white px-6 py-8">
            <h2 class="data-pendaftar-title">Data Pendaftar</h2>
            @php
                $jalur = ['KETM', 'Disabilitas', 'Kondisi Tertentu', 'Prestasi Rapor', 'Prestasi Kejuaraan', 'Perpindahan Orang Tua/Anak Guru', 'Zonasi'];
            @endphp
            <table id="data-pendaftar" class="stripe" style="width:100%;">
                <thead>
                    <tr>
                        <th data-priority="1">No</th>
                        <th data-priority="2">No. Pendaftaran</th>
                        <th data-priority="3">NISN</th>
                        <th data-priority="4">Nama Lengkap</th>
                        <th data-priority="5">Jalur Pendaftaran</th>
                        <th data-priority="6">Asal Sekolah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($biodata as $item)
                        <tr role="row">
                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                {{ $item->noreg_ppdb }}
                            </td>
                            <td>
                                {{ $item->nisn }}
                            </td>
                            <td>
                                {{ $item->nama }}
                            </td>
                            <td>
                                {{ $jalur[$item->jalur_pendaftaran - 1] }}
                            </td>
                            <td>
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
                    autoWidth: false,
                    responsive: true,
                }).columns.adjust()
                .responsive.recalc();
        });
    </script>
@endpush
