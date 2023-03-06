$(function() {
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Buku');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    }) ;

    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Buku');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/latihan-mvc-php/public/buku/ubah');
        
        const id = $(this).data('id');
        // console.log(id);
        $.ajax({
           
            url: 'http://localhost/latihan-mvc-php/public/buku/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#judul').val(data.judul);
                $('#penulis').val(data.penulis);
                $('#tahun').val(data.tahun);
                $('#genre').val(data.genre);
                $('#id').val(data.id);
            }
        })
        
    }) ;
});
     

