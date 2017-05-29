<!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
		<?php echo $this->Html->script('jquery-ui-1.10.3.min');
		      echo $this->Html->script('bootstrap.min');//Bootstrap
			  echo $this->Html->script('plugins/morris/morris.mi');
			  echo $this->Html->script('plugins/sparkline/jquery.sparkline.min');//Sparkline
		?>     
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>       
        <!-- jvectormap -->
        <script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <?php echo $this->Html->script('plugins/fullcalendar/fullcalendar.min');?>

        <!-- jQuery Knob Chart -->
        <?php echo $this->Html->script('plugins/jqueryKnob/jquery.knob');?>
        <!-- daterangepicker -->        
		<?php echo $this->Html->script('plugins/daterangepicker/daterangepicker');?>
        <!-- Bootstrap WYSIHTML5 -->        
		<?php echo $this->Html->script('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min');?>
        <!-- iCheck -->
        
        <?php echo $this->Html->script('plugins/iCheck/icheck.min');?>
        <!-- AdminLTE App -->
        
        <?php echo $this->Html->script('AdminLTE/app');?>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->               
        <?php echo $this->Html->script('AdminLTE/dashboard');?>
    </body>
</html>