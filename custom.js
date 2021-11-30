$(document).ready(function(){

	$('#addmenu').show();
	$('#editmenu').hide();
	getMenulist();
	getMenucard();
	
	/*FOR MENU*/
	function getMenulist(){
		$.get('menulist.json',function(response){
			if(response){
				console.log(typeof(response));

				//object
				var menuObjArray = response;
				var html = '';var j=1;

				$.each(menuObjArray,function(i,v){
					html += `<tr>
								<td>${j++}</td>
      							<td>${v.name}</td>
      							<td>${v.price}</td>
      							<td>${v.profile}</td>
      							<td>
      							<button class="btn btn-outline-primary">
      							<i class="fa fa-info-circle"></i></button>
      							<button class="btn btn-outline-warning edit" data-id="${i}">
      							<i class="fa fa-edit "></i></button>
      							<button class="btn btn-outline-danger delete" data-id="${i}">
      							<i class="fa fa-trash-alt"></i></button>
      							</td>

							</tr>`
				});

				$('tbody').html(html);
			}
		})
	}

	/*FOR SUSHI CARD*/
	function getMenucard(){
		$.get('menulist.json',function(response){
			if(response){
				console.log(typeof(response));

				var menuCardobjArray = response;
				var html = ''; var k=1;

				$.each(menuCardobjArray,function(i,v){
					html += `<div class="col-md-4 my-3">
  									<div class="card">
  										<span class="price badge badge-dark badge-pill">${v.price}</span>
      										<img src="${v.profile}" class="card-img-top">
      									<div class="card-body">
        									<h5 class="card-title text-center">${v.name}</h5>
        									<hr class="">
      										<button class="btn btn-outline-danger btn-block addtocart" data-id="${i}" data-name="${v.name}" data-price="${v.price}">Add to Cart</button>
      									</div>
      									
    								</div>
  							</div>`
				})

				$('#menuCard').html(html);
			}
		});
	}
	


	 $('tbody').on('click','.delete',function(){
      		var id = $(this).data('id');
      		var ans = confirm("Are you sure want to delete!")

                  if(ans){
                        $.post('deleteMenu.php',{id:id},function(data){
                                          getMenulist();
                                    }
                              )
                  }

      });


	 $('tbody').on('click','.edit',function(){
      	var id = $(this).data('id');
      	 $.get('menulist.json',function(response){

                  var menuObjArray = response;

                  var name = menuObjArray[id].name;
                  var price = menuObjArray[id].price;
                  var profile = menuObjArray[id].profile;

                  console.log("Name =" + name + " Price = " + price +
                        "profile = " + profile)

                $('#edit_name').val(name);
                $('#edit_price').val(price);


                //image edit
                $('#edit_photo').attr('src',profile);
                $('#edit_id').val(id);
                $('#edit_oldprofile').val(profile);


		$('#addmenu').hide();
     		$('#editmenu').show();
            
      })
      
      });
});