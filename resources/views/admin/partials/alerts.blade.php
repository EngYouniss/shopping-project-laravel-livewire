@if(session('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: @json(session('success')),
        showConfirmButton: false,
        timer: 2000
    });
</script>
@endif

@if(session('error'))
<script>
    Swal.fire({
        icon: 'error',
        title: @json(session('error')),
        showConfirmButton: true
    });
</script>
@endif
