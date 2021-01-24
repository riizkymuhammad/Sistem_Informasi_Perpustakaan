<a href="{{route('author.edit',$model)}}" class="btn btn-warning">Edit</a>
<button href="{{route('author.destroy',$model)}}" class="btn btn-danger" id="delete">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$('button#delete').on('click',function(e)
{
    e.preventDefault();

    var href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin hapus data ini?',
        text: "Data yang sduah dihapus tidak bisa dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus saja!'
        }).then((result) => {
        if (result.isConfirmed) {

            document.getElementById('deleteForm').action= href;
            document.getElementById('deleteForm').submit();

            Swal.fire(
            'Terhapus!',
            'Data anda berhasil dihapus.',
            'success'
            )
        }
        })
    
    
}
)

</script>