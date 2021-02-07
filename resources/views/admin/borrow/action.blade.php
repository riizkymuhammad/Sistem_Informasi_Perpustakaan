
<button href="{{ route('borrow.return', $model)}}" class="btn btn-info" id="return">Pengembalian Buku</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$('button#return').on('click',function(e)
{
    e.preventDefault();

    var href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah anda yakin datanya sudah benar?',
        text: "Data sudah benar dan buku sudah dikembalikan dikembalikan!",
        icon: 'info',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Betul data sduah dicek!'
        }).then((result) => {
        if (result.isConfirmed) {

            document.getElementById('returnForm').action= href;
            document.getElementById('returnForm').submit();

            Swal.fire(
            'Tersimpan!',
            'Buku telah dikembalikan .',
            'success'
            )
        }
        })
    
    
}
)

</script>