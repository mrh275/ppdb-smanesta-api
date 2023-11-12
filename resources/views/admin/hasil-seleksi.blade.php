@extends('admin.layouts.template-admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="mb-2 row">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $title }}</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/admin') }}">Home</a></li>
                            <li class="breadcrumb-item active">{{ $title }}</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        @php
                            $jalur = ['KETM', 'Disabilitas', 'Kondisi Tertentu', 'Prestasi Rapor', 'Prestasi Kejuaraan', 'Perpindahan Orang Tua/Anak Guru', 'Zonasi'];
                        @endphp
                        <table id="data-pendaftar" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nomor Pendaftaran</th>
                                    <th>Nama</th>
                                    <th>NISN(s)</th>
                                    <th>Tempat, tanggal lahir</th>
                                    <th>Jalur Pendaftaran</th>
                                    <th>Asal Sekolah</th>
                                    <th>Hasil Seleksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($biodata as $item)
                                    <tr role="row">
                                        <td>
                                            {{ $item->noreg_ppdb }}
                                        </td>
                                        <td style="width: 10rem">
                                            {{ $item->nama }}
                                        </td>
                                        <td>
                                            {{ $item->nisn }}
                                        </td>
                                        <td>
                                            {{ $item->tempat_lahir . ', ' . \Carbon\Carbon::parse($item->tanggal_lahir)->isoFormat('D MMMM Y') }}
                                        </td>
                                        <td style="width: 7rem">
                                            {{ $jalur[$item->jalur_pendaftaran - 1] }}
                                        </td>
                                        <td>
                                            {{ $item->asal_sekolah }}
                                        </td>
                                        <td>
                                            @if ($item->is_verified == 1 && $item->is_accepted == 1)
                                                Diterima
                                            @elseif($item->is_accepted == 1 && $item->is_accepted == 0)
                                                Terverifikasi
                                            @elseif($item->is_verified == 0 && $item->is_accepted == 0)
                                                Belum Verifikasi
                                            @else
                                                Tidak diterima
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')
    <script>
        $("#data-pendaftar").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["excel", "pdf", "print"],
            init: function() {},
        }).buttons().container().appendTo('#data-pendaftar_wrapper .col-md-6:eq(0)');

        $('#data-pendaftar thead tr th').css('text-align', 'center');

        $('#data-pendaftar_wrapper .col-md-6:eq(0) .btn-group .buttons-excel').removeClass('btn-secondary').addClass('btn-success');
        $('#data-pendaftar_wrapper .col-md-6:eq(0) .btn-group .buttons-pdf').removeClass('btn-secondary').addClass('btn-danger');

        $('#data-pendaftar_wrapper .col-md-6:eq(0) .btn-group .buttons-excel span').html('<i class="fas fa-file-excel"></i> &nbsp;Excel')
        $('#data-pendaftar_wrapper .col-md-6:eq(0) .btn-group .buttons-pdf span').html('<i class="fas fa-file-pdf"></i> &nbsp;Pdf')
        $('#data-pendaftar_wrapper .col-md-6:eq(0) .btn-group .buttons-print span').html('<i class="fas fa-print"></i> &nbsp;Print')
    </script>
@endpush
