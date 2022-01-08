
<a href="{{ route('admin.employe.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{ route('admin.employe.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
    
    $('button#delete').on('click', function(e){ 
        e.preventDefault();         
        var href = $(this).attr('href');

            Swal.fire({
                    title:'Apakah Kamu yakin hapus data ini',
                    text: 'Data yang sudah di hapus tidak datap di kembalikan',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus saja!'
                    }).then((result) => {
                        if (result.value) {
                        
                        document.getElementById('deleteForm').action = href;
                        document.getElementById('deleteForm').submit();

                            Swal.fire(
                                'Terhapus!', 
                                'Data kamu berhasil dihapus..',
                                'success'
                            )
                        }
                })
    })
</script>


