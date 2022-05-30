@extends('admin.layouts.template-admin')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
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
                                    <th>Status Seleksi</th>
                                    <th>Action</th>
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
                                            @if ($item->is_accepted == 0)
                                                Belum ditentukan
                                            @elseif ($item->is_accepted == 1)
                                                Diterima
                                            @else
                                                Tidak diterima
                                            @endif
                                        </td>
                                        <td class="d-flex flex-column justify-content-center align-items-center">
                                            <button class="btn btn-sm btn-success" id="edit-status-diterima" type="button" data-toggle="modal" data-target="#modal-default">
                                                <i class="fas fa-edit"></i>
                                            </button>
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

        $('#data-pendaftar tbody').on('click', 'tr', function() {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            } else {
                $('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });

        $('#data-pendaftar tbody').on('click', '#edit-status-diterima', function() {
            let selectedRow = $(this).parent().parent();
            let noregPPDB = selectedRow.find('td:nth-child(1)').html()
            let namaPendaftar = selectedRow.find('td:nth-child(2)').html()
            let statusDiterima = selectedRow.find('td:nth-child(7)').attr('id')
            console.log(statusDiterima)
            $('#modal-default .noreg_ppdb').html(noregPPDB);
            $('#modal-default .nama-peserta').html(namaPendaftar);
            $('#modal-default #zero').html('Tidak diterima');
            $('#modal-default #one').html('Diterima');
        });
    </script>
@endpush
