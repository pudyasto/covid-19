<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
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
                    <a href="https://api.kawalcorona.com/positif">https://api.kawalcorona.com/positif</a>
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
                    <a href="https://api.kawalcorona.com/sembuh">https://api.kawalcorona.com/sembuh</a>
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
                    <a href="https://api.kawalcorona.com/meninggal">https://api.kawalcorona.com/meninggal</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-header card-header-info card-header-icon">
                <div class="card-icon">
                    <i class="material-icons">language</i>
                </div>
                <p class="card-category">Total Negara</p>
                <h3 class="card-title">
                    <span class="total-negara">0</span>
                    <small>Negara</small>
                </h3>
            </div>
            <div class="card-footer">
                <div class="stats">
                    <i class="material-icons text-info">link</i>
                    <a href="https://api.kawalcorona.com">https://api.kawalcorona.com</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title history-country">Grafik Riwayat Kasus Virus Covid-19</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor" class="text-white">coronavirus-monitor</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="form-group row">
                            <div class="col-sm-7">
                                <?php
                                echo form_dropdown(
                                    $form['countries']['name'],
                                    $form['countries']['data'],
                                    $form['countries']['value'],
                                    $form['countries']['attr']
                                );
                                ?>
                            </div>
                            <div class="col-sm-5">
                                <button type="button" style="margin: 0px;" class="btn btn-primary btn-block btn-refresh">Tampilkan</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <canvas id="chart-id" style="display: block; height: 400px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <table class="table">
                    <tr>
                        <td colspan="4" class="text-center">Selisih dari hari sebelumnya</td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <span class="selisih-positif"></span>
                        </td>
                        <td class="text-center">
                            <span class="selisih-perawatan"></span>
                        </td>
                        <td class="text-center">
                            <span class="selisih-meninggal"></span>
                        </td>
                        <td class="text-center">
                            <span class="selisih-sembuh"></span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title history-pie-country">Rasio Kasus Virus Covid-19</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor" class="text-white">coronavirus-monitor</a>
                </p>
            </div>
            <div class="card-body">
                <canvas id="chart-pie" style="display: block; height: 551px;"></canvas>
            </div>
            <div class="card-footer">
                <div class="stats tgl-update"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-danger">
                <h4 class="card-title"><i class="material-icons text-white">place</i> Pemetaan Kasus Virus Covid-19</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> Sumber Data : https://rapidapi.com/astsiatsko/api/coronavirus-monitor
                </p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div id="mapid" style="height: 550px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header card-header-info">
                <h4 class="card-title">Kasus Virus Covid-19 Global</h4>
                <p class="card-category">
                    <i class="material-icons text-white">link</i>
                    <a href="https://api.kawalcorona.com">https://api.kawalcorona.com</a>
                </p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-global">
                    <thead>
                        <tr>
                            <th>Negara</th>
                            <th style="width: 100px;text-align: center !important;">Positif</th>
                            <th style="width: 100px;text-align: center !important;">Sembuh</th>
                            <th style="width: 100px;text-align: center !important;">Meninggal</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Negara</th>
                            <th>ID</th>
                            <th>ID</th>
                            <th>ID</th>
                        </tr>
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
<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

<script>
    var total_positif = 0;
    var total_sembuh = 0;
    var total_meninggal = 0;

    $(document).ready(function() {
        var column_list_global = [{
                "data": "Country_Region",
                render: function(data, type, row) {
                    return (data);
                },
                "className": "text-left"
            },
            {
                "data": "Confirmed",
                render: function(data, type, row) {
                    return type === 'export' ? data : numeral(data).format('0,0');
                },
                "className": "text-right"
            },
            {
                "data": "Recovered",
                render: function(data, type, row) {
                    return type === 'export' ? data : numeral(data).format('0,0');
                },
                "className": "text-right"
            },
            {
                "data": "Deaths",
                render: function(data, type, row) {
                    return type === 'export' ? data : numeral(data).format('0,0');
                },
                "className": "text-right"
            }
        ];

        var column_def_global = [{
            "orderable": true,
            "targets": 0,
        }];

        table_global = $('.table-global').DataTable({
            "bProcessing": false,
            "bServerSide": false,
            "searchDelay": 150,
            "lengthMenu": [
                [10, 25, 50, 100, -1],
                [10, 25, 50, 100, "All"]
            ],
            "columnDefs": column_def_global,
            "columns": column_list_global,
            "order": [
                [1, "desc"]
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

        $('.table-global').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        });

        $('.table-global tfoot th').each(function() {
            var title = $('.table-global tfoot th').eq($(this).index()).text();
            if (title !== "Aksi" && title !== "ID") {
                $(this).html('<input type="text" class="form-control form-control-sm form-datatable" style="width:100%;border-radius: 0px;" placeholder="Cari ' + title + '" />');
            } else {
                $(this).html('');
            }
        });

        var input_filter_value;
        var input_filter_timeout = null;
        table_global.columns().every(function() {
            var that = this;
            $('input', this.footer()).on('keyup change', function(ev) {
                input_filter_value = this.value;
                clearTimeout(input_filter_timeout);
                input_filter_timeout = setTimeout(function() {
                    table_global.search(input_filter_value).draw();
                }, table_global.context[0].searchDelay);
            });
        });

        $("#countries").select2();
    });


    var mymap = L.map('mapid').setView(
        [-0.7893, 113.9213], 2.5);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: $('meta[name=mapbookapi]').attr("content")
    }).addTo(mymap);

    getGlobal();
    getWidgets('positif');
    getWidgets('sembuh');
    getWidgets('meninggal');
    getHistoryCountry();

    $(".btn-refresh").click(function() {
        getHistoryCountry();
    });

    function getWidgets(param) {
        $.ajax({
            type: "POST",
            url: "<?= site_url('home/getWidgets/'); ?>",
            data: {
                request: true,
                param: param,
                csrf_token: $('meta[name=csrf]').attr("content")
            },
            beforeSend: function(result) {
                $(".total-" + param).html('<i class="fa fa-refresh fa-spin font-icon-widget"></i>');
            },
            success: function(resp) {
                if (isJson(resp)) {
                    var obj = jQuery.parseJSON(resp);
                    if (param == "positif") {
                        total_positif = numeral(obj.value).value();
                    } else if (param == "sembuh") {
                        total_sembuh = numeral(obj.value).value();
                    } else if (param == "meninggal") {
                        total_meninggal = numeral(obj.value).value();
                    }

                    $(".total-" + param).html(obj.value);
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

    function getGlobal() {
        $.ajax({
            type: "POST",
            url: "<?= site_url('home/getGlobal/'); ?>",
            data: {
                request: true,
                csrf_token: $('meta[name=csrf]').attr("content")
            },
            beforeSend: function(result) {
                $(".total-negara").html('<i class="fa fa-refresh fa-spin font-icon-widget"></i>');
            },
            success: function(resp) {
                if (isJson(resp)) {
                    var obj = jQuery.parseJSON(resp);
                    $(".total-negara").html(obj.length);
                    table_global.clear().draw();
                    $.each(obj, function(i, val) {
                        table_global.row.add(val.attributes).draw();
                        var marker = L.marker([val.attributes.Lat, val.attributes.Long_]).addTo(mymap);
                        marker.bindPopup(dataSuspect(val.attributes));
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

    function dataSuspect(attr) {
        return '<b>' + attr.Country_Region + '</b>' +
            '<br>' +
            '<table class="table table-sm">' +
            '<tr>' +
            '<td>' +
            'Positif' +
            '</td>' +
            '<td>' +
            attr.Confirmed +
            '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>' +
            'Perawatan' +
            '</td>' +
            '<td>' +
            attr.Active +
            '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>' +
            'Sembuh' +
            '</td>' +
            '<td>' +
            attr.Recovered +
            '</td>' +
            '</tr>' +
            '<tr>' +
            '<td>' +
            'Meninggal' +
            '</td>' +
            '<td>' +
            attr.Deaths +
            '</td>' +
            '</tr>' +
            '</table>';
    }

    function getHistoryCountry() {
        var countries = $("#countries").val();
        $.ajax({
            type: "POST",
            url: "<?= site_url('home/getHistoryCountry/'); ?>",
            data: {
                request: true,
                countries: countries,
                csrf_token: $('meta[name=csrf]').attr("content")
            },
            beforeSend: function(result) {
                $(".btn-refresh").html('Mengambil Data...').attr("disabled", true);
            },
            success: function(resp) {
                $(".btn-refresh").html('Tampilkan').attr("disabled", false);
                if (isJson(resp)) {
                    var country_name = $("#countries option:selected").text();
                    var obj = jQuery.parseJSON(resp);
                    setChartPie(obj, country_name);
                    var periode = {};
                    var dataset = ['Positif', 'Perawatan', 'Meninggal', 'Sembuh'];
                    $.each(obj.stat_by_country, function(i, val) {
                        periode[val.record_date.substring(0, 10)] = {
                            'Periode': val.record_date.substring(0, 10),
                            'Positif': numeral(val.total_cases).value(),
                            'Perawatan': numeral(val.active_cases).value(),
                            'Meninggal': numeral(val.total_deaths).value(),
                            'Sembuh': numeral(val.total_recovered).value(),
                        };
                    });
                    var PLabel = [];
                    var JsonData = [];
                    var color_num = 0;
                    var latJmlPositif = [];
                    var latJmlDirawat = [];
                    var latJmlMeninggal = [];
                    var latJmlSembuh = [];
                    $.each(periode, function(key, data) {
                        PLabel.push(tgl_id_short(data.Periode));
                    });

                    $.each(dataset, function(h_key, h_val) {
                        // console.log(h_val);
                        var PDataJml = [];
                        var PDataJmlPositif = [];
                        var PDataJmlDirawat = [];
                        var PDataJmlMeninggal = [];
                        var PDataJmlSembuh = [];
                        $.each(periode, function(key, data) {
                            $.each(data, function(sub_key, sub_data) {
                                if (h_val === sub_key) {
                                    PDataJml.push(sub_data);
                                }
                                if (sub_key === 'Positif') {
                                    PDataJmlPositif.push(sub_data);
                                }
                                if (sub_key === 'Perawatan') {
                                    PDataJmlDirawat.push(sub_data);
                                }
                                if (sub_key === 'Meninggal') {
                                    PDataJmlMeninggal.push(sub_data);
                                }
                                if (sub_key === 'Sembuh') {
                                    PDataJmlSembuh.push(sub_data);
                                }
                            });
                        });
                        latJmlPositif = last(PDataJmlPositif, 2);
                        latJmlDirawat = last(PDataJmlDirawat, 2);
                        latJmlMeninggal = last(PDataJmlMeninggal, 2);
                        latJmlSembuh = last(PDataJmlSembuh, 2);
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
                    $(".history-country").html('Grafik Riwayat Kasus Virus Covid-19 Di Negara ' + country_name);

                    var selisih = 0;
                    if (latJmlPositif.length > 1) {
                        selisih = Number(latJmlPositif[0]) - Number(latJmlPositif[1]);
                        if (selisih < 0) {
                            $(".selisih-positif").html('<span class="text-danger"><i class="fa fa-long-arrow-up"></i> ' + numeral(Math.abs(selisih)).format('0,0') + ' </span> Kasus Positif');
                        } else {
                            $(".selisih-positif").html('<span class="text-success"><i class="fa fa-long-arrow-down"></i> ' + numeral(Math.abs(selisih)).format('0,0') + ' </span> Kasus Positif');
                        }
                    }

                    var selisih = 0;
                    if (latJmlDirawat.length > 1) {
                        selisih = Number(latJmlDirawat[0]) - Number(latJmlDirawat[1]);
                        if (selisih < 0) {
                            $(".selisih-perawatan").html('<span class="text-danger"><i class="fa fa-long-arrow-up"></i> ' + numeral(Math.abs(selisih)).format('0,0') + ' </span> Kasus Perawatan');
                        } else {
                            $(".selisih-perawatan").html('<span class="text-success"><i class="fa fa-long-arrow-down"></i> ' + numeral(Math.abs(selisih)).format('0,0') + ' </span> Kasus Perawatan');
                        }
                    }

                    var selisih = 0;
                    if (latJmlMeninggal.length > 1) {
                        selisih = Number(latJmlMeninggal[0]) - Number(latJmlMeninggal[1]);
                        if (selisih < 0) {
                            $(".selisih-meninggal").html('<span class="text-danger"><i class="fa fa-long-arrow-up"></i> ' + numeral(Math.abs(selisih)).format('0,0') + ' </span> Kasus Meninggal');
                        } else {
                            $(".selisih-meninggal").html('<span class="text-success"><i class="fa fa-long-arrow-down"></i> ' + numeral(Math.abs(selisih)).format('0,0') + ' </span> Kasus Meninggal');
                        }
                    }

                    var selisih = 0;
                    if (latJmlSembuh.length > 1) {
                        selisih = Number(latJmlSembuh[0]) - Number(latJmlSembuh[1]);
                        if (selisih < 0) {
                            $(".selisih-sembuh").html('<span class="text-danger"><i class="fa fa-long-arrow-up"></i> ' + numeral(Math.abs(selisih)).format('0,0') + ' </span> Kasus Sembuh');
                        } else {
                            $(".selisih-sembuh").html('<span class="text-success"><i class="fa fa-long-arrow-down"></i> ' + numeral(Math.abs(selisih)).format('0,0') + ' </span> Kasus Sembuh');
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
                            text: 'Grafik Kasus Virus Covid-19 Di Negara ' + country_name
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
                $(".btn-refresh").html('Tampilkan').attr("disabled", false);
                console.log('Pesan: ' + textStatus + ' , HTTP: ' + errorThrown);
            }
        });
    }

    function setChartPie(obj, country_name) {
        var dirawat = 0;
        var sembuh = 0;
        var meninggal = 0;
        $.each(obj.stat_by_country, function(i, val) {
            $(".tgl-update").html('<i class="material-icons">access_time</i> Di Update Pada ' + tgl_id_short(val.record_date));
            dirawat = numeral(val.active_cases).value();
            sembuh = numeral(val.total_recovered).value();
            meninggal = numeral(val.total_deaths).value();
        });

        $(".history-pie-country").html('Rasio Kasus Virus Covid-19 Di Negara ' + country_name);

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
                text: "Rasio Kasus Virus Covid-19 Di Negara " + country_name
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
                    label: "Rasio Kasus Virus Covid-19 Di Negara " + country_name
                }],
                labels: PLabel
            },
            options: pieOptions
        };
        var my_chart = $('#chart-pie').get(0).getContext('2d');
        if (typeof chart_pie != 'undefined') {
            chart_pie.destroy();
        }
        chart_pie = new Chart(my_chart, config);
    }
</script>