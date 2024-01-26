@extends('layouts.master')
@section('main-content')
@section('page-css')
<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/nprogress.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/daterangepicker.css')}}">
@endsection

<div class="breadcrumb">
  <h1>{{ __('translate.Purchases_Report') }}</h1>
</div>

<div class="separator-breadcrumb border-top"></div>

<div id="section_purchase_list">

  <div class="row">
    <div class="col-md-12">
        <div class="box box-success">
                <div class="box-header with-border">
                    <p class="panel-title">Purchases Monthly Report </p>
                </div>
                <div class="col-md-12">
                    <div class="row">

                        <div class="form-group col-md-10 col-sm-12">
                            <select name="month" id="month" class="form-control" >
                                    <option value="">Select month</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                    <option value="4">April</option>
                                    <option value="5">May</option>
                                    <option value="6">June</option>
                                    <option value="7">July</option>
                                    <option value="8">August</option>
                                    <option value="9">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                                </select>
                            <span id="month" class="has-error"></span>
                        </div>
                        <div class="form-group  col-xl-2 col-lg-2 col-md-2 col-sm-12 mb-3 mb-lg-0">
                            <button type="button" class="btn btn-success form-control"
                                    onclick="getDailyattendanceReports()">Filter
                            </button>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div id="not_found">
                            <img src="{{asset('images/empty_box.png')}}" width="200px">
                        </div>
                        <img id="loader" src="{{asset('images/loadingg.gif')}}" width="20px">
                    </div>
                </div>
                <div class="col-md-12">
                    <div id="attendance_content"></div>
                </div>

            </div>

    </div>
  </div>




</div>
<style>
    #not_found {
        margin-top: 30px;
        z-index: 0;
    }
</style>
@endsection

@section('page-js')


<script>


    $(document).ready(function () {
        $('#loader').hide();
        console.log('Hi');
        var div = document.getElementById('attendance_content');
        div.style.visibility = 'hidden';

    });

    function getDailyattendanceReports() {

        var atten_month = $("#month").val();
        var month_name = $("#month option:selected").text();
        console.log(atten_month);

        if (atten_month != '') {

            $("#not_found").hide();
            var div = document.getElementById('attendance_content');
            div.style.visibility = 'visible';


            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

            $.ajax({
                url: 'categoryMonthlyPurchaseReport',
                type: "POST",
                data: {
                    "month_name": month_name,
                    "atten_month": atten_month,
                    "_token": CSRF_TOKEN
                },
                dataType: 'json',
                success: function (data) {
                    $("#attendance_content").html(data.html);
                },
                error: function (result) {
                    $("#attendance_content").html("Sorry Cannot Load Data");
                }
            });
        } else {
            $('#loader').hide();
            swal("Warning!", "Please Select all field!!", "error");
        }
    }
</script>

<script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
<script src="{{asset('assets/js/nprogress.js')}}"></script>
<script src="{{asset('assets/js/daterangepicker.min.js')}}"></script>


@endsection
