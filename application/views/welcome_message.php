<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

	input {
		width: 200px
	}

	</style>
</head>
<body>

<div id="container">
	<h1>Editable nana tanan. kana lang sa sample unya na tarungon tanan ug inyu na ipa integrate</h1>
	<code>kana number nga placeholder base na sya sa number nga naa sa inyu format document</code>
	<div id="body">
		<form method="post" accept-charset="utf-8" action="index.php/welcome/generate" />
			<input required type="text" name="_1_month_year" placeholder="1 mmyyyy" /></br>
			<input type="text" name="_2_yes" placeholder="2 mark if yes 'X'" /></br>
			<input type="text" name="_2_no" placeholder="2 mark if no 'X'" /></br>
			<input required type="text" name="_3_no_sheet" placeholder="3 no of sheet" /></br>
			<input type="text" name="_4_yes" placeholder="4 mark if yes 'X'" /></br>
			<input type="text" name="_4_no" placeholder="4 mark if no 'X'" /></br>
			<input required type="text" name="_5_tin" placeholder="5 input tin '000-000-000-00000'" /></br>
			<button required type="submit">Generate</button>
		</form>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>