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
                        <canvas id="chart-id" style="display: block; height: 300px;"></canvas>
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
            <div class="card-header card-header-primary">
                <h4 class="card-title history-pie-country">Rasio Kasus Virus Covid-19</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor" class="text-white">coronavirus-monitor</a>
                </p>
            </div>
            <div class="card-body">
                <canvas id="chart-pie" style="display: block; height: 451px;"></canvas>
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
            <div class="card-header card-header-primary">
                <h4 class="card-title history-stacked-country">Perbandingan Meninggal dan Sembuh Kasus Covid-19</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor" class="text-white">coronavirus-monitor</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <canvas id="chart-stacked-global" style="display: block; height: 300px;"></canvas>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <table class="table">
                    <tr>
                        <td class="text-center">
                            <div class="label-avg-sembuh">Rata rata persen sembuh</div>
                            <span class="badge badge-success avg-sembuh" style="font-size: 20px;">0%</span>
                        </td>
                        <td class="text-center">
                            <div class="label-avg-meninggal">Rata rata persen meninggal</div>
                            <span class="badge badge-danger avg-meninggal" style="font-size: 20px;">0%</span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-success">
                <h4 class="card-title"><i class="material-icons">mood</i> Top 10 Persentase Jumlah Sembuh Kasus Covid-19 Per Negara</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor" class="text-white">coronavirus-monitor</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <canvas id="chart-bar-recover-desc" style="display: block; height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header card-header-danger">
                <h4 class="card-title"><i class="material-icons">mood_bad</i> Top 10 Persentase Jumlah Meninggal Kasus Covid-19 Per Negara</h4>
                <p class="card-category">
                    <i class="material-icons">link</i> <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor" class="text-white">coronavirus-monitor</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <canvas id="chart-bar-death-desc" style="display: block; height: 300px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
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
            <div class="card-header card-header-primary">
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
                            <th style="width: 100px;text-align: center !important;">Perawatan</th>
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
<script src="<?= base_url('material/assets/demo/home.js'); ?>" type="text/javascript"></script>