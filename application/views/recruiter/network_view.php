
    <div class="container-fluid">
      <div class="row">
        <main class="main-content col-lg-10 col-md-9 col-sm-12 p-0 offset-lg-2 offset-md-3">
          <div class="main-navbar sticky-top bg-white"><div class="row">
             
              <div class="col-lg-10">
                <div class="card card-small mb-4 pt-3">
                  <div class="card-header border-bottom text-center">
                        <form>
                   <div class="col-sm-12 col-md-12 mb-3">
                  <?php foreach($ques as $item){?>
                  <strong class="text-muted d-block mb-2">
                  <?php echo $item->Test_Question ;?></strong>

                    <input type="radio"id="formsRadioDefault" name="formsRadioDefault" >
                  <label class="custom-control-label"  for="formsRadioDefault"> <?php echo $item->Option1 ;?></label>
                   <input type="radio"id="formsRadioDefault" name="formsRadioDefault" >
                  <label class="custom-control-label"  for="formsRadioDefault"> <?php echo $item->Option2 ;?></label>
                   <input type="radio"id="formsRadioDefault" name="formsRadioDefault" >
                  <label class="custom-control-label"  for="formsRadioDefault"> <?php echo $item->Option3 ;?></label>
                   
                   <input type="radio"id="formsRadioDefault" name="formsRadioDefault" >
                  <label class="custom-control-label"  for="formsRadioDefault"> <?php echo $item->Option4 ;?></label>
                   <?php }?> </div>
                  </div>
              
     
              </div>
            
            </div>
          </div>
        </main>
      </div>
    </div>
    