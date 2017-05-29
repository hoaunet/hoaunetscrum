<!DOCTYPE html>
<html>
    <head>
         <?= $this->Html->charset() ?> 
        <title>Admin Dashboard</title>
		<?= $this->Html->meta('icon') ?> 
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
		<?= $this->Html->css('bootstrap.min') ?>       
        <!-- font Awesome -->
		<?= $this->Html->css('font-awesome.min') ?>         
        <!-- Ionicons -->
		<?= $this->Html->css('ionicons.min') ?>       
        <!-- Morris chart -->
		<?= $this->Html->css('morris/morris') ?>
        <!-- jvectormap -->
		<?= $this->Html->css('jvectormap/jquery-jvectormap-1.2.2') ?>        
        <!-- fullCalendar -->
		<?= $this->Html->css('fullcalendar/fullcalendar') ?>        
        <!-- Daterange picker -->
		<?= $this->Html->css('daterangepicker/daterangepicker-bs3') ?>        
        <!-- bootstrap wysihtml5 - text editor -->
		<?= $this->Html->css('bootstrap-wysihtml5/bootstrap3-wysihtml5.min') ?>
        <!-- Theme style -->
		<?= $this->Html->css('AdminLTE') ?> 
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>