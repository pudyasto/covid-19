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
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-header card-header-warning">
                <h4 class="card-title"><i class="material-icons text-white">assessment</i> Log Kasus Virus Covid-19 Di Indonesia</h4>
                <p class="card-category">
                    <i class="material-icons text-white">link</i>
                    <a href="https://rapidapi.com/astsiatsko/api/coronavirus-monitor">https://rapidapi.com/astsiatsko/api/coronavirus-monitor</a>
                </p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-history-indonesia">
                    <thead>
                        <tr>
                            <th style="width: 200px;">Tgl Jam</th>
                            <th style="text-align: center !important;">Positif</th>
                            <th style="width: 105px;text-align: center !important;">Kasus Baru</th>
                            <th style="width: 105px;text-align: center !important;">Dirawat</th>
                            <th style="width: 105px;text-align: center !important;">Sembuh</th>
                            <th style="width: 105px;text-align: center !important;">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="card">
            <div class="card-header card-header-danger">
                <h4 class="card-title"><i class="material-icons text-white">place</i> Kasus Virus Covid-19 Per Wilayah Di Indonesia</h4>
                <p class="card-category">
                    <i class="material-icons text-white">link</i>
                    <a href="https://api.kawalcorona.com/indonesia/provinsi">https://api.kawalcorona.com/indonesia/provinsi</a>
                </p>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-hover table-indonesia">
                    <thead>
                        <tr>
                            <th>Wilayah</th>
                            <th style="width: 105px;text-align: center !important;">Positif</th>
                            <th style="width: 105px;text-align: center !important;">Sembuh</th>
                            <th style="width: 105px;text-align: center !important;">Meninggal</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- chartjs -->
<script src="<?= base_url('material/chartjs/Chart.bundle.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('material/chartjs/utils.js'); ?>" type="text/javascript"></script>
<script src="<?= base_url('material/assets/demo/indonesia.js'); ?>" type="text/javascript"></script>