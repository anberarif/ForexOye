<!DOCTYPE html>
<html>
<head>
<title>ForexOye</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script> 

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro:wght@450">

</head>
<body>
<section id="navbar">

<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><h1><b>ForexOye</b></h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  	
    <i class="fa fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav text-center ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">SERVICES</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT US</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">BLOGS</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">CONTACT</a>
      </li>


    </ul>

    <ul class="nav navbar-nav navbar-right ml-auto">
    	<li><a href="#"><span class="glyphicon glyphicon-user"></span>Sign Up
    	</a>
		</li>

		<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Login
		</a>
    	
		</li>
    </ul>
    
  </div>
</nav>
</section>


<!------------------- banner section------------->

<section id="banner">
<div class="container">
<div class="row">
<div class="col-md-6">

<p class="promo-title"> Trade With ForexOye</p>
<p>We keep your costs down with competitive spreads and quality trade executions.</p>
<button type="button" class="btn btn-primary">Click To See Our Blogs</button>
</div>

<div class="col-md-6 text-center">
<img src="Images/testing.png" class="img-fluid">
	
</div>
</div>
</div>

</section>

<!-----------------Services Section------------->

<section id="services">
<div class="container text-center">
<h1 class="title">WHAT WE DO?</h1>
<div class="row text-center">
<div class="col-md-4 services">
<img src="Images/service1.jpg" class="service-img">
<h4> Global Markets</h4>
<p>Access 4500+ markets including FX pairs, cryptos, shares, commodities and metals</p>
</div>

<div class="col-md-4 services">
<img src="Images/service.jpg" class="service-img">
<h4> Integrated Trade Ideas</h4>
<p>Premium third-party trader resources provided by Trading Central</p>
</div>

<div class="col-md-4 services">
<img src="Images/service2.jpg" class="service-img">
<h4> Powerful Platforms</h4>
<p>Trade Standard and Commission Accounts on advanced platforms</p>
</div>


</div>
</div>
</div>
</section>


<!------------- Benefits--------------->

<section id="benefits">
<div class="container text-center">
<h1 class="title">BENEFITS</h1>
<div class="row text-center">
<div class="col-md-4 benefits">
<img src="Images/benefit1.jpg" class="benefits-img">
<p> Maximum value & reliability</p>
</div>

<div class="col-md-4 services">
<img src="Images/benefit2.jpg" class="benefits-img">
<p>Superior trade executions</p>
</div>

<div class="col-md-4 services">
<img src="Images/benefit3.jpg" class="benefits-img">
<p> Financial strength and security</p>
</div>

<div class="col-md-4 services">
<img src="Images/benefit4.jpg" class="benefits-img">
<p>Professional guidance & support</p>
</div>

<div class="col-md-4 services">
<img src="Images/benefit5.jpg" class="benefits-img">
<p> Strong regulatory framework</p>
</div>

<div class="col-md-4 services">
<img src="Images/benefit6.jpg" class="benefits-img">
<p> Sophisticated trader tools</p>
</div>
</div>
</div>
</div>
</section>

<!------ About Us------->
<section id="about-us">
<div class="container">
<h1 class="title text-center">WHY CHOOSE US?</h1>
<div class="row">
<div class="col-md-6 about-us">
<p class="about-title">Why We're Different</p>
<ul>
	<li>We understand business goal first</li>
	<li>We believe in Doing Business With Honesty</li>
	<li>We deliver on time</li>
	<li>We protect your online reputation</li>
	<li>We provide you the best trading services</li>
	<li>We create a winning strategy</li>
</ul>	
</div>

<div class="col-md-6">
<img src="Images/about.jpg" class="img-fluid">
</div>
</div>	
</section>

<!-----------Exchange Rate Calculator------------>
<section id="calculator">
<div class="container">
<h1 class="title text-center">Exchange Rate Calculator</h1>
<p>Choose the currency and the amounts to get exchange rates.</p>

<div class="container">
	<div class="currency">
		<select id="currency-one">
		<option value="PKR">PKR</option>
		<option value="ARS">ARS</option>
		<option value="AUD">AUD</option>
		<option value="BGN">BGN</option>
		<option value="BRL">BRL</option>
		<option value="BSD">BSD</option>
		<option value="CAD">CAD</option>
		<option value="CHF">CHF</option>
		<option value="CLP">CLP</option>
		<option value="USD" selected>USD</option>
		</select>
		<input type="number" id="amount-one" placeholder="0" value="1">
		</div>
	<div class="swap-rate-container">
	<button class="btn" id="swap">Swap</button>
	<div class="rate" id="rate"></div>
	</div>


	<div class="container">
	<div class="currency">
		<select id="currency-two">
		<option value="PKR"selected>PKR</option>
		<option value="ARS">ARS</option>
		<option value="AUD">AUD</option>
		<option value="BGN">BGN</option>
		<option value="BRL">BRL</option>
		<option value="BSD">BSD</option>
		<option value="CAD">CAD</option>
		<option value="CHF">CHF</option>
		<option value="CLP">CLP</option>
		<option value="USD">USD</option>
		</select>
		<input type="number" id="amount-two"/>
		</div>
	
		





</div>




<!--------Currency Rates------------>

<section id="about-us">
<h1 class="title text-center">Live Currency Rates</h1>
<div class="container p-30">
	<div class="row">
		<div class="col-md-12 main-datatable">
			<div class="card_body">
				<div class="row d-flex">
					
					<div class="col-sm-8 add_flex">
						<div class="form-group searchInput">
						<label for="email">Search</label>
						<input type="search" class="form-control" id="fiterbox" placeholder="">
						</div>
					</div>
			</div>

			<div class="overflow-x">
				<table style="width:100;" id="filtertable" class="table cust-datatable dataTable no-footer">
					<thead>
						<tr>
							<th style="min-width: 50px;">ID</th>
							<th style="min-width: 150px;">Currency</th>
							<th style="min-width: 150px;">Rate</th>
							<th style="min-width: 100px;">Change</th>
							

						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Dummy</td>
							<td><span class="mode mode_process">EUR/USD</span></td>
							<td>
							<div class="btn-group">
									<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" target="_blank">Dummy Details</a>
										</li>
										
									</ul>
								</div>
							</td>
						</tr>
							

<!------------2nd row-------------------->
<tr>
<td>2</td>
							<td>Dummy</td>
							<td><span class="mode mode_process">GBP/EUR</span></td>
							<td>
							<div class="btn-group">
									<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" target="_blank">Dummy Details</a>
										</li>
										
									</ul>
								</div>
							</td>

</tr>

<!---------3rd row------------------>
<tr>
<td>3</td>
							<td>Dummy</td>
							<td><span class="mode mode_process">USD/JPY</span></td>
							<td>
							<div class="btn-group">
									<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" target="_blank">Dummy Details</a>
										</li>
										
									</ul>
								</div>
							</td>
						</tr>
<!---------4rd row------------->
<tr>

<td>4</td>
							<td>Dummy</td>
							<td><span class="mode mode_process">USD/PKR</span></td>
							<td>
							<div class="btn-group">
									<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" target="_blank">Dummy Details</a>
										</li>
										
									</ul>
								</div>
							</td>
						</tr>

<!--------------5th row---------------->
<tr>

<td>5</td>
							<td>Dummy</td>
							<td><span class="mode mode_process">USD/AUD</span></td>
							<td>
							<div class="btn-group">
									<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" target="_blank">Dummy Details</a>
										</li>
										
									</ul>
								</div>
							</td>


						</tr>


<!--------6th row---------->
<tr>

<td>5</td>
							<td>Dummy</td>
							<td><span class="mode mode_process">USD/AUD</span></td>
							<td>
							<div class="btn-group">
									<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" target="_blank">Dummy Details</a>
										</li>
										
									</ul>
								</div>
							</td>


						</tr>

<!--------7th row---------->
<tr>

<td>5</td>
							<td>Dummy</td>
							<td><span class="mode mode_process">USD/AUD</span></td>
							<td>
							<div class="btn-group">
									<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" target="_blank">Dummy Details</a>
										</li>
										
									</ul>
								</div>
							</td>


						</tr>
<!---------8th row--------->
<tr>

<td>5</td>
							<td>Dummy</td>
							<td><span class="mode mode_process">USD/AUD</span></td>
							<td>
							<div class="btn-group">
									<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown">
									<i class="fa fa-pencil-square-o"></i></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#" target="_blank">Dummy Details</a>
										</li>
										
									</ul>
								</div>
							</td>


						</tr>



					</tbody>
				</table>
		</div>

	</div>
</div>

</section>

<!------------Currency Information---------->
<section id="currency-info">
<div class="container">
<h1 class="title text-center">Currency Information</h1>
<div class="row justify content-center">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">CHF - Swiss Franc</h5>
        <p class="card-text text-left">Our currency rankings show that the most popular Swiss Franc exchange rate is the CHF to EUR rate. The currency code for Swiss Francs is CHF. The currency symbol is CHF.</p>
        <a href="#" class="btn btn-primary">More Swiss Franc Info</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">INR - Indian Rupee</h5>
        <p class="card-text text-left">Our currency rankings show that the most popular Indian Rupee exchange rate is the INR to USD rate. The currency code for Indian Rupees is INR. The currency symbol is ???.</p>
        <a href="#" class="btn btn-primary">More Indian Rupee Info</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
  <!--------------->
<section id="currency-info1">
<div class="container" style="margin-top: 20px">
<div class="row justify content-center">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">INR - Indian Rupee</h5>
        <p class="card-text text-left">Our currency rankings show that the most popular Indian Rupee exchange rate is the INR to USD rate. The currency code for Indian Rupees is INR. The currency symbol is ???.</p>
        <a href="#" class="btn btn-primary">More Indian Rupee Info</a>
      </div>
    </div>
  </div>

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">INR - Indian Rupee</h5>
        <p class="card-text text-left">Our currency rankings show that the most popular Indian Rupee exchange rate is the INR to USD rate. The currency code for Indian Rupees is INR. The currency symbol is ???.</p>
        <a href="#" class="btn btn-primary">More Indian Rupee Info</a>
      </div>
    </div>
  </div>

</div>
</div>
</div>
</section>







<!---------------------------------php code---------------------------->




<?php 
$api_base_url = "https://dev-api.sarmaaya.pk/3.0/";
function API_CALL(array $param)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $GLOBALS['api_base_url']."/".$param['apiName'].".php");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,$param['apiMethod']);
    curl_setopt($ch, CURLOPT_POSTFIELDS,$param);
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    $result = json_decode(curl_exec($ch));
    curl_close($ch);
    return $result;
}   
$forex_item =  API_CALL
            (
                array
                ( 
                    'apiName'       => 'all_forexdetails', 
                    'apiMethod'     => 'POST'  
                )
            );   

$api_status = $forex_item->status;
if($api_status == 'success'){
    $api_data = $forex_item->data;
}
else{
    $api_data = NULL;
} 
if($api_data){
?>
<table class="table cust-datatable dataTable no-footer">
    <thead>
        <tr>
            <th>Symbol</th>
            <th>Current Price</th>
            <th>Max High Value</th>
            <th>Min Low Value</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        foreach($api_data as $data_row){
        ?>
        <tr>
            <td><?php echo $data_row->symbol; ?></td>
            <td><?php echo number_format($data_row->current,2); ?></td>
            <td><?php echo $data_row->high; ?></td>
            <td><?php echo $data_row->low; ?></td>


        </tr>
        <?php } ?>
    </tbody>
</table>
<?php } ?>

<!----Charts------------->
<?php 
  
$forex_item =  API_CALL
            (
                array
                ( 
                    'apiName'       => 'forex_price_data', 
                    'apiMethod'     => 'POST',  
                    'symbol'     => 'USD', 
                    'range'     => '3m' 
                )
            );   

$api_status = $forex_item->status;
if($api_status == 'success'){
    $api_data = $forex_item->data;
}
else{
    $api_data = NULL;
}

foreach ($api_data as $dataR) {
	$labels[] = $dataR->update_time;
	$data[]   = $dataR->close;
}

$labels = '"' . implode ( '", "', $labels ) . '"';
$data   = implode(', ', $data);

?>
<section id="currency-info" style="margin-top: 20px">
<div class="container" style="width: 85%">
<h1 class="title text-center">Currency Charts</h1>
<div>
	<canvas id="myChart"></canvas>
</div>

<script>
  var ctx = document.getElementById('myChart').getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'line', 
      data: {
        labels: [<?php echo $labels; ?>],
        datasets: [{ 
            data: [<?php echo $data; ?>], 
            borderColor: "#3e95cd",
            backgroundColor: "#7bb6dd",
            fill: false,
            legend: false,
          }
        ]
      },
      options: {
		    legend: {
		    	display: false
		    } 
		  }
    });
</script>

</div>
</section>


<!-------------footer section------------------------------>
<section id="footer">
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<p>
				Subscribe and press the bell icon to get the notifications.
			</p>
		</div>

		<div class="col-md-4 footer-box">
			<p><b>CONTACT US</b></p>
			<p>W</p>
		</div>
	</div>
</div>
</section>

</body>
</html>
