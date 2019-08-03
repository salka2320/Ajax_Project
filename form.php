<!doctype html>
<html>
<head>
<link rel="stylesheet" href="formstyle.css" />
<script src="formscript.js"></script>
</head>
<body>
<div id="form-div">
<h1>Application Form</h1>
<form action="#" method="post">
<div>
<label>Name</label>
<input type="text" name="username"/>
</div>
<div>
<label>Select State</label>  
<select onchange="fetchCities(this.value)">
<option>Select State</option>
<option>Uttar Pradesh</option>
<option>Bihar</option>
<option>Madhya Pradesh</option>
</select>
</div>
<div>
<label>Select city</label>
<select id="cities">
<option>First Select State</option>

</select>
</div>

<div>
<input type="submit" value="submit" />
</div>

</form>
</div>
</body>
</html>