
<?php
 $pagetitle="Entering Subjects Detail In This Page ";
 include "includes/header.php"; ?>

 <?php 
    if (isset($_POST['saved'])) {
    
      $subName = $_POST['subject'];
      $teacher= $_POST['teacher'];
      $field = $_POST['field'];
      $semester= $_POST['semester'];

      $db = new db();

      if($db->subject_entry($conn,$subName,$teacher,$field,$semester)){
      echo "Succesfully Saved";
      }
      else{
        echo "unable to Save.";
      }
    }
     ?>  
 
<div class="container">

               <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey txt_orange">Subject's Entry</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                </div>
                

<div class="form-container">

    <form action="#" method="post" role="form">
    <div class="container">
    <div class="row">
          <div class="col-lg-4">

          <div class="form-group">
            <label for="subject" >Subject's Name </label>
           <select  class="form-control" required id="teacher" name="subject">
           <option>Select subject</option>
           <option >ENG101</option>
           <option >ENG102</option>
           <option >CSE111</option>
           <option >CSE220</option>
           <option >MAT216</option>
           <option >CSE330</option>
           <option >CSE221</option>
           <option >CSE350</option>
           <option >CSE260</option>
           <option >CSE370</option>
           <option >CSE460</option>
           <option >CSE331</option>
           <option >CSE423</option>
           <option >PHY111</option>
           <option >HUM103</option>
           <option >MAT120</option>
           <option >CSE420</option>
           <option >CSE422</option>
           <option >CSE400</option>
           <option >COD003</option>
           </select>
          </div>
          </div>
    
          <div class="col-lg-3">

          <div class="form-group">
          <label for="field" >Field</label>
           <select  class="form-control" required id="field" name="field">
           <option>Select field</option>
           <option >CSE</option>
           <option >EEE</option>
           <option >BBA</option> 
           <option >ESS</option>
           <option >ARC</option>
           </select>
          </div>
          </div>

         </div><!--col-row-->
          </div><!--col-container-->
           <div class="container">
          <div class="row">
          <div class="col-lg-4">

          <div class="form-group">
            <label for="semester" >Semester </label>
           <select  class="form-control" required id="semester" name="semester">
           <option>Select semester</option>
           <option >1st</option>
           <option >2nd</option>
           <option >3rd</option> 
           <option >4th</option>
           <option >5th</option>
           <option >6th</option> 
           <option >7th</option>
           <option >8th</option>
           <option >9th</option>
           <option >10th</option>
           <option >11th</option>
           <option >12th</option>
           </select>
          </div>
          </div>
        
      
         <div class="col-lg-3">

          <div class="form-group">
          <label for="teacher" >Faculty Name</label>
           <select  class="form-control" required id="teacher" name="teacher">
           <option>Select teacher</option>
           <option >Professor Haider Ali </option>
           <option >Hossain Arif</option>
           <option >Abdulillah Saad</option>
           <option >Sadia Hamid Kaji</option>
           <option >Others</option>
           </select>
          </div>
          </div>
      </div>
      </div>

          <div class="ui mini buttons col-sm-offset-3 col-sm-3">
          <button type="submit" class="ui mini positive button" name="saved">Register</button>
          <div class="or"></div>
          <button type="reset" class="ui mini red button" name="back">Clear</button>
          </div>
      
  </form>
 </div><!--form-container-->
 </div> <!--container-->
   
<?php include "includes/footer.php"; ?>
