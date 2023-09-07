<!DOCTYPE html>
{{-- <html class="loading" lang="en" data-textdirection="{{ app()->getLocale() === 'en' ? 'ltr' : 'rtl' }}"> --}}
<html class="loading" lang="en" data-textdirection="'ltr'">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords"
        content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/admin/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/images/ico/favicon.ico') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/animate/animate.css') }}"> 
     <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/vendors.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/weather-icons/climacons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/fonts/meteocons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/charts/morris.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/vendors/css/charts/chartist.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/selects/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/charts/chartist-plugin-tooltip.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/toggle/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/forms/toggle/switchery.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/pages/chat-application.css') }}">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.min.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap.rtl.min.css') }}"> --}}



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />




    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/custom-rtl.css') }}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" 
        href="{{ asset('assets/admin/' . getFolder() . '/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/colors/palette-gradient.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/' . getFolder() . '/core/colors/palette-gradient.css') }}"> 
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/' . getFolder() . '/pages/timeline.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/extensions/datedropper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/extensions/timedropper.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/vendors/css/file-uploaders/dropzone.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('assets/admin/css-rtl/plugins/file-uploaders/dropzone.css') }}">
    <!-- END Page Level CSS-->
    
    {{-- <link rel="icon"
    href="{{ asset('assets/images/favicon.png') }}">
<link rel="apple-touch-icon" 
    href="{{ asset('assets/images/apple-touch-icon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
    <!-- END Custom CSS-->
    {{-- @notify_css --}}
    @yield('style')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
 
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">
    <!-- fixed-top-->

    <!-- begin header -->
    @include('dashboard.includes.header')
    <!-- end header -->
    <!-- begin sidebar -->
    @include('dashboard.includes.sidebar')

    <!-- end sidebar -->
    @yield('content')

    <!-- begin footer html -->
    @include('dashboard.includes.footer')

    <!-- end footer -->

    {{-- @notify_js
    @notify_render --}}

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/admin/vendors/js/vendors.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/vendors/js/editors/ckeditor/ckeditor.js') }}" type="text/javascript"></script>

    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/admin/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/admin/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"
        type="text/javascript">
    </script>

    <script src="{{ asset('assets/admin/vendors/js/forms/toggle/bootstrap-switch.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/admin/vendors/js/forms/toggle/bootstrap-checkbox.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/admin/vendors/js/forms/toggle/switchery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/scripts/forms/switch.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/vendors/js/forms/select/select2.full.min.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/admin/js/scripts/forms/select/form-select2.js') }}" type="text/javascript"></script>

    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{ asset('assets/admin/vendors/js/charts/chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/vendors/js/charts/echarts/echarts.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/vendors/js/extensions/datedropper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/vendors/js/extensions/timedropper.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/vendors/js/forms/icheck/icheck.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/scripts/pages/chat-application.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/vendors/js/extensions/dropzone.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN MODERN JS-->
    <script src="{{ asset('assets/admin/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/core/app.js') }}" type="text/javascript"></script>

    <script src="{{ asset('assets/admin/js/scripts/customizer.js') }}" type="text/javascript"></script>
    <!-- END MODERN JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{ asset('assets/admin/js/scripts/pages/dashboard-crypto.js') }}" type="text/javascript"></script>


    <script src="{{ asset('assets/admin/js/scripts/tables/datatables/datatable-basic.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('assets/admin/js/scripts/extensions/date-time-dropper.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/vendors/js/ui/prism.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/scripts/pages/email-application.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->

    <script src="{{ asset('assets/admin/js/scripts/forms/checkbox-radio.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/admin/js/scripts/modal/components-modal.js') }}" type="text/javascript"></script>


    <script>
        $('#meridians1').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians2').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians3').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians4').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians5').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians6').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians7').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians8').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians9').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians10').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians11').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians12').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians13').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
        $('#meridians14').timeDropper({
            meridians: true,
            setCurrentTime: false
        });
    </script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
        
  
   {{-- <script>
    $(document).ready(function(){
    
     fetch_customer_data();
    
     function fetch_customer_data(query = '')
     {
      $.ajax({
       url:"{{ route('live_search.action') }}",
       method:'GET',
       data:{query:query},
       dataType:'json',
       success:function(data)
       {
        $('tbody').html(data.table_data);
        $('#total_records').text(data.total_data);
       }
      })
     }
    
     $(document).on('keyup', '#search', function(){
      var query = $(this).val();
      fetch_customer_data(query);
     });
    });
    </script>
     --}}
            @yield('script')
            
            @show 
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
            <script>
                $(document).ready(function () {
                    var SITEURL = "{{ url('/') }}";
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var calendar = $('#full_calendar_events').fullCalendar({
                        editable: true,
                        editable: true,
                        events: SITEURL + "/calendar-event",
                        displayEventTime: true,
                        eventRender: function (event, element, view) {
                            if (event.allDay === 'true') {
                                event.allDay = true;
                            } else {
                                event.allDay = false;
                            }
                        },
                        selectable: true,
                        selectHelper: true,
                        select: function (event_start, event_end, allDay) {
                            var event_name = prompt('Event Name:');
                            if (event_name) {
                                var event_start = $.fullCalendar.formatDate(event_start, "Y-MM-DD HH:mm:ss");
                                var event_end = $.fullCalendar.formatDate(event_end, "Y-MM-DD HH:mm:ss");
                                $.ajax({
                                    url: SITEURL + "/calendar-crud-ajax",
                                    data: {
                                        event_name: event_name,
                                        event_start: event_start,
                                        event_end: event_end,
                                        type: 'create'
                                    },
                                    type: "POST",
                                    success: function (data) {
                                        displayMessage("Event created.");
                                        calendar.fullCalendar('renderEvent', {
                                            id: data.id,
                                            title: event_name,
                                            start: event_start,
                                            end: event_end,
                                            allDay: allDay
                                        }, true);
                                        calendar.fullCalendar('unselect');
                                    }
                                });
                            }
                        },
                        eventDrop: function (event, delta) {
                            var event_start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                            var event_end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");
                            $.ajax({
                                url: SITEURL + '/calendar-crud-ajax',
                                data: {
                                    title: event.event_name,
                                    start: event_start,
                                    end: event_end,
                                    id: event.id,
                                    type: 'edit'
                                },
                                type: "POST",
                                success: function (response) {
                                    displayMessage("Event updated");
                                }
                            });
                        },
                        eventClick: function (event) {
                            var eventDelete = confirm("Are you sure?");
                            if (eventDelete) {
                                $.ajax({
                                    type: "POST",
                                    url: SITEURL + '/calendar-crud-ajax',
                                    data: {
                                        id: event.id,
                                        type: 'delete'
                                    },
                                    success: function (response) {
                                        calendar.fullCalendar('removeEvents', event.id);
                                        displayMessage("Event removed");
                                    }
                                });
                            }
                        }
                    });
                });
                function displayMessage(message) {
                    toastr.success(message, 'Event');            
                }
            </script>
</body>

</html>
