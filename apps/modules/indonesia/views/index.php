<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">airline_seat_individual_suite</i>
                </div>
                <p class="card-category">Total Positif</p>
                <h3 class="card-title">
                    <span class="total-positif">0</span>
                    <small>Orang</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-warning">link</i>
                    <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor">coronavirus-monitor</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">healing</i>
                </div>
                <p class="card-category">Total Dirawat</p>
                <h3 class="card-title">
                    <span class="total-dirawat">0</span>
                    <small>Orang</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-info">link</i>
                    <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor">coronavirus-monitor</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">mood</i>
                </div>
                <p class="card-category">Total Sembuh</p>
                <h3 class="card-title">
                    <span class="total-sembuh">0</span>
                    <small>Orang</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-success">link</i>
                    <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor">coronavirus-monitor</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-danger card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">mood_bad</i>
                </div>
                <p class="card-category">Total Meninggal</p>
                <h3 class="card-title">
                    <span class="total-meninggal">0</span>
                    <small>Orang</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-danger">link</i>
                    <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor">coronavirus-monitor</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">Grafik Kasus Virus Covid-19 Di Indonesia</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor" class="text-white">coronavirus-monitor</a>
            </div>
            <div class="card-body">
                <canvas id="chart-id" style="display: block; height: 400px;"></canvas>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <span class="selisih-kasus"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title">Rasio Kasus Virus Covid-19 Di Indonesia</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor" class="text-white">coronavirus-monitor</a>
                </p>
            </div>
            <div class="card-body">
                <canvas id="chart-pie-id" style="display: block; height: 400px;"></canvas>
            </div>
            <div class="card-footer">
                <div class="stats tgl-update"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header card-header-danger">
                <h4 class="card-title">Kasus Virus Covid-19 Per Wilayah Di Indonesia</h4>
                <p class="card-category">
                    <i class="material-icons text-white">link</i>
                    <a href="https://api.kawalcorona.com/indonesia/provinsi">https://api.kawalcorona.com/indonesia/provinsi</a>
                </p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-indonesia">
                    <thead>
                        <th>Wilayah</th>
                        <th style="width: 10px;">Positif</th>
                        <th style="width: 10px;">Sembuh</th>
                        <th style="width: 10px;">Meninggal</th>
                    </thead>
                    <tfoot>
                        <th>Wilayah</th>
                        <th>ID</th>
                        <th>ID</th>
                        <th>ID</th>
                    </tfoot>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- chartjs -->
<script src="<?= base_url('material/chartjs/Chart.bundle.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('material/chartjs/utils.js'); ?>" type="text/javascript"></script>

<script>
    var total_positif = 0;
    var total_sembuh = 0;
    var total_meninggal = 0;
    var total_dirawat = 0;

    $(document).ready(function() {
        var column_list_indonesia = [{
                "data": "Provinsi",
                render: function(data, type, row) {
                    return (data);
                },
                "className": "text-left"
            },
            {
                "data": "Kasus_Posi",
                render: function(data, type, row) {
                    return type === 'export' ? data : numeral(data).format('0,0');
                },
                "className": "text-right"
            },
            {
                "data": "Kasus_Semb",
                render: function(data, type, row) {
                    return type === 'export' ? data : numeral(data).format('0,0');
                },
                "className": "text-right"
            },
            {
                "data": "Kasus_Meni",
                render: function(data, type, row) {
                    return type === 'export' ? data : numeral(data).format('0,0');
                },
                "className": "text-right"
            }
        ];

        var column_def_indonesia = [{
            "orderable": true,
            "targets": 0,
        }];

        table_indonesia = $('.table-indonesia').DataTable({
            "bProcessing": false,
            "bServerSide": false,
            "searchDelay": 150,
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            "columnDefs": column_def_indonesia,
            "columns": column_list_indonesia,
            "order": [
                [0, "asc"]
            ],
            buttons: {
                dom: {
                    button: {
                        tag: 'button',
                        className: ''
                    }
                },

                buttons: [{
                        extend: 'excel',
                        exportOptions: {
                            orthogonal: 'export'
                        },
                        className: 'btn btn-sm btn-success'
                    },
                    {
                        extend: 'pdf',
                        orientation: 'landscape',
                        exportOptions: {
                            orthogonal: 'export-pdf'
                        },
                        className: 'btn btn-sm btn-danger'
                    }
                ]
            },
            "sDom": "<'row'<'col-sm-6' B><'col-sm-6 text-right' l> r> t <'row'<'col-sm-6' i><'col-sm-6 text-right' p>> ",
            "oLanguage": {
                "sLengthMenu": "_MENU_",
                "sZeroRecords": "Maaf, data yang anda cari tidak ditemukan",
                "sProcessing": "<i class=\"m-loader m-loader--brand\"></i> <span style=\"padding-left: 15px;\">Silahkan Tunggu</span>",
                "sInfo": "_START_ - _END_ / _TOTAL_",
                "sInfoEmpty": "0 - 0 / 0",
                "infoFiltered": "(_MAX_)",
                "oPaginate": {
                    "sPrevious": "<i class='fa fa-angle-double-left'></i>",
                    "sNext": "<i class='fa fa-angle-double-right'></i>"
                }
            }
        });

        $('.table-indonesia').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        });

        $('.table-indonesia tfoot th').each(function() {
            var title = $('.table-indonesia tfoot th').eq($(this).index()).text();
            if (title !== "Aksi" && title !== "ID") {
                $(this).html('<input type="text" class="form-control form-control-sm form-datatable" style="width:100%;border-radius: 0px;" placeholder="Cari ' + title + '" />');
            } else {
                $(this).html('');
            }
        });

        var input_filter_value;
        var input_filter_timeout = null;
        table_indonesia.columns().every(function() {
            var that = this;
            $('input', this.footer()).on('keyup change', function(ev) {
                input_filter_value = this.value;
                clearTimeout(input_filter_timeout);
                input_filter_timeout = setTimeout(function() {
                    table_indonesia.search(input_filter_value).draw();
                }, table_indonesia.context[0].searchDelay);
            });
        });
    });

    getHistoryIndonesia();
    getNowIndonesia();
    getProivID();

    function getNowIndonesia() {
        $.ajax({
            type: "POST",
            url: "<?= site_url('indonesia/getNowIndonesia/'); ?>",
            data: {
                request: true,
                csrf_token: $('meta[name=csrf]').attr("content")
            },
            beforeSend: function(result) {

            },
            success: function(resp) {

                if (isJson(resp)) {
                    var obj = jQuery.parseJSON(resp);
                    var dirawat = 0;
                    var sembuh = 0;
                    var meninggal = 0;
                    $.each(obj.latest_stat_by_country, function(i, val) {
                        $(".total-positif").html(val.total_cases);
                        $(".total-dirawat").html(val.active_cases);
                        $(".total-sembuh").html(val.total_recovered);
                        $(".total-meninggal").html(val.total_deaths);
                        $(".tgl-update").html('<i class="material-icons">access_time</i> Di Update Pada ' + tgl_id_short(val.record_date));
                        dirawat = val.active_cases;
                        sembuh = val.total_recovered;
                        meninggal = val.total_deaths;
                    });

                    var PLabel = ['Dirawat', 'Sembuh', 'Meninggal'];
                    var PData = [dirawat, sembuh, meninggal];

                    var pieOptions = {
                        segmentShowStroke: true,
                        segmentStrokeColor: '#fff',
                        segmentStrokeWidth: 1,
                        percentageInnerCutout: 0,
                        animationSteps: 100,
                        animationEasing: 'easeOutBounce',
                        animateRotate: true,
                        animateScale: false,
                        responsive: true,
                        maintainAspectRatio: false,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
                        legend: {
                            display: true,
                            position: 'bottom',
                            fontSize: 9,
                            boxWidth: 20
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var label = data.labels[tooltipItem.index];
                                    var jumlah = data.datasets[0].data[tooltipItem.index];
                                    var total = 0;
                                    $.each(data.datasets[0].data, function(index, value) {
                                        total += Number(value);
                                    });
                                    return label + " = " + numeral(jumlah).format('0,0') + " (" + ((Number(jumlah) / Number(total)) * 100).toFixed(2) + "%)";
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: "Rasio Kasus Virus Covid-19 Di Indonesia"
                        },
                        chartArea: {
                            backgroundColor: 'rgba(255, 255, 255, 1)'
                        }
                    };

                    var config = {
                        type: 'pie',
                        data: {
                            datasets: [{
                                type: 'pie',
                                data: PData,
                                backgroundColor: [
                                    '#00cae3',
                                    '#55b559',
                                    '#f55145',
                                ],
                                fill: false,
                                lineTension: 0.5,
                                label: 'Penjualan Per Sosial Media'
                            }],
                            labels: PLabel
                        },
                        options: pieOptions
                    };
                    var my_chart = $('#chart-pie-id').get(0).getContext('2d');
                    if (typeof char_pie_id != 'undefined') {
                        char_pie_id.destroy();
                    }
                    char_pie_id = new Chart(my_chart, config);
                } else {
                    console.log('Kesalahan : server tidak memberikan respon yang sesuai');
                }
            },
            timeout: 30000,
            error: function(event, textStatus, errorThrown) {
                console.log('Pesan: ' + textStatus + ' , HTTP: ' + errorThrown);
            }
        });
    }

    function getHistoryIndonesia() {
        $.ajax({
            type: "POST",
            url: "<?= site_url('indonesia/getHistoryIndonesia/'); ?>",
            data: {
                request: true,
                csrf_token: $('meta[name=csrf]').attr("content")
            },
            beforeSend: function(result) {

            },
            success: function(resp) {
                if (isJson(resp)) {
                    var obj = jQuery.parseJSON(resp);
                    var periode = {};
                    var dataset = ['Positif', 'Perawatan', 'Meninggal', 'Sembuh'];
                    $.each(obj.stat_by_country, function(i, val) {
                        periode[val.record_date.substring(0, 10)] = {
                            'Periode': val.record_date.substring(0, 10),
                            'Positif': val.total_cases,
                            'Perawatan': val.active_cases,
                            'Meninggal': val.total_deaths,
                            'Sembuh': val.total_recovered,
                        };
                    });

                    var PLabel = [];
                    var JsonData = [];
                    var color_num = 0;
                    var lastJml = [];
                    $.each(periode, function(key, data) {
                        PLabel.push(tgl_id_short(data.Periode));
                    });

                    $.each(dataset, function(h_key, h_val) {
                        // console.log(h_val);
                        var PDataJml = [];
                        var PDataJmlPositif = [];
                        $.each(periode, function(key, data) {
                            $.each(data, function(sub_key, sub_data) {
                                if (h_val === sub_key) {
                                    PDataJml.push(sub_data);
                                }
                                if (sub_key === 'Positif') {
                                    PDataJmlPositif.push(sub_data);
                                }
                            });
                        });
                        lastJml = last(PDataJmlPositif, 2);
                        var xchart = {
                            type: 'line',
                            data: PDataJml,
                            borderColor: window.chartNumberColors[color_num],
                            backgroundColor: window.chartNumberColors[color_num],
                            fill: false,
                            fontColor: "#fff",
                            lineTension: 0,
                            label: h_val
                        };
                        JsonData.push(xchart);
                        color_num++;
                    });
                    var selisih = 0;
                    if (lastJml.length > 1) {
                        selisih = Number(lastJml[0]) - Number(lastJml[1]);
                        if (selisih < 0) {
                            $(".selisih-kasus").html('<span class="text-danger"><i class="fa fa-long-arrow-up"></i> ' + Math.abs(selisih) + ' </span> Kasus Positif');
                        } else {
                            $(".selisih-kasus").html('<span class="text-success"><i class="fa fa-long-arrow-down"></i> ' + Math.abs(selisih) + ' </span> Kasus Positif');
                        }
                    }

                    var chartOpt = {
                        segmentShowStroke: true,
                        segmentStrokeColor: '#fff',
                        segmentStrokeWidth: 1,
                        percentageInnerCutout: 0,
                        animationSteps: 100,
                        animationEasing: 'easeOutBounce',
                        animateRotate: true,
                        animateScale: false,
                        responsive: true,
                        maintainAspectRatio: false,
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>',
                        legend: {
                            display: true,
                            position: 'bottom',
                            fontSize: 9,
                            boxWidth: 20
                        },
                        scales: {
                            xAxes: [{
                                stacked: false,
                            }],
                            yAxes: [{
                                stacked: false,
                                ticks: {
                                    callback: function(value, index, values) {
                                        return numeral(value).format('0,0');
                                    }
                                }
                            }]
                        },
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    return data.datasets[tooltipItem.datasetIndex].label + " : " + numeral(tooltipItem.yLabel).format('0,0');
                                },
                            },
                            titleFontSize: 16,
                            titleFontColor: '#fff',
                            bodyFontColor: '#fff',
                            bodyFontSize: 14,
                            displayColors: true
                        },
                        title: {
                            display: true,
                            text: 'Grafik Kasus Virus Covid-19 Di Indonesia'
                        },
                        chartArea: {
                            backgroundColor: 'rgba(255, 255, 255, 1)'
                        }
                    };

                    var config = {
                        type: 'line',
                        data: {
                            datasets: JsonData,
                            labels: PLabel
                        },
                        options: chartOpt
                    };
                    var my_chart = $('#chart-id').get(0).getContext('2d');
                    if (typeof chart_id_periode != 'undefined') {
                        chart_id_periode.destroy();
                    }
                    chart_id_periode = new Chart(my_chart, config);
                } else {
                    console.log('Kesalahan : server tidak memberikan respon yang sesuai');
                }
            },
            timeout: 30000,
            error: function(event, textStatus, errorThrown) {
                console.log('Pesan: ' + textStatus + ' , HTTP: ' + errorThrown);
            }
        });
    }

    function getProivID() {
        $.ajax({
            type: "POST",
            url: "<?= site_url('indonesia/getProivID/'); ?>",
            data: {
                request: true,
                csrf_token: $('meta[name=csrf]').attr("content")
            },
            beforeSend: function(result) {

            },
            success: function(resp) {
                if (isJson(resp)) {
                    var obj = jQuery.parseJSON(resp);
                    $(".total-negara").html(obj.length);
                    table_indonesia.clear().draw();
                    $.each(obj, function(i, val) {
                        table_indonesia.row.add(val.attributes).draw();
                    });
                } else {
                    console.log('Kesalahan : server tidak memberikan respon yang sesuai');
                }
            },
            timeout: 30000,
            error: function(event, textStatus, errorThrown) {
                console.log('Pesan: ' + textStatus + ' , HTTP: ' + errorThrown);
            }
        });
    }
</script>