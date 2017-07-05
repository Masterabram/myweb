 <!-- Home Section Start -->
    <section class="home-section">
        <div class="container">
            <div class="row">
                
                 <div class="col-sm-offset-2 col-md-4 col-sm-6 margin-left-setting">
                    <div class="margin-top-150">
                     <?php if ($ERROR_MSG <> "") { ?>
					    <div class="alert alert-dismissable alert-<?php echo $ERROR_TYPE ?>">
					      <button data-dismiss="alert" class="close" type="button">×</button>
					      <p><?php echo $ERROR_MSG; ?></p>
					    </div>
					<?php } ?>   
                     <div class="table-responsive">
					    <table class="table">
							<tr>
							    <td>Name</td>
								<td>Abraham Ogol</td>
							 </tr>
                             <tr>
								<td>Email</td>
								<td>abramogol@gmail.com</td>
							</tr>
							<tr>
								<td>Designation</td>
								<td>Web Designer</td>
							 </tr>
							<tr>
								<td>Experience</td>
								<td>2 Years</td>
							</tr>
							<tr>
								<td>Contact</td>
								<td>+254790463533</td>
							</tr>
                            <tr>
								<td>Resume</td>
								<td style="background-color: #f7639a;"><a href="Resume.pdf" target="_blank" data-toggle="tooltip" data-placement="top" title="Check Out My Resume">Resume.pdf</a></td>
							</tr>
						</table>
					  </div>
                     </div>
                   </div>
                 
                 <div class="col-md-5 col-sm-6">
                    <div class="me-image">
                      <img src="images/bg/profile.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
        </section>
        <!-- Home Section End -->
        