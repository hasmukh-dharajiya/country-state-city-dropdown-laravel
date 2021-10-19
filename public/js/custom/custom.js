
$(document).ready(function () {
    getCountry();
    function getCountry(){
        $("#country").html("");
        $.ajax({
            url: "/get-country",
            type: "GET",
            success: function (result) {
                $.each(result.data, function (key, value) {
                    $("#country").append('<option value="' + value.id + '">' + value.country + "</option>");
                });
            },
        });
    }

    $("#country").on("change", function () {
        var country_id = this.value;
        $("#state").html("");
        $.ajax({
            url: "/get-state",
            type: "POST",
            data: {
                country_id: country_id,
                _token: "{{csrf_token()}}",
            },
            dataType: "json",
            success: function (result) {
                $.each(result.data, function (key, value) {
                    $("#state").append('<option value="' + value.id + '">' + value.region + "</option>");
                });
                $("#city").html('<option value="">Select State First</option>');
            },
        });
    });
    $("#state").on("change", function () {
        var state_id = this.value;
        $("#city").html("");
        $.ajax({
            url: "/get-city",
            type: "POST",
            data: {
                state_id: state_id,
                _token: "{{csrf_token()}}",
            },
            dataType: "json",
            success: function (result) {
                $.each(result.data, function (key, value) {
                    $("#city").append('<option value="' + value.id + '">' + value.city + "</option>");
                });
            },
        });
    });
});

