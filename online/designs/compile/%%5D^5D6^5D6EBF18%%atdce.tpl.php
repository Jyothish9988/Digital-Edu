<?php /* Smarty version 2.6.26, created on 2023-05-18 09:30:55
         compiled from atdce.tpl */ ?>

<!DOCTYPE html>
<html lang="en">
<?php echo '
<head>
<title>Teacher Home</title>





  
  <!-- Meta tag Keywords -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="keywords" content="Success path Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
  Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script type="application/x-javascript">
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  '; ?>

  <!--// Meta tag Keywords -->
  <!-- css files -->
  <link rel="stylesheet" href="teacher/css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
  <link rel="stylesheet" href="teacher/css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
  <link rel="stylesheet" href="teacher/css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
  <!-- //css files -->

  <!-- web-fonts -->
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
  <link rel="stylesheet" href="student/assets/css/templatemo-edu-meeting.css">
  <!-- //web-fonts -->
  
</head>

<body>

<header>
    <div class="top-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand text-uppercase" href="index.html">Attendance </i></a>

<!-- //Navigation -->
<input type="button" value="Refresh Page" onClick="window.location.reload();">
</nav>
</div>
</div>
</header>

<!-- inner page banner -->
<section class="innerpage_banner py-5">
  <div class="dot1">
    
  </div>
</section>
<!-- //inner page banner -->



<br>
<br>                           






  <div style="overflow-x:auto">


    <body>

<form method="post" action="" onsubmit="">
<table  class="table table-striped table-bordered">
    <tr><td>Subject</td>
                                <td>

                                  <select class="form-control" name="subject" placeholder="Enter Subject........
                                   " readonly>
                             
                                   

                                   <option><?php echo $this->_tpl_vars['sub1']; ?>
</option>

                             
                               </select>
</td>

    </tr>

<tr>
    <!-- <th>Admission No</th> -->
    <th>Roll no</th>
    <th>Name</th>
    
    <th>Present</th>
    <th>Absent</th>
</tr>



    <input type="hidden" value="h" name="hide">


<?php $_from = $this->_tpl_vars['absent']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['k']):
?>

<tr>

    <!-- <td><?php echo $this->_tpl_vars['k']['adno']; ?>
</td> -->
    <td><?php echo $this->_tpl_vars['r']++; ?>
</td>
    <td><?php echo $this->_tpl_vars['k']['name1']; ?>
&nbsp;<?php echo $this->_tpl_vars['k']['name2']; ?>
</td>
    
<?php if ($this->_tpl_vars['k'][$this->_tpl_vars['sub']] == 1): ?>


    <td><input type="checkbox" id="atdce" name="present[]" value="<?php echo $this->_tpl_vars['k']['std_key']; ?>
-1" onclick="checkOnly(this)" checked></td>
    <td><input type="checkbox" id="atdce2" name="absent[]" value="<?php echo $this->_tpl_vars['k']['std_key']; ?>
-0" onclick="checkOnly(this)"></td>
<?php else: ?>
    <td><input type="checkbox" id="atdce" name="present[]" value="<?php echo $this->_tpl_vars['k']['std_key']; ?>
-1" onclick="checkOnly(this)"></td>
    <td><input type="checkbox" id="atdce2" name="absent[]" value="<?php echo $this->_tpl_vars['k']['std_key']; ?>
-0" onclick="checkOnly(this)" checked></td>


<?php endif; ?>
</tr>

<?php endforeach; endif; unset($_from); ?>


<?php echo '
<script type="text/javascript">
    function checkOnly(obj) {
        if($(obj).is(\':checked\')) {
            $(obj).closest(\'tr\').find(\'input[type="checkbox"]\').not(obj).prop(\'checked\', false);
        } else {
            $(obj).closest(\'tr\').find(\'input[type="checkbox"]\').not(obj).prop(\'checked\', true);
        }
    }

</script>
'; ?>



<tr>
    
<td><input type="submit" value="Submit" class="btn btn-success"></td>

</tr>

</table>
</form>
</div>