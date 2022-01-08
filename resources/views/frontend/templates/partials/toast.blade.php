@if(session('toast'))
// pertemuan ke 41
    <script>
       // M.toast({html: 'I am a toast!'})
        M.toast({html: '{{ session('toast') }}'})
    </script>
@endif
