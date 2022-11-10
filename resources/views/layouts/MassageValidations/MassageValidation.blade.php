{{--  validation toastr  --}}

@if(Session::has('add'))
<script>
    toastr.success("{!! Session::get('add') !!}");
</script>
@endif


@if(Session::has('edit'))
<script>
    toastr.info("{!! Session::get('edit') !!}");
</script>
@endif


@if(Session::has('delete'))
<script>
    toastr.error("{!! Session::get('delete') !!}");
</script>
@endif
