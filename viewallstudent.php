<?php
    include_once('header.php');
	?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View All Students</h1>
                 
                    </div>
                </div>
                <!-- /. ROW  -->
              
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           View All Students
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Student_id</th>
                                            <th>Firstname</th>
                                            <th>Lastname</th>
                                            <th>Contact_no</th>
											<th>Subject</th>
											<th>Marks</th>
											<th>Fees</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php
                                           if(!empty($data_students))
                                           {
                                            foreach($data_students as $d)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?php echo $d->student_id;?></td>
                                                    <td><?php echo $d->firstname;?></td>
                                                    <td><?php echo $d->lastname;?></td>
													<td><?php echo $d->cont_no;?></td>
                                                    <td><?php echo $d->subject;?></td>
													<td><?php echo $d->marks;?></td>
													<td><?php echo $d->fees;?></td>
													
                                                   
                                                </tr>
                                                <?php
                                                }
                                           }
                                           else
                                           {
                                            ?>
                                            <tr>
                                                <td> DATA NOT FOUND</td>

                                            </tr>
                                            <?php
                                            } 
                                            ?> 
                                           
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
