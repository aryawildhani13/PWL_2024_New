<style>
  .dt-buttons {
      display: flex;
      gap: .5rem !important;
  }

  .dt-buttons .btn {
      border-radius: 5px !important;
      border: none;
  }

  .dt-buttons .btn.buttons-excel {
      background-color: #33c481;
  }

  .dt-buttons .btn.buttons-pdf {
      background-color: #f00;
  }
</style>
@extends('layouts.template')
@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('penjualan/create') }}">Tambah</a>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter User :</label>
                        <div class="col-3">
                            <select name="user_id" required id="user_id" class="form-control">
                                <option value="">- Semua -</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->user_id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">User</small>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered table-striped table-hover table-sm" id="table_penjualan">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama User</th>
                        <th>Nama Pembeli</th>
                        <th>Kode Penjualan</th>
                        <th>Tanggal Penjualan</th>
                        <th>Total Penjualan (Rp)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
    <script>
        $(document).ready(function() {
            var dataPenjualan = $('#table_penjualan').DataTable({
              dom: 'Bfrtip',
              buttons: ['excel', 'pdf'],
                serverSide: true, 
                ajax: {
                    "url": "{{ url('penjualan/list') }}",
                    "dataType": "json",
                    "type": "GET",
                    "data": function(d) {
                        d.user_id = $('#user_id').val();
                    }
                },
                columns: [{
                        data: "DT_RowIndex", 
                        className: "text-center",
                        orderable: false,
                        searchable: false
                    }, {
                        data: "nama",
                        className: "",
                        orderable: true, 
                        searchable: true 
                    }, {
                        data: "pembeli",
                        className: "",
                        orderable: true, 
                        searchable: true 
                    }, {
                        data: "penjualan_kode",
                        className: "",
                        orderable: false, 
                        searchable: false 
                    }, {
                        data: "penjualan_tanggal",
                        className: "",
                        orderable: false, 
                        searchable: false 
                    },
                    {
                        data: "total",
                        className: "",
                        orderable: false, 
                        searchable: false 
                    },
                    {
                        data: "aksi",
                        className: "",
                        orderable: false, 
                        searchable: false 
                    },
                ],
            });

                // orderable: true, kolom bisa diurutkan
                // searchable: true, kolom bisa dicari


            $('#user_id').on('change', function() {
                dataPenjualan.ajax.reload();
            });
        });
    </script>
@endpush
