<style>
    .swal2-popup {
        font-size: 1.4rem !important;
        }
</style>

<a href="{{ route('admin.book.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{ route('admin.book.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();
        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah kamu yakin hapus data ini?',
            text: "Data yang sudah dihapus tidak bisa dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus saja!'
            }).then((result) => {
            if (result.value) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();

                Swal.fire(
                'Terhapus!',
                'Data kamu berhasil dihapus.',
                'success'
                )
            }
        })
    })
</script>
