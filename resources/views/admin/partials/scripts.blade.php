<!-- General JS Scripts -->
<script src="{{ asset('admin/modules/jquery.min.js') }}"></script>
<script src="{{ asset('admin/modules/popper.js') }}"></script>
<script src="{{ asset('admin/modules/tooltip.js') }}"></script>
<script src="{{ asset('admin/modules/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('admin/js/stisla.js') }}"></script>
<script src="{{ asset('admin/js/toastr.min.js') }}"></script>

<!-- Template JS File -->
<script src="{{ asset('admin/js/scripts.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>

<script>
    toastr.options.progressBar = true;
    @if($errors->any())
        @foreach($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif
</script>

@stack('scripts')
