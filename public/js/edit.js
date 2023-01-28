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

        const form = document.querySelector('#formEdit');
        const id = btnSave.getAttribute('data-id');

        form.action = "http://127.0.0.1:8000/admin/bidang/"+id;
        form.firstElementChild.value = newinput;
        form.submit();
        console.log(form)
        // console.log(form.firstElementChild);
        // console.log(btnSave.getAttribute('data-id'));
        });

    })
});