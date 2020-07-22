<div id="calendar_dashboard"></div>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";  
jQuery(document).ready( function($) {
  jQuery("#calendar_dashboard").fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay',
    },
    views: {
      listDay: { buttonText: 'list day' },
      listWeek: { buttonText: 'list week' },
      listMonth: { buttonText: 'list month' }
    },    
    //events: 'https://fullcalendar.io/demo-events.json',
    navLinks: true, 
    editable: true, 

  });	
});	
</script>