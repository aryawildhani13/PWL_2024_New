@extends('layouts.template')
@section('content')
    <div class="container-fluid">
        <div class="row" style="gap: 25px">
            <div class="col-4 shadow p-5">
                <h2>Grafik User</h2>
                <canvas id="user-chart"></canvas>
            </div>
            <div class="col-7 shadow p-5">
                <h2>Grafik Stok</h2>
                <canvas id="stok-chart"></canvas>
            </div>
        </div>
        <div class="row" style="margin-top: 25px;">
            <div class="col shadow p-5">
                <h2>Grafik Penjualan</h2>
                <canvas id="penjualan-chart"></canvas>
            </div>
        </div>
    </div>
@endsection
@push('css')
@endpush
@push('js')
    <script>
        $.get("{{ url('chart-user') }}").then((data) => {
            const ctx = document.getElementById('user-chart');
            const labels = ['SuperAdmin', 'Manager', 'Staff/Kasir'];
            const total = data.map((d) => d.total);
            let chart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels,
                    datasets: [{
                        label: '# of Users',
                        data: total,
                    }]
                }
            })
        })

        $.get("{{ url('chart-stok') }}").then((data) => {

            const labels = data.map((d) => d.barang_nama);
            const total = data.map((d) => d.total);

            const ctx = document.getElementById('stok-chart');
            let chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels,
                    datasets: [{
                        label: '# of Products',
                        data: total,
                    }]
                }
            })
        })

        $.get("{{ url('chart-penjualan') }}").then((data) => {

            const labels = data.map((d) => d.date);
            const total = data.map((d) => d.total);

            const ctx = document.getElementById('penjualan-chart');
            let chart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels,
                    datasets: [{
                        label: '# of Penjualan',
                        data: total,
                    }]
                }
            })
        })
    </script>
@endpush
