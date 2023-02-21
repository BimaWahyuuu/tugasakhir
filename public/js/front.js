$(document).ready(function () {
	$('#waka').change(function  () {
		var id = $(this).val();
		console.log(id);
		console.log($('#bidang'))
		// empty dropdown
		$('#bidang').find('option').not(':first').remove();

		$.ajax({
             url: 'saran/'+id+'/edit',
             type: 'get',
             dataType: 'json',
             success: function(response){

             	console.log(response)

                 var len = 0;
                 if(response != null){
                      len = response.length;
                 }

                 if(len > 0){
                      // Read data and create <option >
                      for(var i=0; i<len; i++){

                           var id = response[i].waka_id;
                           var name = response[i].bidang;

                           var option = "<option value='"+id+"'>"+name+"</option>";

                           $('#bidang').append(option); 
                      }
                 }

             }
         });
	})
})