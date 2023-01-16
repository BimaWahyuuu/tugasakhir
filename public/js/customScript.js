  $(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   /* When click show user */
    $('body').on('click', '.btn-edit', function () {
      var user_id = $(this).data('id');
      $.get('/admin/waka/'+ user_id +'/edit', function (data) {
            console.log(data);
          $('#nama').val(data.nama);
          $('#jabatan').val(data.jabatan);
          $('#edit-form').attr('action', '/admin/waka/'+data.id);
      })
   });
  
  });
