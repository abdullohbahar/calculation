<!DOCTYPE html>
<html>

<head>
    <title>Form Wizard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8 mt-3 mb-5">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>HASIL KALKULASI</h1>
                    </div>
                    <div class="card-body text-center">
                        @if ($type == 'Business')
                            <h1>
                                <b>Skor Anda</b> <br>
                                {{ $skor }}
                            </h1>
                        @endif
                        {{ $messages }}
                    </div>
                    <div class="card-footer">
                        @if ($type == 'Business')
                            <a href="{{ route('business.calculation') }}" class="btn btn-success btn-block">Kembali</a>
                        @else
                            <a href="{{ route('hr.calculation') }}" class="btn btn-success btn-block">Kembali</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
