<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="content">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Get Location</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <style>
        .stretch-card {
            align-items: stretch;
            display: flex;
            justify-content: stretch;
        }
        .grid-margin {
            margin-bottom: 1.5rem;
        }
        .stretch-card>.card {
            min-width: 100%;
            width: 100%;
        }
        .card {
            box-shadow: 0 0 10px 0 rgb(183 192 206 / 20%);
            -webkit-box-shadow: 0 0 10px 0 rgb(183 192 206 / 20%);
            -moz-box-shadow: 0 0 10px 0 rgba(183,192,206,.2);
            -ms-box-shadow: 0 0 10px 0 rgba(183,192,206,.2);
        }
        .card {
            word-wrap: break-word;
            background-clip: border-box;
            background-color: #fff;
            border: 1px solid #f2f4f9;
            border-radius: .25rem;
            display: flex;
            flex-direction: column;
            min-width: 0;
            position: relative;
        }
        .card-body {
            flex: 1 1 auto;
            padding: 1.5rem;
        }
        .card .card-title {
            font-size: .875rem;
            font-weight: 500;
            text-transform: uppercase;
        }
        .card-title {
            margin-bottom: .875rem;
        }
        .form-select-sm {
            font-size: .812rem;
            padding-bottom: .391rem;
            padding-left: .8rem;
            padding-top: .391rem;
        }
        .form-select {
            -moz-padding-start: calc(.8rem - 3px);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: #fff;
            background-image: url(data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath fill='none' stroke='%23212a3a' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3E%3C/svg%3E);
            background-position: right .8rem center;
            background-repeat: no-repeat;
            background-size: 16px 12px;
            border: 1px solid #e9ecef;
            border-radius: .25rem;
            color: #000;
            display: block;
            font-size: .875rem;
            font-weight: 400;
            line-height: 1.5;
            padding: .469rem 2.4rem .469rem .8rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row mt-3">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="h2 text-center">country,state,city dropdown using laravel</h2>
                    <div class="mb-3">
                        <label class="form-label">Select Country</label>
                        <select class="form-select form-select-sm mb-3" id="country">
                                <option value="">Select Country</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select State</label>
                        <select class="form-select form-select-sm mb-3" id="state">
                            <option value="">Select Country</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select City</label>
                        <select class="form-select form-select-sm mb-3" id="city">
                            <option value="">Select Country</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('js/custom/custom.js')}}"></script>
</body>
</html>
