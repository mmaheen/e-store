<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">

<head>
    <title>E-Store - @yield('title')</title>
    <meta charset="utf-8">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/admin')}}/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/admin')}}/css/animation.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/admin')}}/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/admin')}}/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/admin')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('/assets/admin')}}/font/fonts.css">
    <link rel="stylesheet" href="{{asset('/assets/admin')}}/icon/style.css">
    <link rel="shortcut icon" href="{{asset('/assets/admin')}}/images/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="{{asset('/assets/admin')}}/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/admin')}}/css/sweetalert.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/admin')}}/css/custom.css">
</head>

<body class="body">
    <div id="wrapper">
        <div id="page" class="">
            <div class="layout-wrap">

                <!-- <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div> -->

                @include('components.admin.left-sidebar')
                <div class="section-content-right">

                    @include('components.admin.header')
                    <div class="main-content">

                        @yield('content')


                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 SurfsideMedia</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('/assets/admin')}}/js/jquery.min.js"></script>
    <script src="{{asset('/assets/admin')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('/assets/admin')}}/js/bootstrap-select.min.js"></script>   
    <script src="{{asset('/assets/admin')}}/js/sweetalert.min.js"></script>    
    <script src="{{asset('/assets/admin')}}/js/apexcharts/apexcharts.js"></script>
    <script src="{{asset('/assets/admin')}}/js/main.js"></script>
    <script>
        (function ($) {

            var tfLineChart = (function () {

                var chartBar = function () {

                    var options = {
                        series: [{
                            name: 'Total',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 273.22, 208.12, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }, {
                            name: 'Pending',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 273.22, 208.12, 0.00, 0.00, 0.00, 0.00, 0.00]
                        },
                        {
                            name: 'Delivered',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }, {
                            name: 'Canceled',
                            data: [0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00, 0.00]
                        }],
                        chart: {
                            type: 'bar',
                            height: 325,
                            toolbar: {
                                show: false,
                            },
                        },
                        plotOptions: {
                            bar: {
                                horizontal: false,
                                columnWidth: '10px',
                                endingShape: 'rounded'
                            },
                        },
                        dataLabels: {
                            enabled: false
                        },
                        legend: {
                            show: false,
                        },
                        colors: ['#2377FC', '#FFA500', '#078407', '#FF0000'],
                        stroke: {
                            show: false,
                        },
                        xaxis: {
                            labels: {
                                style: {
                                    colors: '#212529',
                                },
                            },
                            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                        },
                        yaxis: {
                            show: false,
                        },
                        fill: {
                            opacity: 1
                        },
                        tooltip: {
                            y: {
                                formatter: function (val) {
                                    return "$ " + val + ""
                                }
                            }
                        }
                    };

                    chart = new ApexCharts(
                        document.querySelector("#line-chart-8"),
                        options
                    );
                    if ($("#line-chart-8").length > 0) {
                        chart.render();
                    }
                };

                /* Function ============ */
                return {
                    init: function () { },

                    load: function () {
                        chartBar();
                    },
                    resize: function () { },
                };
            })();

            jQuery(document).ready(function () { });

            jQuery(window).on("load", function () {
                tfLineChart.load();
            });

            jQuery(window).on("resize", function () { });
        })(jQuery);
    </script>
</body>

</html>