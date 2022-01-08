{{--  route di ubah menjadi    --}}
<button href="{{ route('admin.borrow.return', $model) }}" class="btn btn-info" id="return">Pengembalian Buku</button>
<!-- alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

<!-- alert -->

{{--  triger switch alert   --}}
<script>
    // membuat request ajax menggunakan element
    $('button#return').on('click', function(e){ // error
        e.preventDefault(); // belum jalan
        // membuat variavel
        var href = $(this).attr('href');

            // alert
            Swal.fire({
                    title:'Apakah kamu yakin datanya sudah benar ??',
                    text: 'Pastikan bahwa data Buku yang dikembalikan sama !!!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Benar data sudah di Cek!'
                    }).then((result) => {
                        if (result.value) {
                        // membuat tombol trigger untuk tombol form
                        document.getElementById('returnForm').action = href;
                        document.getElementById('returnForm').submit();

                            Swal.fire(
                                'Dikembalikan!', // kalo sukses
                                'Buku sudah di Kembalikan...Oyeachh.',
                                'success'
                            )
                        }
                })
    })
</script>
