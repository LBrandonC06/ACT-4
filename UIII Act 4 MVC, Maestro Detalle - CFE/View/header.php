<!DOCTYPE html>
<html lang="es">
	<head>
		<title>SABRITAS</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        <link rel="stylesheet" href="assets/js/jquery-ui/jquery-ui.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="assets/css/demo.css">
	      <link rel="stylesheet" href="assets/css/footer-distributed.css">
				<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">  
        <style>
          :root{
          --principal: lightgray;
          --secundario: #3D8361;
          --tercero: #061b17;
          --cuarto: #375a54;
          --quinto: #EEF2E6;
            }

            header{
                height: 20px;
                background-color: var(--principal);
                color: white;
                padding-top: 35px;
                margin-bottom: 10px ;
            }
            header h1{
                font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
                font-size: 45px;
                padding-left: 10px;
                justify-content: flex-end;
            }
            nav{
                height: 30px;
                width: auto;
                background-color: var(--principal) ;
                display: flex;
                flex-direction:row;   
                justify-content: flex-end; 
                /* justify-content: space-around;  */
                align-items: center;
            }
            nav a{
              margin-bottom: 15px;
                font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                font-size: 30px;
                color: black;
                text-decoration:none;
                padding: 25px;
            }
            nav a:hover{
                color: var(--secundario);
            }

        </style>      
	</head>
    <body>
    <header>
        <nav>
            <a href="index.php">Vendedores</a>
            <a href="index.php?c=producto">Productos</a>
        </nav>
        <center>
        <hr style="width: 80%; height:5px;  background-color: gray;">
        </center>
    </header>
    <br>


    <div class="container">
