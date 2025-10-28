<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
#logo{
	background-image: url(img/index.5fa492e.jpeg);
	background-repeat: no-repeat;
	background-position: 50% 50%;
	position: relative;
/* 	background-size: 326px 47px;
	width: 411px;
        height: 205px;
	margin: 30px 0 0 0; */
	background-size: 333px 56px;
	width: 333px;
	width: 411px;
        height: 205px;
         0 0 0;
	float: left;
	opacity: 1;
	cursor: pointer;
	/* transition: opacity .5s; */
}

#banner{
	margin-top: 10px;
	background-color: #0d7ccc;
	border-radius: 10px;
	height: auto;
	width: 100%;
	position: relative;
	box-sizing: border-box;
	padding: 10px 10px 5px 10px;
	text-align: right;
}

.navbar-custom {
	background-color:#337ab7;
    color:#ffffff;
  	border-radius:0;
}
  
.navbar-custom .navbar-nav > li > a {
  	color:#fff;
}

.navbar-custom .navbar-nav > .active > a {
    color: #ffffff;
	background-color:transparent;
}
      
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > li > a:focus,
.navbar-custom .navbar-nav > .active > a:hover,
.navbar-custom .navbar-nav > .active > a:focus,
.navbar-custom .navbar-nav > .open >a {
    text-decoration: none;
    background-color: rgb(49, 112, 143);
}
     
.navbar-custom .navbar-brand {
  	color:#eeeeee;
}
.navbar-custom .navbar-toggle {
  	background-color:#eeeeee;
}
.navbar-custom .icon-bar {
  	background-color:#33aa33;
}
.brand-centered {
  display: flex;
  justify-content: center;
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
}
.navbar-brand {
  display: flex;
  align-items: center;
}#dashboard_full_width{
	width: 100%;
	height: auto;
	min-height: 300px;
	color: rgb(130, 130, 130);
	/* background-color: #911; */
}

#dashboard_left{
	width: 49%;
	height: auto;
	min-height: 200px;
	float: left;
	/* background-color: #599; */
}

#chartContainer{
	width: 49%;
	height: 200px;
	float: right;
	/* background-color: #959; */
}


</style>


<script type="text/javascript">
window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
        title: {
            text: "The Last 10 Days"
        },
        axisX: {
            title: "timeline",
            gridThickness: 2
        },
        axisY: {
            title: "Downloads"
        },
        data: [
            {
                type: "area",
                dataPoints: [//array

<?php
$ini_array = parse_ini_file("visitors.ini", true);
$Windows =  array_count_values(array_column($ini_array, 'xoperatingSystem'))['Windows'];
$MacOS = array_count_values(array_column($ini_array, 'xoperatingSystem'))['MacOS'];
$iPhone = array_count_values(array_column($ini_array, 'xoperatingSystem'))['iPhone'];
$iPad = array_count_values(array_column($ini_array, 'xoperatingSystem'))['iPad'];
$Android = array_count_values(array_column($ini_array, 'xoperatingSystem'))['Android'];
$iOS = array_count_values(array_column($ini_array, 'xoperatingSystem'))['iOS'];
$ChromeOS = array_count_values(array_column($ini_array, 'xoperatingSystem'))['ChromeOS'];
$BlackBerry = array_count_values(array_column($ini_array, 'xoperatingSystem'))['BlackBerry'];
$WindowsPhone = array_count_values(array_column($ini_array, 'xoperatingSystem'))['WindowsPhone'];
$Unknown = array_count_values(array_column($ini_array, 'xoperatingSystem'))['Unknown'];

$dataPoints = array(
    array("label" => "Windows", "y" => $Windows),
    array("label" => "MacOS", "y" => $MacOS),
    array("label" => "iPhone", "y" => $iPhone),
    array("label" => "iPad", "y" => $iPad),
    array("label" => "Android", "y" => $Android),
    array("label" => "iOS", "y" => $iOS),
    array("label" => "ChromeOS", "y" => $ChromeOS),
    array("label" => "BlackBerry", "y" => $BlackBerry),
    array("label" => "WindowsPhone", "y" => $WindowsPhone),
    array("label" => "Unknown", "y" => $Unknown)
);

foreach ($ini_array as $key => $item) {

    $userId = $item['dates'];

    $arr = explode("/", $item['dates']);
    $date_howmuch = array_count_values(array_column($ini_array, 'dates'))[$userId];
    $day = $arr[2];
    $month = $arr[1];
    $year = $arr[0];
    ?>

    { x: new Date(<?php echo $year; ?>, <?php echo $month; ?> - 1, <?php echo $day; ?>), y: <?php echo $date_howmuch; ?>},
<?php
}
?>
                ]
            }
        ]
    });

    chart.render();
    var chart = new CanvasJS.Chart("dashboard_left", {
        animationEnabled: true,
        theme: "light2",
        title: {
            text: "Visitor's Device"
        },
        axisY: {
            suffix: "%",
            scaleBreaks: {
                autoCalculate: true
            }
        },
        data: [{
            type: "column",
            yValueFormatString: "#,##0\"%\"",
            indexLabel: "{y}",
            indexLabelPlacement: "inside",
            indexLabelFontColor: "white",
            dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
        }]
    });
    chart.render();

}
</script>
<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>




</head>
<body>
<div id="dashboard_left">

</div>
<div id="chartContainer">
</div>

<table class="table table-striped">
    <thead>
    <tr>
        <th>ip</th>
        <th>Device</th>
        <th>platform</th>
        <th>browser</th>
        <th>DNS</th>
        <th>contry</th>
        <th>date</th>
        <th>times</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($ini_array as $key => $item) {
        echo '<tr>';
        echo '<td>' . $key . '</td>';
        echo '<td>' . $item['platformName'] . '</td>';
        echo '<td>' . $item['xoperatingSystem'] . '</td>';
        echo '<td>' . $item['browserName'] . '</td>';
        echo '<td>' . $item['dns'] . '</td>';
        echo '<td>' . $item['country'] . '</td>';
        echo '<td>' . $item['dates'] . '</td>';
        echo '<td>' . $item['times'] . '</td>';
        echo '</tr>';
    }
    ?>
    </tbody>
</table>
