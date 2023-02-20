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

