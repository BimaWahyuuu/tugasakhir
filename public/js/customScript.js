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
          console.log($('#edit-form'))
          $('#edit-form').attr('action', '/admin/waka/'+data.id);
      })
   });
    $('body').on('click', '#userEdit', function () {
        console.log("sucess")
      var user_edit_id = $(this).data('id');
      $.get('/admin/pengguna/'+ user_edit_id +'/edit', function (data) {
            console.log(data.id);
            $('#edit-prev-user-image').attr('src', 'http://127.0.0.1:8000/storage/'+data.foto);
            $('#edit-user-name').val(data.name);
            $('#edit-user-email').val(data.email);
            $('#edit-user-status').html(data.status);
            $('#edit-user-status').val(data.status);
            console.log($('#edit-user-status'))
            $('#edit-user-form').attr('action', '/admin/pengguna/'+data.id);
            console.log($('#edit-user-form'))
      })
   });
  
  });

function showAll(id) {
    $.get('/admin/bidang/' +id, function(data){
        $('#items').html(data)
    })

}

const btnEdit = document.querySelectorAll('#btnEdit');
// console.log(btnEdit)

btnEdit.forEach( function(e) {
// const b = e.nextElementSibling;

// klik button ubah
e.addEventListener('click', function(){

    // modify class
    const btnSave = e.previousElementSibling;
    btnSave.classList.toggle("d-none");
    e.classList.toggle("d-none");

    // for input
    const td = e.parentElement.previousElementSibling;
    const tdText = td.textContent;
    const input =  td.firstElementChild;
    input.classList.toggle("d-none");
    input.placeholder = tdText.trim();

    // remove p
    input.nextElementSibling.classList.toggle("d-none");

    // ketika tombol save diytekan
    btnSave.addEventListener('click', function(){

        // hilangkan tombol save, input dan munculkan tombol edit
        e.classList.toggle("d-none");
        input.classList.toggle("d-none");
        btnSave.classList.toggle("d-none");


        const newinput = input.value;
        console.log(newinput);

        input.nextElementSibling.innerHTML = newinput;
        // remove p
        input.nextElementSibling.classList.toggle("d-none");
        });

    })
});
console.log('halo dunia')
$('#menus').on('click',function(event) {
    event.preventDefault();
    // let ini = event.target;
    // console.log(ini)
    if ($(event.target).hasClass('menu-itm')) {
        $('.menu-itm').not(this).removeClass('active');
        $('.menu-itm').not(this).children().removeClass('badge-white').addClass('badge-primary');
        var anak = $(event.target).children()[0];
        anak.classList.remove('badge-primary')
        anak.classList.add('badge-white')
        anak.parentElement.classList.add('active')

        let a = $(event.target).data("id")

        $('.mainContent').addClass('d-none')
        $('#'+a).removeClass('d-none')
    }   
});

const userFoto = document.getElementById('userFoto');
const pPrev = document.getElementById('userPrev');
const edPrev = document.getElementById('edit-prev-user-image');
const edUsrImg = document.getElementById('edit-user-foto');
console.log(edUsrImg);
console.log(edPrev);

userFoto.onchange = evt => {
  const [file] = userFoto.files
  if (file) {
    pPrev.src = URL.createObjectURL(file)
  }
}
edUsrImg.onchange = evt => {
  const [file] = edUsrImg.files
  if (file) {
    edPrev.src = URL.createObjectURL(file)
  }
}
// console.log(document.querySelectorAll('.btn-user'))

$('#user-table').on('click', '.btn-user', function () {
    console.log("halo")
    var id_user = $(this).data('id');
    $.get('/admin/pengguna/'+ id_user, function (data) {
        // console.log(data);
        $('#user-image').attr("src", "http://127.0.0.1:8000/storage/"+data.foto);
        $('#user-name').val(data.name);
        $('#user-email').val(data.email);
        $('#user-status').val(data.role);
    })
});

$('#sel-Stat').change(function(){
    var seltxt = $(this).find(':selected').text()
    console.log(seltxt)
    if (seltxt == "Waka") {
        $('#edit-waka').removeClass("d-none");
        console.log($('#edit-waka'))
    }else{
        $('#edit-waka').addClass("d-none");
    }
});
$('#edit-user-status').change(function(){
    var seltxt = $(this).find(':selected').text()
    console.log(seltxt)
    if (seltxt == "Waka") {
        $('#edit-waka').removeClass("d-none");
        console.log($('#edit-waka'))
    }else{
        $('#edit-waka').addClass("d-none");
    }
});




