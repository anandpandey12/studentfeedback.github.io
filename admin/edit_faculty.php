<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update faculty set Name='$n',designation	='$desg',Subject='$sub',Department='$dept',semester='$sem',mobile='$mob',	password='$pass' where id='".$_GET['id']."'");	

$err="<font color='green'>Faculty Details updated</font>";

	}

$con=mysqli_query($conn,"select * from faculty where id='".$_GET['id']."'");

$res=mysqli_fetch_assoc($con);	

?>


<h1 class="page-header">Update  Faculty</h1>
<div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<input type="text" value="<?php echo @$res['designation'];?>" name="desg" class="form-control" required>
        </div>
   	</div>


    <div class="control-group form-group">
        <div class="controls">
            <label>Deparment</label>
  

     <select name="dept" class="form-control" required>
                    
                    <option>Information Technology</option>
                    <option>Electronics and Communication</option>
                    <option>Electronics</option>
                    <option>Mechanical</option>
                    <option>Computer Science </option>
                    <option>IOT</option>
                    <option>Data Science</option>
                    <option>Artificial Intelligence</option>
                    </select>

        </div>
    </div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
          <input type="text" value="<?php echo @$res['password'];?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Subject:</label>
  <input type="text"  name="sub" value="<?php echo @$res['Subject'];?>" class="form-control" required>
        </div>
    </div>




	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
  
            <select name="sem" class="form-control" required>
                    
                    <option>i</option>
                    <option>ii</option>
                    <option>iii</option>
                    <option>iv</option>
                    <option>v</option>
                    <option>vi</option>
                    <option>vii</option>
                    <option>viii</option>
                    </select>
        


        </div>
    </div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Faculty">
        </div>
  	</div>
	</form>


</div>