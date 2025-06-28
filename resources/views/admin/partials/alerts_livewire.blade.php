<script>
    window.addEventListener('swal:success', event => {
        Swal.fire({
            icon: 'success',
            title: event.detail.message ?? 'تمت العملية بنجاح',
            showConfirmButton: false,
            timer: 2000
        });
    });

    window.addEventListener('swal:error', event => {
        Swal.fire({
            icon: 'error',
            title: event.detail.message ?? 'حدث خطأ ما',
            showConfirmButton: true
        });
    });
</script>
