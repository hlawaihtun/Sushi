<?php
  require 'header.php';
?>



  <!-- Add New Menu -->
	<div class="container" id="addmenu">
		<div class="display-4 text-center my-5">
			Add New Menu
		</div>
	   <form class="my-5" method="POST" action="addmenu.php" enctype="multipart/form-data">
		<div class="form-group row">
    	<label for="staticEmail" class="col-sm-2 col-form-label">Profile</label>
    	<div class="col-sm-10">
      		<input type="file" class="form-control-file" id="profile" name="profile">
    	</div>
  		</div>
  		<div class="form-group row">
    	<label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
    	<div class="col-sm-10">
      	<input type="text" class="form-control" id="name" value="" placeholder="Enter Name" name="name">
    	</div>
  		</div>
  		<div class="form-group row">
    		<label for="price" class="col-sm-2 col-form-label">Price</label>
    	<div class="col-sm-10">
      		<input type="price" class="form-control" id="price" placeholder="Enter Price" name="price">
    	</div>
  		</div>
  		<button class="btn btn-primary" type="submit">Save</button>
	 </form>
	</div>

  <!-- Edit Menu -->
  <div class="container" id="editmenu">
    <div class="display-4 text-center my-5">
      Edit Menu
    </div>
    <form class="my-5" method="POST" action="updatemenu.php" enctype="multipart/form-data">
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Profile</label>
      <div class="col-sm-10">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="oldprofile-tab" data-toggle="tab" href="#nav-oldprofile" role="tab" aria-controls="oldprofile" aria-selected="true">Old Profile</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="newprofile-tab" data-toggle="tab" href="#nav-newprofile" role="tab" aria-controls="newprofile" aria-selected="false">New Profile</a>
            </li>
          </ul>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-oldprofile" role="tabpanel" aria-labelledby="nav-home-tab"><img src="" id="edit_photo" name="edit_photo"></div>
            <div class="tab-pane fade my-3 ml" id="nav-newprofile" role="tabpanel" aria-labelledby="nav-profile-tab">
              <input type="hidden" name="edit_id" id="edit_id">
              <input type="hidden" class="form-control-file" id="edit_oldprofile" name="edit_oldprofile">
                <input type="file" class="form-control-file" name="edit_newprofile">
            </div>
          </div>

      </div>
      </div>
      <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="edit_name" name="edit_name" value="" placeholder="Enter Name">
      </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Price</label>
      <div class="col-sm-10">
          <input type="number" class="form-control" id="edit_price" name="edit_price" placeholder="Enter Email">
      </div>
      </div>
      <button class="btn btn-primary">Update</button>
  </form>
  </div>

  <div class="container">
    <table class="table table-bordered">
      <thead>
      <tr>
        <th>No</th>
        <th>Name</th>
        <th>Price</th>
        <th>Photo Name</th>
        <th>Action</th>
      </tr>
      </thead>
        <tbody>
          
        </tbody>
    </table>
  </div>
<?php
  require 'footer.php';
?>