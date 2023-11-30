<?php /* Smarty version 2.6.26, created on 2023-05-12 20:36:13
         compiled from std_fee_pay.tpl */ ?>
  <?php $_from = $this->_tpl_vars['view2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['j']):
?>
                <?php if ($this->_tpl_vars['j']['sem'] == 1): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Fee Payment Portal</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <!-- <h1>₹<span>All Tax included</span></h1> -->
                      </div>
                      
                      <?php if ($this->_tpl_vars['j']['fsem'] == 0): ?>
                      <a href="payment.php?asem=1"></a><p><a href="payment.php?asem=1" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 0): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>


<?php endif; ?>                      
                    </div>
                  </div>
                </div>
              </div>
          </div>


        </div>
      </div>
    </div>
  
  </section>
                <?php elseif ($this->_tpl_vars['j']['sem'] == 2): ?>
                <section class="meetings-page" id="meetings">

        <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>


    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>12</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 0): ?>
                      <a href="payment.php?asem=1"></a><p><a href="payment.php?asem=1" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 0): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>

<?php endif; ?>                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>24</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 1): ?>
                      <a href="payment.php?asem=2"></a><p><a href="payment.php?asem=2" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 1): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>


<?php endif; ?>
                    </div>
                  </div>
                </div>


                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
                <?php elseif ($this->_tpl_vars['j']['sem'] == 3): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>12</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 0): ?>
                      <a href="payment.php?asem=1"></a><p><a href="payment.php?asem=1" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 0): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>24</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 1): ?>
                      <a href="payment.php?asem=2"></a><p><a href="payment.php?asem=2" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 1): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM III</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>16</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 2): ?>
                      <a href="payment.php?asem=3"></a><p><a href="payment.php?asem=3" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 2): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
<?php elseif ($this->_tpl_vars['j']['sem'] == 4): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
 <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h1>₹</h1>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 0): ?>
                      <a href="payment.php?asem=1"></a><p><a href="payment.php?asem=1" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 0): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>24</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 1): ?>
                      <a href="payment.php?asem=2"></a><p><a href="payment.php?asem=2" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 1): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM III</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>16</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 2): ?>
                      <a href="payment.php?asem=3"></a><p><a href="payment.php?asem=3" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 2): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM IV</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>18</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 3): ?>
                      <a href="payment.php?asem=4"></a><p><a href="payment.php?asem=4" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 3): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
<?php elseif ($this->_tpl_vars['j']['sem'] == 5): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
<div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>12</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 0): ?>
                      <a href="payment.php?asem=1"></a><p><a href="payment.php?asem=1" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 0): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>24</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 1): ?>
                      <a href="payment.php?asem=2"></a><p><a href="payment.php?asem=2" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 1): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM III</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>16</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 2): ?>
                      <a href="payment.php?asem=3"></a><p><a href="payment.php?asem=3" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 2): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM IV</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>18</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 3): ?>
                      <a href="payment.php?asem=4"></a><p><a href="payment.php?asem=4" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 3): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM V</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>22</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 4): ?>
                      <a href="payment.php?asem=5"></a><p><a href="payment.php?asem=5" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 4): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
<?php elseif ($this->_tpl_vars['j']['sem'] == 6): ?>

<section class="meetings-page" id="meetings">
   <div class="col-lg-12 container our-courses">
          <div class="section-heading">
            <h2>Classroom</h2>
          </div>
        </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">


            <div class="col-lg-12">
              <div class="row grid">
<div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM I</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-01.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>12</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 0): ?>
                      <a href="payment.php?asem=1"></a><p><a href="payment.php?asem=1" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 0): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM II</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>24</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 1): ?>
                      <a href="payment.php?asem=2"></a><p><a href="payment.php?asem=2" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 1): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM III</span>
                      </div>
                      <a ><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>16</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 2): ?>
                      <a href="payment.php?asem=3"></a><p><a href="payment.php?asem=3" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 2): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM IV</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-04.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>18</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 3): ?>
                      <a href="payment.php?asem=4"></a><p><a href="payment.php?asem=4" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 3): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>
                
                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM V</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-03.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>22</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 4): ?>
                      <a href="payment.php?asem=5"></a><p><a href="payment.php?asem=5" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 4): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>


                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <div class="price">
                        <span>SEM VI</span>
                      </div>
                      <a  ><img src="student/assets/images/meeting-02.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>24</span></h6>
                      </div>
                      <?php if ($this->_tpl_vars['j']['fsem'] == 5): ?>
                      <a href="payment.php?asem=6"></a><p><a href="payment.php?asem=6" class="btn btn-info submit">Pay</a></p>
<?php elseif ($this->_tpl_vars['j']['fsem'] > 5): ?>
				<p><a class="btn btn-success">Paid</a></p>

<?php else: ?>
        <p><a class="btn btn-danger"><marquee direction="right">Previous Sem Fee Pending</marquee></a></p>
<?php endif; ?>
                    </div>
                  </div>
                </div>

                            </div>



          </div>
        </div>
      </div>
    </div>
  
  </section>
                <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>