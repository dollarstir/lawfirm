<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Finance</title>


<link rel="stylesheet" href="main/firm/css/bootstrap.min.css" />

<link rel="stylesheet" href="main/firm/vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="main/firm/vendors/swiper_slider/css/swiper.min.css" />

<link rel="stylesheet" href="main/firm/vendors/select2/css/select2.min.css" />

<link rel="stylesheet" href="main/firm/vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="main/firm/vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="main/firm/vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="main/firm/vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="main/firm/vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="main/firm/vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="main/firm/vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="main/firm/vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="main/firm/vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="main/firm/vendors/morris/morris.css">

<link rel="stylesheet" href="main/firm/vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="main/firm/css/metisMenu.css">

<link rel="stylesheet" href="main/firm/css/style.css" />
<link rel="stylesheet" href="main/firm/css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">



<?php involve('adminnav.php'); ?>


<section class="main_content dashboard_part">

<?php involve('admintop.php'); ?>

<div class="main_content_iner ">
<div class="container-fluid plr_30 body_white_bg pt_30">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="single_element">
<div class="quick_activity">
<div class="row">
<div class="col-12">
<div class="quick_activity_wrap">
<div class="single_quick_activity">
<h4>Total Income</h4>
<h3>$ <span class="counter">5,79,000</span> </h3>
<p>Saved 25%</p>
</div>
<div class="single_quick_activity">
<h4>Total Expences</h4>
<h3>$ <span class="counter">79,000</span> </h3>
<p>Saved 25%</p>
</div>
<div class="single_quick_activity">
<h4>Cash on Hand</h4>
<h3>$ <span class="counter">92,000</span> </h3>
<p>Saved 25%</p>
</div>
<div class="single_quick_activity">
<h4>Net Profit Margin</h4>
<h3>$ <span class="counter">1,79,000</span> </h3>
<p>Saved 65%</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-xl-6">
<div class="white_box mb_30 min_430">
<div class="box_header  box_header_block ">
<div class="main-title">
<h3 class="mb-0">AP and AR Balance</h3>
<span>Avg. $5,309</span>
</div>
<div class="box_select d-flex">
<select class="nice_Select2 mr_5">
<option value="1">Monthly</option>
<option value="1">Monthly</option>
</select>
<select class="nice_Select2 ">
<option value="1">Last Year</option>
<option value="1">this Year</option>
</select>
</div>
</div>
<div id="bar_active"></div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-3 ">
<div class="white_box mb_30 min_430">
<div class="box_header  box_header_block">
 <div class="main-title">
<h3 class="mb-0">% of Income Budget</h3>
</div>
</div>
<div id="radial_2"></div>
<div class="radial_footer">
<div class="radial_footer_inner d-flex justify-content-between">
<div class="left_footer">
<h5> <span style="background-color: #EDECFE;"></span> Blance</h5>
<p>-$18,570</p>
</div>
<div class="left_footer">
<h5> <span style="background-color: #A4A1FB;"></span> Blance</h5>
<p>$31,430</p>
</div>
</div>
<div class="radial_bottom">
<p><a href="main/firm/index.html#">View Full Report</a></p>
</div>
</div>
</div>
</div>
<div class="col-md-6 col-lg-6 col-xl-3">
<div class="white_box min_430">
<div class="box_header  box_header_block">
<div class="main-title">
<h3 class="mb-0">% of Expenses Budget</h3>
</div>
</div>
<div id="radial_1"></div>
<div class="radial_footer">
<div class="radial_footer_inner d-flex justify-content-between">
<div class="left_footer">
<h5> <span style="background-color: #EDECFE;"></span> Blance</h5>
<p>-$18,570</p>
</div>
<div class="left_footer">
<h5> <span style="background-color: #A4A1FB;"></span> Blance</h5>
<p>$31,430</p>
</div>
</div>
<div class="radial_bottom">
<p><a href="main/firm/index.html#">View Full Report</a></p>
</div>
</div>
</div>
</div>
<div class="col-lg-12 col-xl-6">
<div class="white_box mb_30 min_430">
<div class="box_header  box_header_block">
<div class="main-title">
<h3 class="mb-0">EBIT (Earnings Before Interest & Tax)</h3>
</div>
</div>
<canvas height="200" id="visit-sale-chart"></canvas>
</div>
</div>
<div class="col-lg-12 col-xl-6">
<div class="white_box mb_30 min_430">
<div class="box_header  box_header_block align-items- ">
<div class="main-title">
<h3 class="mb-0">Cost of goods / Services</h3>
</div>
<div class="title_info">
<p>1 Jan 2020 to 31 Dec 2020 <br>
<div class="legend_style text-right">
<li> <span style="background-color: #A4A1FB;"></span> Services</li>
<li class="inactive"> <span style="background-color: #A4A1FB;"></span> Avarage</li>
</div> </p>
</div>
</div>
<canvas height="200" id="visit-sale-chart2"></canvas>
 </div>
</div>
<div class="col-lg-6 col-xl-3">
<div class="white_box mb_30 min_400">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Disputed vs Overdue Invoices</h3>
</div>
</div>
<canvas height="220px" id="doughutChart"></canvas>
<div class="legend_style mt_10px ">
<li class="d-block"> <span style="background-color: #DF67C1;"></span> Disputed Invoices</li>
<li class="d-block"> <span style="background-color: #6AE0BD;"></span> Avarage</li>
</div>
</div>
</div>
<div class="col-lg-6 col-xl-6">
<div class="white_box mb_30 min_400 ">
<div class="box_header  box_header_block">
<div class="main-title">
<h3 class="mb-0">Disputed Invoices</h3>
</div>
<div class="legend_style mt-10">
<li> <span></span> Disputed Invoices</li>
<li class="inactive"> <span></span> Avarage</li>
</div>
</div>
<div class="title_btn">
<ul>
<li><a class="active" href="main/firm/index.html#">All time</a></li>
<li><a href="main/firm/index.html#">This year</a></li>
<li><a href="main/firm/index.html#">This week</a></li>
<li><a href="main/firm/index.html#">Today</a></li>
</ul>
</div>
<canvas height="120px" id="sales-chart"></canvas>
</div>
</div>
<div class="col-lg-6 col-xl-3">
<div class="white_box mb_30 min_400">
<div class="box_header  box_header_block">
<div class="main-title">
<h3 class="mb-0">Disputed vs Overdue Invoices</h3>
</div>
</div>
<canvas height="220px" id="doughutChart2"></canvas>
<div class="legend_style legend_style_grid mt_10px">
<li class="d-block"> <span style="background-color: #FF7B36;"></span> 30 Days</li>
<li class="d-block"> <span style="background-color: #E8205E;"></span> 60 Days</li>
<li class="d-block"> <span style="background-color: #3B76EF"></span> 90 Days</li>
<li class="d-block"> <span style="background-color:#00BFBF;"></span> 90+Days</li>
</div>
</div>
</div>
<div class="col-lg-8">
<div class="white_box min_400">
<div class="box_header  box_header_block">
<div class="main-title">
<h3 class="mb-0">EBIT (Earnings Before Interest & Tax)</h3>
</div>
<div class="title_info">
<p>1 Jan 2020 to 31 Dec 2020</p>
</div>
</div>
<div id="area_active"></div>
</div>
</div>
<div class="col-lg-4">
<div class="white_box mb_30 min_400">
<div class="box_header ">
<div class="main-title">
<h3 class="mb-0">Inventory Turnover</h3>
</div>

</div>
<div id="stackbar_active"></div>
</div>
</div>
</div>
</div>
</div>

<div class="footer_part">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="footer_iner text-center">
<p>2020 © Influence - Designed by <a href="main/firm/index.html#"> <i class="ti-heart"></i> </a><a href="main/firm/index.html#"> Dashboard</a></p>
</div>
</div>
</div>
</div>
</div>
</section>



<script src="main/firm/js/jquery-3.4.1.min.js"></script>

<script src="main/firm/js/popper.min.js"></script>

<script src="main/firm/js/bootstrap.min.js"></script>

<script src="main/firm/js/metisMenu.js"></script>

<script src="main/firm/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="main/firm/vendors/chartlist/Chart.min.js"></script>

<script src="main/firm/vendors/count_up/jquery.counterup.min.js"></script>

<script src="main/firm/vendors/swiper_slider/js/swiper.min.js"></script>

<script src="main/firm/vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="main/firm/vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="main/firm/vendors/gijgo/gijgo.min.js"></script>

<script src="main/firm/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="main/firm/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="main/firm/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="main/firm/vendors/datatable/js/jszip.min.js"></script>
<script src="main/firm/vendors/datatable/js/pdfmake.min.js"></script>
<script src="main/firm/vendors/datatable/js/vfs_fonts.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="main/firm/vendors/datatable/js/buttons.print.min.js"></script>
<script src="main/firm/js/chart.min.js"></script>

<script src="main/firm/vendors/progressbar/jquery.barfiller.js"></script>

<script src="main/firm/vendors/tagsinput/tagsinput.js"></script>

<script src="main/firm/vendors/text_editor/summernote-bs4.js"></script>
<script src="main/firm/vendors/apex_chart/apexcharts.js"></script>

<script src="main/firm/js/custom.js"></script>

<script src="main/firm/js/active_chart.js"></script>
<script src="main/firm/vendors/apex_chart/radial_active.js"></script>
<script src="main/firm/vendors/apex_chart/stackbar.js"></script>
<script src="main/firm/vendors/apex_chart/area_chart.js"></script>

<script src="main/firm/vendors/apex_chart/bar_active_1.js"></script>
<script src="main/firm/vendors/chartjs/chartjs_active.js"></script>

</body>
</html>