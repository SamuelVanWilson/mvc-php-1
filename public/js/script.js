$(function () {
    $('.tampilModalUbah').on('click', function () {
        const id = $(this).data('id');
        $('#judulModal').html('Ubah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Ubah')
        $('.modal-body form').attr('action', 'http://localhost/10.mvc/public/mahasiswa/ubah_mahasiswa')

        $.ajax({
            url : 'http://localhost/10.mvc/public/mahasiswa/tampilkan_mahasiswa',
            data : {id : id},
            method : 'post',
            dataType : 'json',
            success : function (data) {
                $('#nama').val(data.nama)
                $('#kelas').val(data.kelas)
                $('#sekolah').val(data.sekolah)
                $('#id').val(data.id)
            }
        })
    })
    $('.tombolTambahData').on('click', function () {
        $('#judulModal').html('Tambah Data Mahasiswa')
        $('.modal-footer button[type=submit]').html('Tambah')
        $('#nama').val('')
        $('#kelas').val('')
        $('#id').val('')
    })
})