
	<!--dashboard area-->
	<div class="dashboard-content">
		<div class="dashboard-header">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="left">
							<p><span>dashboard</span>Control panel</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right text-right">
							<a href="dashboard.php"><i class="fas fa-home"></i>home</a>
							<span class="disabled">student issue book</span>
						</div>
					</div>
				</div>
				<div class="issueBook">
					<div class="row">
						<div class="col-md-6">
							<div class="issue-wrapper">
								<form action="" class="form-control" method="post" name="reg">
									<table class="table">
										<tr>
											<td class="">
												<select name="reg" id="" class="form-control">
													 <?php 
                                                        $res= mysqli_query($link, "select regno from std_registration");
                                                        while($row=mysqli_fetch_array($res)){
                                                            echo "<option>";
                                                            echo $row["regno"];
                                                            echo "</option>";
                                                        }
                                                    ?>
												</select>
											</td>
											<td>
												<input type="submit" class="btn btn-info" value="select" name="submit1">
											</td>
										</tr>
									</table>
                                    
									<table class="table table-bordered">
                                         <tr>
                                            <td>
                                               <input type="text" class="form-control" name="utype" value="<?php echo $utype; ?>" disabled> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="text" class="form-control" name="regno" value="<?php echo $regno; ?>"  disabled> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="text" class="form-control" name="name" value="<?php echo $name; ?>"> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="text" class="form-control" name="sem" value="<?php echo $sem; ?>"> 
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>
                                               <input type="text" class="form-control" name="session"  value="<?php echo $session; ?>"> 
                                            </td>
                                        </tr>
                                         <tr>
                                            <td>
                                               <input type="text" class="form-control" name="dept"  value="<?php echo $dept; ?>"> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="text" class="form-control" name="phone"  value="<?php echo $phone; ?>"> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="text" class="form-control" name="mail"  value="<?php echo $email; ?>"> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <select name="booksname" class="form-control">
                                                   
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="text" class="form-control" name="booksissuedate"  value="<?php echo date("d/m/Y"); ?>"> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="text" class="form-control" name="booksreturndate"  value="<?php echo $rdate; ?>"> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="text" class="form-control" name="username"  value="<?php echo $username; ?>" disabled> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                               <input type="submit" name="submit2" class="btn btn-info" value="Issue Book"> 
                                            </td>
                                        </tr>
                                    </table>

							</div>
						</div>
					</div>
				</div>
			</div>					
		</div>
	</div>
