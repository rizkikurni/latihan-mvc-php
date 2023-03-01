$(function() {
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data Buku');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    }) ;

    $('.tampilModalUbah').on('click', function(){
        $('#formModalLabel').html('Ubah Data Buku');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        
        // const id = $(this).data('id');
        // console.log(typeof id);
        // console.log(id);
        // $.ajax({
           
        //     // url: 'http://localhost/latihan-mvc-php/public/buku/getUbah',
        //     // data: {id : id},
        //     // method: 'post',
        //     // dataType: 'json',
        //     // success: function(data) {
            //     //     console.log(data);
        //     // }
        // })
        
    }) ;
});
    

