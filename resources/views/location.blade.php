<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel & Ajax</title>
    <style>
        body {
            font-family: arial;
            background: #b2bec3;
            padding: 0;
            margin: 0;
        }
        #main {
            width: 800px;
            margin: 0 auto;
            background: white;
            font-size: 19px;
        }
        #header {
            color: #fff;
            background: #16817a;
            text-align: center;
        }
        h1 {
            margin: 15px;
        }
        #table-form {
            background: #e8c9a1;
            text-align: center;
            padding: 20px 10px;
        }
        #table-form select {
            width: 180px;
            height: 36px;
            font-size: 18px;
            padding: 3px 10px;
            border-radius: 4px;
            border: 1px solid green;
            outline: 0;
        }
        #table-data {
            padding: 15px;
            height: 500px;
            vertical-align: top;
        }
        #table-data th {
            color: #fff;
            background: #fa744f;
        }
        #table-data tr:nth-child(odd) {
            background: #ecf0f1;
        }
    </style>
</head>
<body>
<table id="main" border="0" cellspacing="0">
    <tr>
        <td id="header">
            <h1>Load Records using Select Box <br>
                with Laravel & Ajax</h1>
        </td>
    </tr>
    <tr>
        <td id="table-form">
            <form>
                <label class="form-label">Select Country</label>
                <select class="form-select form-select-sm mb-3" id="country">
                    <option value="">Select Country</option>
                </select><br><br>

                <label class="form-label">Select State</label>
                <select class="form-select form-select-sm mb-3" id="state">
                    <option value="">Select Country</option>
                </select><br><br>

                <label class="form-label">Select City</label>
                <select class="form-select form-select-sm mb-3" id="city">
                    <option value="">Select Country</option>
                </select><br><br>
            </form>
        </td>
    </tr>
    <tr>
        <td id="table-data"></td>
    </tr>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/custom/custom.js')}}"></script>
</body>

</html>
