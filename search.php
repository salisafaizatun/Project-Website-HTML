<!doctype html>
 
 
<html lang="en"> 
   <head>
      <meta charset="utf-8">
      <title>Judul Halaman Saya</title>
	  <style type="text/css">
		form {
			width:500px;
			margin:50px auto;
		}
		.search {
			padding:8px 15px;
			background:rgba(50, 50, 50, 0.2);
			border:0px solid #dbdbdb;
		}
		.button {
			position:relative;
			padding:6px 15px;
			left:-8px;
			border:2px solid #53bd84;
			background-color:#53bd84;
			color:#fafafa;
		}
		.button:hover  {
			background-color:#fafafa;
			color:#207cca;
		}
				  
		::-webkit-input-placeholder { /* For WebKit browsers */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		:-moz-placeholder { /* For Mozilla Firefox 4 to 18 */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		::-moz-placeholder { /* For Mozilla Firefox 19+ */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}
		:-ms-input-placeholder { /* For Internet Explorer 10+ */
			color:    #dd3333;
						font-family:Helvetica Neue;
						font-weight:bold;
		}	  
	</style>
   </head>
<body>
<form>
    <input class="search" type="text" placeholder="Cari..." required>
    <input class="button" type="button" value="Cari">		
</form>
</body>
</html> 