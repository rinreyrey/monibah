<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <h1 class="p-3 display-5">Monitoring Limbah</h1>
        <div class="row">
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Keasaman Air
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center text-center">
                            <div class="col-2">
                                <span class="iconify" data-icon="material-symbols:water-ph-outline" data-width="30"
                                    data-height="45"></span>
                            </div>
                            <div class="col-6 text-center">
                                <h2 class="display-6">{{ $data->ph }}</h2>
                            </div>
                            <div class="col-4">
                                <h5>pH</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Debit Air
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center text-center">
                            <div class="col-2">
                                <span class="iconify" data-icon="material-symbols:water" data-width="30"
                                    data-height="45"></span>
                            </div>
                            <div class="col-6">
                                <h2 class="display-6 text-center">{{ $data->debit }}</h2>
                            </div>
                            <div class="col-4">
                                <h5>L/m</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Kekeruhan Air
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center text-center">
                            <div class="col-2">
                                <span class="iconify" data-icon="material-symbols:water-full" data-width="30"
                                    data-height="45"></span>
                            </div>
                            <div class="col-6">
                                <h2 class="display-6 text-center">{{ $data->ntu }}</h2>
                            </div>
                            <div class="col-4">
                                <h5>NTU</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        COD Air
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center text-center">
                            <div class="col-2">
                                <span class="iconify" data-icon="material-symbols:spo2-outline" data-width="30"
                                    data-height="45"></span>
                            </div>
                            <div class="col-6">
                                <h2 class="display-6 text-center">{{ $data->cod }}</h2>
                            </div>
                            <div class="col-4">
                                <h5>mg/L</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        Temperatur Air
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center text-center">
                            <div class="col-2">
                                <span class="iconify" data-icon="mdi:water-temperature-outline" data-width="30"
                                    data-height="45"></span>
                            </div>
                            <div class="col-6">
                                <h2 class="display-6 text-center">{{ $data->suhu }}</h2>
                            </div>
                            <div class="col-4">
                                <h5><b>&#8451</b></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-4">
                <div class="card">
                    <div class="card-header">
                        NH3N
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-between align-items-center text-center">
                            <div class="col-2">
                                <span class="iconify" data-icon="material-symbols:water-do-outline" data-width="30"
                                    data-height="45"></span>
                            </div>
                            <div class="col-6">
                                <h2 class="display-6 text-center">{{ $data->nh }}</h2>
                            </div>
                            <div class="col-4">
                                <h5>mg/L</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
</body>

</html>
