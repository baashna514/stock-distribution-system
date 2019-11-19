<script type="text/javascript" src="{{asset('public/bower_components/jquery/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/popper/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/modernizr/js/modernizr.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/chart.js/js/Chart.js')}}"></script>
<script type="text/javascript" src="{{asset('public/pages/widget/amchart/amcharts.js')}}"></script>
<script type="text/javascript" src="{{asset('public/pages/widget/amchart/serial.js')}}"></script>
<script type="text/javascript" src="{{asset('public/pages/widget/amchart/light.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/m/SmoothScroll.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/pcoded.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/vartical-layout.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('public/ajax.cloudflare.com/cdn-cgi/scripts/95c75768/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="a69231c202d444be38590f8d-|49" defer=""></script>
<script src="{{asset('public/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/pages/data-table/js/jszip.min.js')}}"></script>
<script src="{{asset('public/pages/data-table/js/pdfmake.min.js')}}"></script>
<script src="{{asset('public/pages/data-table/js/vfs_fonts.js')}}"></script>
<script src="{{asset('public/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('public/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/i18next/js/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{asset('public/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
<script src="{{asset('public/pages/data-table/js/data-table-custom.js')}}"></script>
<script src="{{asset('public/js/pcoded.min.js')}}"></script>
<script src="{{asset('public/pages/j-pro/js/jquery.ui.min.js')}}"></script>
<script src="{{asset('public/pages/j-pro/js/jquery.maskedinput.min.js')}}"></script>
<script src="{{asset('public/pages/j-pro/js/jquery.j-pro.js')}}"></script>
<script src="{{asset('public/js/m/jquery.nicescroll.min.js')}}"></script>

<script type="text/javascript" src="{{asset('public/bower_components/select2/js/select2.full.min.js')}}"></script>
<!-- Multiselect js -->
<script type="text/javascript" src="{{asset('public/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}">


</script>
<script type="text/javascript" src="{{asset('public/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
<script type="text/javascript" src="{{asset('public/js/jquery.quicksearch.js')}}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{asset('public/pages/advance-elements/select2-custom.js')}}"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.js"></script>
<script>
@if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'danger':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
@endif
</script>