<div class="footer" >
  <div class="footer-inner">
    <div class="footer-content" style="margin:0px 0px 0px 100px;">
      <span class="bigger-120">
        <span class="blue bolder">PORSENI</span>
        Admin &copy; 2017-2018
      </span>

      &nbsp; &nbsp;
      <span class="action-buttons">
        <a href="#">
          <i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
        </a>

        <a href="#">
          <i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
        </a>

        <a href="#">
          <i class="ace-icon fa fa-rss-square orange bigger-150"></i>
        </a>
      </span>
    </div>
  </div>
</div>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
  <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->
<!-- ace settings handler -->
<script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
<!-- basic scripts -->

<!--[if !IE]> -->
<script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
<script type="text/javascript">
if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo base_url(); ?>assets/js/jquery-ui.custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.ui.touch-punch.min.js"></script>
<script src='<?php echo base_url();?>assets/js/moment.min.js'></script>
<script src="<?php echo base_url();?>assets/js/fullcalendar.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrapValidator.min.js"></script>
<script src='<?php echo base_url();?>assets/js/bootstrap-colorpicker.min.js'></script>
<!-- ace scripts -->
<script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-wysiwyg.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/moment.js"></script>

<script src='<?php echo base_url();?>assets/js/main.js'></script>
<!-- inline scripts related to this page -->
<script type="text/javascript">
jQuery(function($) {

  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
  //but sometimes it brings up errors with normal resize event handlers
  $.resize.throttleWindow = false;

  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
  var data = [
  { label: "social networks",  data: 38.7, color: "#68BC31"},
  { label: "search engines",  data: 24.5, color: "#2091CF"},
  { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
  { label: "direct traffic",  data: 18.6, color: "#DA5430"},
  { label: "other",  data: 10, color: "#FEE074"}
  ]
  function drawPieChart(placeholder, data, position) {
    $.plot(placeholder, data, {
    series: {
      pie: {
        show: true,
        tilt:0.8,
        highlight: {
          opacity: 0.25
        },
        stroke: {
          color: '#fff',
          width: 2
        },
        startAngle: 2
      }
    },
    legend: {
      show: true,
      position: position || "ne",
      labelBoxBorderColor: null,
      margin:[-30,15]
    }
    ,
    grid: {
      hoverable: true,
      clickable: true
    }
   })
 }
 drawPieChart(placeholder, data);

 /**
 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
 so that's not needed actually.
 */
 placeholder.data('chart', data);
 placeholder.data('draw', drawPieChart);


  //pie chart tooltip example
  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
  var previousPoint = null;

  placeholder.on('plothover', function (event, pos, item) {
  if(item) {
    if (previousPoint != item.seriesIndex) {
      previousPoint = item.seriesIndex;
      var tip = item.series['label'] + " : " + item.series['percent']+'%';
      $tooltip.show().children(0).text(tip);
    }
    $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
  } else {
    $tooltip.hide();
    previousPoint = null;
  }

 });

  /////////////////////////////////////
  $(document).one('ajaxloadstart.page', function(e) {
    $tooltip.remove();
  });




  var d1 = [];
  for (var i = 0; i < Math.PI * 2; i += 0.5) {
    d1.push([i, Math.sin(i)]);
  }

  var d2 = [];
  for (var i = 0; i < Math.PI * 2; i += 0.5) {
    d2.push([i, Math.cos(i)]);
  }

  var d3 = [];
  for (var i = 0; i < Math.PI * 2; i += 0.2) {
    d3.push([i, Math.tan(i)]);
  }


  var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
  $.plot("#sales-charts", [
    { label: "Domains", data: d1 },
    { label: "Hosting", data: d2 },
    { label: "Services", data: d3 }
  ], {
    hoverable: true,
    shadowSize: 0,
    series: {
      lines: { show: true },
      points: { show: true }
    },
    xaxis: {
      tickLength: 0
    },
    yaxis: {
      ticks: 10,
      min: -2,
      max: 2,
      tickDecimals: 3
    },
    grid: {
      backgroundColor: { colors: [ "#fff", "#fff" ] },
      borderWidth: 1,
      borderColor:'#555'
    }
  });


  $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
  function tooltip_placement(context, source) {
    var $source = $(source);
    var $parent = $source.closest('.tab-content')
    var off1 = $parent.offset();
    var w1 = $parent.width();

    var off2 = $source.offset();
    //var w2 = $source.width();

    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
    return 'left';
  }


  $('.dialogs,.comments').ace_scroll({
    size: 300
    });


  //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
  //so disable dragging when clicking on label
  var agent = navigator.userAgent.toLowerCase();
  if(ace.vars['touch'] && ace.vars['android']) {
    $('#tasks').on('touchstart', function(e){
    var li = $(e.target).closest('#tasks li');
    if(li.length == 0)return;
    var label = li.find('label.inline').get(0);
    if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
    });
  }

  $('#tasks').sortable({
    opacity:0.8,
    revert:true,
    forceHelperSize:true,
    placeholder: 'draggable-placeholder',
    forcePlaceholderSize:true,
    tolerance:'pointer',
    stop: function( event, ui ) {
      //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
      $(ui.item).css('z-index', 'auto');
    }
    }
  );
  $('#tasks').disableSelection();
  $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
    if(this.checked) $(this).closest('li').addClass('selected');
    else $(this).closest('li').removeClass('selected');
  });


  //show the dropdowns on top or bottom depending on window height and menu position
  $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
    var offset = $(this).offset();

    var $w = $(window)
    if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
      $(this).addClass('dropup');
    else $(this).removeClass('dropup');
  });

  $(document).ready(function(){
		$('#mydata').DataTable();
	});

})
</script>
</body>
</html>
