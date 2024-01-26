@extends('layouts.master')
@section('main-content')
@section('page-css')

<link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/nprogress.css')}}">
<link rel="stylesheet" href="{{asset('assets/styles/vendor/datepicker.min.css')}}">


@endsection

<div class="breadcrumb">
    <h1>{{ __('translate.Member_details') }}</h1>
</div>

<div class="separator-breadcrumb border-top"></div>



<div id="section_Client_details">
    <div class="card">
        <div class="card-body">
            <div class="form-group row">
                <div class="ol-lg-3 col-md-6 col-sm-6 col-12">
                    <table class="display table table-md">
                        <tbody>

                            <tr>
                                <td><img src="{{ asset('images/clients/'.$client_data['photo']) }}" alt=""></td>
                                <th></th>
                            </tr>

                            <tr>
                                <th>{{ __('translate.FullName') }}</th>
                                <td>{{$client_data['full_name']}}</td>
                            </tr>
                            <tr>
                                <th>Membership Number</th>
                                <td>{{$client_data['membershipNumber']}}</td>
                            </tr>
                            <tr>
                                <th>Membership Card Number</th>
                                <td>{{$client_data['membershipCardNumber']}}</td>
                            </tr>
                            <tr>
                                <th>Member Category</th>
                                <td>{{$client_data['memberCategory']}}</td>
                            </tr>
                            <tr>
                                <th>NID</th>
                                <td>{{$client_data['nid']}}</td>
                            </tr>
                            <tr>
                                <th>{{ __('translate.Phone') }}</th>
                                <td>{{$client_data['phone']}}</td>
                            </tr>
                            <tr>
                                <th>Telephone</th>
                                <td>{{$client_data['telephone']}}</td>
                            </tr>
                            <tr>
                                <th>Whatsapp Number</th>
                                <td>{{$client_data['whatsapp']}}</td>
                            </tr>
                            <tr>
                                <th>Present Address</th>
                                <td>{{$client_data['presentAddress']}}</td>
                            </tr>
                            <tr>
                                <th>Permanent Address</th>
                                <td>{{$client_data['permanentAddress']}}</td>
                            </tr>
                            <tr>
                                <th>Father's Name</th>
                                <td>{{$client_data['fathersName']}}</td>
                            </tr>
                            <tr>
                                <th>Mother's Name</th>
                                <td>{{$client_data['mothersName']}}</td>
                            </tr>
                            <tr>
                                <th>Date Of Birth</th>
                                <td>{{$client_data['dateOfBirth']}}</td>
                            </tr>
                            <tr>
                                <th>Passport Number</th>
                                <td>{{$client_data['passportNumber']}}</td>
                            </tr>
                            <tr>
                                <th>{{ __('translate.Status') }}</th>
                                <td>
                                    @if($client_data['status'] == 1)
                                    <span class="badge badge-success">{{ __('translate.Active Client') }}</span>
                                    @else
                                    <span class="badge badge-danger">{{ __('translate.Inactive Client') }}</span>
                                    @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ol-lg-3 col-md-6 col-sm-6 col-12">
                    <table class="display table table-md">
                        <tbody>
                            <tr>
                                <th>Marital Status</th>
                                <td>{{$client_data['maritalStatus']}}</td>
                            </tr>
                            @if ($client_data['spouseName'] != '')
                                <tr>
                                    <th>Spouse Name</th>
                                    <td>{{$client_data['spouseName']}}</td>
                                </tr>   
                                <tr>
                                    <th>Spouse Profession</th>
                                    <td>{{$client_data['spouseProfession']}}</td>
                                </tr>
                                <tr>
                                    <th>Spouse Card Number</th>
                                    <td>{{$client_data['spouseCardNumber']}}</td>
                                </tr>
                            @endif

                            @if ($client_data['child1Name'] != '')
                                <tr>
                                    <th>1. Child Name</th>
                                    <td>{{$client_data['child1Name']}}</td>
                                </tr>
                                <tr>
                                    <th>Profession</th>
                                    <td>{{$client_data['child1Profession']}}</td>
                                </tr>
                                <tr>
                                    <th>Card Number</th>
                                    <td>{{$client_data['child1CardNumber']}}</td>
                                </tr>
                            @endif
                            @if ($client_data['child2Name'] != '')
                                <tr>
                                    <th>2. Child Name</th>
                                    <td>{{$client_data['child2Name']}}</td>
                                </tr>
                                <tr>
                                    <th>Profession</th>
                                    <td>{{$client_data['child2Profession']}}</td>
                                </tr>
                                <tr>
                                    <th>Card Number</th>
                                    <td>{{$client_data['child2CardNumber']}}</td>
                                </tr>
                            @endif
                            @if ($client_data['child3Name'] != '')
                                <tr>
                                    <th>3. Child Name</th>
                                    <td>{{$client_data['child3Name']}}</td>
                                </tr>
                                <tr>
                                    <th>Profession</th>
                                    <td>{{$client_data['child3Profession']}}</td>
                                </tr>
                                <tr>
                                    <th>Card Number</th>
                                    <td>{{$client_data['child3CardNumber']}}</td>
                                </tr>
                            @endif
                            @if ($client_data['child4Name'] != '')
                                <tr>
                                    <th>4. Child Name</th>
                                    <td>{{$client_data['child4Name']}}</td>
                                </tr>
                                <tr>
                                    <th>Profession</th>
                                    <td>{{$client_data['child4Profession']}}</td>
                                </tr>
                                <tr>
                                    <th>Card Number</th>
                                    <td>{{$client_data['child4CardNumber']}}</td>
                                </tr>
                            @endif
                            <tr>
                                <th>Blood Group</th>
                                <td>{{$client_data['bloodGroup']}}</td>
                            </tr>
                            <tr>
                                <th>Religion</th>
                                <td>{{$client_data['religion']}}</td>
                            </tr>
                            <tr>
                                <th>Emergency Contact</th>
                                <td>{{$client_data['emergencyContact']}}</td>
                            </tr>
                            <tr>
                                <th>Payment Mode</th>
                                <td>{{$client_data['paymentMode']}}</td>
                            </tr>
                            <tr>
                                <th>Payment Details</th>
                                <td>{{$client_data['paymentDetails']}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                            <i class="i-Full-Cart"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-2">{{ __('translate.Total Sales') }}</p>
                                <p class="text-primary text-24 line-height-1 m-0" id="sales_data">
                                    {{$client_data['total_sales']}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                            <i class="i-Money-2"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-2">{{ __('translate.Total Amount') }}</p>
                                <p class="text-primary text-24 line-height-1 m-0" id="purchases_data">
                                    {{$client_data['total_amount']}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                            <i class="i-Money-Bag"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-2">{{ __('translate.Total paid') }}</p>
                                <p class="text-primary text-24 line-height-1 m-0" id="return_sales_data">
                                    {{$client_data['total_paid']}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-icon-big mb-4">
                        <div class="card-body text-center">
                            <i class="i-Financial"></i>
                            <div class="content">
                                <p class="text-muted mt-2 mb-2">{{ __('translate.Total debt') }}</p>
                                <p class="text-primary text-24 line-height-1 m-0" id="return_purchases_data">
                                    {{$client_data['total_debt']}}</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


</div>


@endsection

@section('page-js')

<script src="{{asset('assets/js/nprogress.js')}}"></script>



<script>
    var app = new Vue({
        el: '#section_Client_details',
        data: {
            SubmitProcessing:false,
        },

        methods: {



        },
        //-----------------------------Autoload function-------------------
        created() {
        }
    })
</script>

@endsection
