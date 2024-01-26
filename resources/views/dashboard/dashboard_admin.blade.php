@extends('layouts.master')
@section('main-content')

@section('page-css')
<link rel="stylesheet" href="{{ asset('assets/styles/vendor/datatables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/styles/vendor/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/styles/vendor/nprogress.css') }}">

@endsection

<div class="breadcrumb">
  <h1>{{ __('translate.dashboard') }}</h1>
</div>

<div class="separator-breadcrumb border-top"></div>

@if (auth()->user()->can('dashboard'))
  <div id="section_Dashboard">
    <div class="row">
      <div class="col-lg-12 col-md-12 mb-4">
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
        <div class="row">

          <div class="col-md-3">
            <a href="/sale/sales" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db; color: white !important;">
                <p class="text-gray-600" style="color: white !important;">
                  Total Member
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                 {{$total_member}}
                </h4>

              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="/sale/sales" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db;">
                <p class="text-gray-600" style="color: white !important;">
                  {{ __('translate.Today_Sales') }}
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                 {{$today_sales}}
                </h4>

              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="/purchase/purchases" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db;">
                <p class="text-gray-600" style="color: white !important;">
                  {{ __('translate.Today_Purchases') }}
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                {{$today_purchases}}
                </h4>

              </div>
            </a>
          </div>
          <div class="col-md-3">
            <a href="/purchase/purchases" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db;">
                <p class="text-gray-600" style="color: white !important;">
                  {{ __('translate.This_Month_Sales') }}
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                {{$this_month_sales}} TK
                </h4>

              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="/purchase/purchases" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db;">
                <p class="text-gray-600" style="color: white !important;">
                  {{ __('translate.This_Month_Purchases') }}
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                {{$this_month_purchases}}
                </h4>

              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="/purchase/purchases" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db;">
                <p class="text-gray-600" style="color: white !important;">
                  {{ __('translate.This_Month_Sales_Due') }}
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                {{$this_month_sales_due}}
                </h4>

              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="/purchase/purchases" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db;">
                <p class="text-gray-600" style="color: white !important;">
                  {{ __('translate.last_Month_Today_Sales') }}
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                {{$last_Month_Today_Sales}}
                </h4>

              </div>
            </a>
          </div>

          <div class="col-md-3">
            <a href="/purchase/purchases" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db;">
                <p class="text-gray-600" style="color: white !important;">
                  {{ __('translate.last_Month_Today_Purchases') }}
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                {{$last_Month_Today_Purchases}}
                </h4>

              </div>
            </a>
          </div>

          <!--<div class="col-md-3">-->
          <!--  <a href="/sales-return/returns_sale" class="card_dashboard">-->
          <!--    <div class="card card-icon-big mb-4">-->
          <!--      <p class="text-gray-600">-->
          <!--        {{ __('translate.SalesReturn') }}-->
          <!--      </p>-->
          <!--      <h4 class="fw-semibold fs-4 mb-1">-->
          <!--       {{$return_sales}}-->
          <!--      </h4>-->

          <!--    </div>-->
          <!--  </a>-->
          <!--</div>-->

          <!--<div class="col-md-3">-->
          <!--  <a href="/purchase-return/returns_purchase" class="card_dashboard">-->
          <!--    <div class="card card-icon-big mb-4" >-->
          <!--      <p class="text-gray-600">-->
          <!--        {{ __('translate.PurchasesReturn') }}-->
          <!--      </p>-->
          <!--      <h4 class="fw-semibold fs-4 mb-1">-->
          <!--       {{$return_purchases}}-->
          <!--      </h4>-->
          <!--    </div>-->
          <!--  </a>-->
          <!--</div>-->

          <div class="col-md-3">
            <a href="/purchase-return/returns_purchase" class="card_dashboard">
              <div class="card card-icon-big mb-4" style="background-color: #3498db;">
                <p class="text-gray-600" style="color: white !important;">
                  {{ __('translate.CashInHand') }}
                </p>
                <h4 class="fw-semibold fs-4 mb-1" style="color: white !important;">
                 {{$return_purchases}}
                </h4>
              </div>
            </a>
          </div>


        </div>
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-lg-8 col-md-12">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title">
              <h6 class="fw-semibold font_17">
                {{ __('translate.This_Week_Sales_Purchases') }}
              </h6>
            </div>
            <div id="echart_sales_purchase"></div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title">
              <h6 class="fw-semibold font_17">
                {{ __('translate.Top_Selling_Products') }} ({{\Carbon\Carbon::now()->format('M')}})
              </h6>
            </div>
            <div id="echart_Top_products"></div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h4>{{ __('translate.Recent_Sales') }}</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="dashboard_table" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer"">
                <thead>
                  <tr>
                    <th>{{ __('translate.Ref') }}</th>
                    <th>{{ __('translate.Member') }}</th>
                    <th>{{ __('translate.Total') }}</th>
                    <th>{{ __('translate.Paid') }}</th>
                    <th>{{ __('translate.Due') }}</th>
                  </tr>
                </thead>
                <tbody class="table_body_recent_sales">
                  @foreach ($recent_sales_data as $recent_sale)
                    <tr>
                      <td>{{$recent_sale['Ref']}}</td>
                      <td>{{$recent_sale['client_name']}}</td>
                      <td>{{$recent_sale['GrandTotal']}}</td>
                      <td>{{$recent_sale['paid_amount']}}</td>
                      <td>{{$recent_sale['due']}}</td>
                    </tr>
                  @endforeach
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12">
        <div class="card mb-4">
          <div class="card-body">
            <div class="card-title">{{ __('translate.Top_Member') }} ({{\Carbon\Carbon::now()->format('M, Y')}})</div>
            <div id="echart_Top_Clients"></div>
          </div>
        </div>
      </div>


    </div>

  </div>
@else
  <h4>{{ __('translate.Welcome_to_your_Dashboard') }} , {{ Auth::user()->username }}</h4>
@endif
@endsection

@section('page-js')
<script src="{{ asset('assets/js/vendor/datatables.min.js') }}"></script>
<script src="{{ asset('assets/js/daterangepicker.min.js') }}"></script>
<script src="{{ asset('assets/js/nprogress.js') }}"></script>
<script src="{{ asset('assets/js/vendor/echarts.min.js') }}"></script>
<script src="{{ asset('assets/js/echart.options.min.js') }}"></script>

<script>
  var app = new Vue({
        el: '#section_dashboard',
        data: {
            today_sales:@json($today_sales),
            today_purchases:@json($today_purchases),
            return_sales:@json($return_sales),
            return_purchases:@json($return_purchases),

        },

        methods: {




        },
        //-----------------------------Autoload function-------------------
        created() {
        }

    })

</script>


<script type="text/javascript">
  $(function() {
      "use strict";

      $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
          var start_date = picker.startDate.format('YYYY-MM-DD');
          var end_date = picker.endDate.format('YYYY-MM-DD');

          NProgress.start();
          NProgress.set(0.1);

          get_data(start_date, end_date);

      });

      var start = moment();
      var end = moment();

      function cb(start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
      }

      $('#reportrange').daterangepicker({
            startDate: start,
            endDate: end,
            ranges: {
                '{{ __('translate.Since_launch') }}' : [moment().subtract(10, 'year'), moment().add(10, 'year')],
                '{{ __('translate.Today') }}': [moment(), moment()],
                '{{ __('translate.Yesterday') }}' : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                '{{ __('translate.Last_7_Days') }}' : [moment().subtract(6, 'days'), moment()],
                '{{ __('translate.Last_30_Days') }}': [moment().subtract(29, 'days') , moment()],
                '{{ __('translate.This_Month') }}': [moment().startOf('month'), moment().endOf('month')],
                '{{ __('translate.Last_Month') }}': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

      cb(start, end);

      function get_data(start_date ='', end_date =''){
        $.get('/dashboard_filter/' + start_date + '/' + end_date, function(data) {
                $('#sales_data').html(data.today_sales);
                $('#purchases_data').html(data.today_purchases);
                $('#return_sales_data').html(data.return_sales);
                $('#return_purchases_data').html(data.return_purchases);
                NProgress.done();
            });
      }


  });
</script>


<script>
  setTimeout(() => {
        // Chart This Week sales & purchases
       let echartsalespurchase = document.getElementById('echart_sales_purchase');
       if (echartsalespurchase) {
           let echart_sales_purchase = echarts.init(echartsalespurchase);
           var dark_heading = "#c2c6dc";
           echart_sales_purchase.setOption({

               legend: {
                   borderRadius: 0,
                   orient: "horizontal",
                   x: "right",
                   data: ["Sales", "Purchases"]
               },
               grid: {
                   left: '8px',
                   right: '8px',
                   bottom: '0',
                   containLabel: true
               },

               tooltip: {
                   show: true,
                   backgroundColor: 'rgba(0, 0, 0, .8)'
               },

               xAxis: [{
                   type: "category",
                   data: @json($days),
                   axisTick: {
                       alignWithLabel: true
                   },
                   splitLine: {
                       show: false
                   },
                   axisLabel: {
                       color: dark_heading,
                       interval: 0,
                       rotate: 30
                   },
                   axisLine: {
                       show: true,
                       color: dark_heading,

                       lineStyle: {
                           color: dark_heading
                       }
                   }
               }],

               yAxis: [{
                   type: "value",

                   axisLabel: {
                       color: dark_heading
                   },
                   axisLine: {
                       show: false,
                       color: dark_heading,

                       lineStyle: {
                           color: dark_heading
                       }
                   },
                   min: 0,
                   splitLine: {
                       show: true,
                       interval: "auto"
                   }
               }],

               series: [{
                       name: 'Sales',
                       data: @json($sales_chart_data),
                       label: {
                           show: false,
                           color: "#4E97FD"
                       },
                       type: 'bar',
                       color: "#4E97FD",
                       barGap: 0,
                       smooth: true,
                       itemStyle: {
                           emphasis: {
                               shadowBlur: 10,
                               shadowOffsetX: 0,
                               shadowOffsetY: -2,
                               shadowColor: 'rgba(0, 0, 0, 0.3)'
                           }
                       }
                   },

                   {
                       name: 'Purchases',
                       data: @json($purchases_chart_data),
                       label: {
                           show: false,
                           color: "#B8DEFE"
                       },
                       type: 'bar',
                       color: "#B8DEFE",
                       barGap: 0,
                       smooth: true,
                       itemStyle: {
                           emphasis: {
                               shadowBlur: 10,
                               shadowOffsetX: 0,
                               shadowOffsetY: -2,
                               shadowColor: 'rgba(0, 0, 0, 0.3)'
                           }
                       }
                   },


               ]
           });
           $(window).on('resize', function() {
               setTimeout(() => {
                   echart_sales_purchase.resize();
               }, 500);
           });
       }

        // top clients
        let echartTopClients = document.getElementById('echart_Top_Clients');
        if (echartTopClients) {
            let echart_Top_Clients = echarts.init(echartTopClients);
            echart_Top_Clients.setOption({
              color: ['#4E97FD', '#7AB6FD', '#94C9FE', '#B8DEFE', '#DBF0FE'],

                tooltip: {
                    show: true,
                    backgroundColor: 'rgba(0, 0, 0, .8)'
                },

                formatter: function(params) {
                  return `${params.name}: (${params.data.value}) (${
                    params.percent
                  }%)`;
                },


                series: [{
                        type: 'pie',
                        radius: '60%',
                        center: ['50%', '50%'],
                        data: @json($top_clients),
                        itemStyle: {
                            emphasis: {
                                shadowBlur: 10,
                                shadowOffsetX: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.5)'
                            }
                        }
                    }

                ]
            });
            $(window).on('resize', function() {
                setTimeout(() => {
                    echart_Top_Clients.resize();
                }, 500);
            });
        }





         // top products
         let echartTopproducts = document.getElementById('echart_Top_products');
            if (echartTopproducts) {
                let echart_Top_produits = echarts.init(echartTopproducts);
                echart_Top_produits.setOption({
                color: ['#4E97FD', '#7AB6FD', '#94C9FE', '#B8DEFE', '#DBF0FE'],

                    tooltip: {
                        show: true,
                        backgroundColor: 'rgba(0, 0, 0, .8)'
                    },

                    formatter: function(params) {
                    return `${params.name}: (${params.data.value} pc)`;
                    },


                    series: [{
                            type: 'pie',
                            radius: '60%',
                            center: ['50%', '50%'],
                            data: @json($top_products_this_month),
                            itemStyle: {
                                emphasis: {
                                    shadowBlur: 10,
                                    shadowOffsetX: 0,
                                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                                }
                            }
                        }

                    ]
                });
                $(window).on('resize', function() {
                    setTimeout(() => {
                    echart_Top_produits.resize();
                    }, 500);
                });
            }





       }, 1000);

</script>

@endsection
