@extends('main')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-6 mb-4">
            <div id="container" style="min-height: 450px;"></div>
        </div>
        <div class="col-lg-6 mb-4">
            <div id="container-angkatan" style="min-height: 450px;"></div>
        </div>
    </div>

    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Grafik Jumlah Mahasiswa UMDP per Program Studi'
                },
                subtitle: {
                    text: 'Sumber: Aplikasi Akademik'
                },
                xAxis: {
                    categories: {!! json_encode($categories) !!},
                    crosshair: true,
                    accessibility: {
                        description: 'Program Studi'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Mahasiswa'
                    }
                },
                tooltip: {
                    valueSuffix: ' mahasiswa'
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Mahasiswa',
                    data: {!! json_encode($counts) !!}
                }]
            });

            Highcharts.chart('container-angkatan', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Grafik Jumlah Mahasiswa UMDP per Tahun Angkatan'
                },
                subtitle: {
                    text: 'Sumber: Aplikasi Akademik'
                },
                xAxis: {
                    categories: {!! json_encode($angkatanCategories) !!},
                    crosshair: true,
                    accessibility: {
                        description: 'Tahun Angkatan'
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Jumlah Mahasiswa'
                    }
                },
                tooltip: {
                    valueSuffix: ' mahasiswa'
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Mahasiswa',
                    data: {!! json_encode($angkatanCounts) !!}
                }]
            });
        });
    </script>
@endsection

@section('footer')
    Grafik menampilkan jumlah mahasiswa per prodi dan per tahun angkatan berdasarkan data saat ini.
@endsection