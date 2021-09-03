@if (session()->has('message'))
    <script>
        toastr.success("{{@session('message')}}", "info");
    </script>
@endif
@if (session()->has('msg-error'))
    <script>
        toastr.danger("{{@session('msg-error')}}", "info");
    </script>
@endif