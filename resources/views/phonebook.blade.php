<!DOCTYPE html>
<html>
<head>
	<title>Phonebook</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">

    	<Myheader></Myheader>

    	<div class="container">
    		<router-view></router-view>
    	</div>
    	
    	    
    	<Myfooter></Myfooter>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>
