$(document).ready(function(){
	showTable();
	$('#menuCard').on('click','.addtocart',function(){
		console.log('hello')
		var id = $(this).data('id');
		var name = $(this).data('name');
		var price = $(this).data('price');

		var menu ={
			id: id,   //first key as u like and second value from above
			name: name,
			price: price,
			qty:1
		}

		// console.log(menu);

		// check localStorage


		var menuString = localStorage.getItem("menulist");
		var menuArray;

		if(menuString == null){
			menuArray = Array();
		}
		else{
			//object
			menuArray = JSON.parse(menuString);
		}


		console.log(menuArray);


		var status =false;
		$.each(menuArray, function(i,v){
			if(id==v.id){
				status=true;
				v.qty++;
			}
		})

		if(!status){
			menuArray.push(menu);	
		}

		var menuData = JSON.stringify(menuArray);
		localStorage.setItem('menulist',menuData);

		showTable();
	});



	function showTable(){
		var menuString = localStorage.getItem('menulist');

		if(menuString){
			$('#voucher_div').show();

			var menuArray = JSON.parse(menuString);
			var total = 0;
			var tbodyData=''; var tfootData='';

			if(menuArray !=0){
				//looping localStorage
				$.each(menuArray,function(i,v){
					var name = v.name;
					var price = v.price;
					var qty = v.qty;
					var subtotal = price * qty;

					total += subtotal;

					tbodyData += `<tr>
									<td>
									${name}
									<span class="font-weight-lighter d-block">${price}</span>
									</td>
									<td>
									<button class="btn btn-secondary btn-sm minusBtn" data-id="${i}">-</button>
									<span class="mx-2">${qty}</span>
									<button class="btn btn-secondary btn-sm plusBtn" data-id="${i}">+</button>
									</td>
									<td>
									${subtotal}
									</td>
									<td align="center">
									<button class="btn btn-danger btn-sm removeBtn" data-id="${i}">X</button>
									</td>

								</tr>`;
				})

				tfootData += `<tr>
								<td colspan="4">
									<button class="btn btn-light btn-block" id="checkoutBtn">Check Out</button>
								</td>
							</tr>`

				$('tbody').html(tbodyData);
				$('tfoot').html(tfootData);
			}
			else{
				//array empty
				$('#voucher_div').hide();
			}
		}
		else{
			$('#voucher_div').hide();
		}
	}



	// Add Quantity
	$('tbody').on('click','.plusBtn',function(){
		var id = $(this).data('id');
		var menuString = localStorage.getItem("menulist");

		var menuArray = JSON.parse(menuString);
		$.each(menuArray, function(i,v){
			if(i==id){
				v.qty++;
			}
		});

		var menuData = JSON.stringify(menuArray);
		localStorage.setItem('menulist',menuData);

		showTable();
	});

	//Reduce Quantity

	$('tbody').on('click','.minusBtn',function(){
		var id=$(this).data('id');
		var menuString = localStorage.getItem("menulist");
		var menuArray = JSON.parse(menuString);
		$.each(menuArray, function(i,v){
			if(i==id){
				if(v.qty>1){
				v.qty--;
			}else{
				menuArray.splice(v,1);
			}
			}

		});

		var menuData = JSON.stringify(menuArray);
		localStorage.setItem('menulist',menuData);

		showTable();
	});
		

	//Remove Btn
	$('tbody').on('click','.removeBtn',function(){
		var id= $(this).data('id');
		//console.log(id);
		var menuString = localStorage.getItem('menulist');
		var menuArray = JSON.parse(menuString);

		$.each(menuArray, function(i,v){
			if (i==id) {
				menuArray.splice(id,1);
			}
		});
		//console.log(menuArray);
		var menuData = JSON.stringify(menuArray);
		localStorage.setItem('menulist', menuData);
		showTable();
	});

	$('tfoot').on('click','#checkoutBtn',function(){
		localStorage.clear();
		showTable();
	})

});