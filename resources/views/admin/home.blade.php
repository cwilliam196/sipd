@extends('layout.adminMain')

@section('title', 'Home Admin')

@section('container')
<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-4 four-grid">
						<div class="four-agileits">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Data Masuk Request Dinas</h3>
								<h4>{{$data_masuk}}</h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Data Diproses</h3>
								<h4> {{$data_proses}} </h4>
							</div>
						</div>
					</div>
					<div class="col-md-4 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Total Data Request dan Selesai</h3>
								<h4> {{$total_data}} </h4>

							</div>

						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
<!--agileinfo-grap-->
<div class="agileinfo-grap">
    <div class="agileits-box">
        <header class="agileits-box-header clearfix">
            <h3>Statistics All Requested Data</h3>
            <div class="toolbar">
                <div class="pull-left">
                    <div class="btn-group">
                        <a href="#" class="btn btn-default btn-xs">Daily</a>
                        <a href="#" class="btn btn-default btn-xs active">Monthly</a>
                        <a href="#" class="btn btn-default btn-xs">Yearly</a>
                    </div>
                </div>
                <div class="pull-right">
                    <div class="btn-group">
                        <a aria-expanded="false" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                        Export <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                        <li><a href="#">Export as PDF</a></li>
                        <li><a href="#">Export as CSV</a></li>
                        <li><a href="#">Export as PNG</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-cog"></i></a>
                </div>
            </div>
        </header>
        <div class="agileits-box-body clearfix">
            <div id="hero-area"></div>
        </div>
    </div>
</div>
	<!--//agileinfo-grap-->

@endsection

@section('footer')
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });

	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}

		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2020 Q1', dataRequest: null, dataProses: null, totalData: null},
				{period: '2020 Q2', dataRequest: {{$data_masuk}},totalData: {{$total_data}}, dataProses: {{$data_proses}}}
			],
			lineColors:['#a2d200','#ff4a43','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['totalData','dataRequest', 'dataProses' ],
            labels: ['Total Data Request', 'Data Request', 'Data Diproses'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});


	});
	</script>
@endsection
