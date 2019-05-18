<?php
if($_POST["z"]=='Staff'){
?>      
        <div class="box-body" >
          <div class="row">
          <div class="col-md-12"> 
            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Firstname
                <input type="text" class = "form-control" name="firstname" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Middlename
                <input type="text" class = "form-control" name="middlename" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

             <div class="col-md-4">
              <div class="form-group">
                <label style = "color:black;">Lastname
                <input type="text" class = "form-control" name="lastname" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>
        </div>
      </div>

           <div class="col-md-10">
             <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Username
                <input type="text" class = "form-control" name = "username" required>
                </label>
              </div>
              <!-- /.form-group -->
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label style = "color:black;">Password
                <input type="password" id = "pass" class = "form-control" name = "password">
                </label>
                <div>
                  <label class = "container" style = "color:black"> Show Password
                <input type = "checkbox" onchange="document.getElementById('pass').type = this.checked ? 'text' : 'password'">
                <span class = "checkmark"></span>
              </label>
              </div>
              </div>
              <!-- /.form-group -->
            </div>
          </div>

            <?php

            include '../../connection.php';

            $query = "SELECT * FROM `tbl_department` ORDER BY fld_department DESC";

            $result2 = mysqli_query($conn, $query);

            $options = "";

            while($row = mysqli_fetch_array($result2))
            {
             $options = $options."<option>$row[1]</option>";
            }

          ?>
        <div class="col-md-10">
          <div class="col-md-8">
            <div class="form-group">
                  <label  class="col-sm-2 control-label" style = "font-size: 15px; color:black;">Department</label>
                  <select class="form-control" style = "color:black;" name = "department">
                    <option></option>
                    <?php echo $options;?>
                  </select>
                </div>
              </div>
            </div>
        </div>

        <?php
      }
      ?>