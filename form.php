<!DOCTYPE html>
<!-- PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<html xmlns = "http://www.w3.org/1999/xhtml">
	<head>
		<!--<meta http-equiv = "Content-Type" content = "text/html;" charset = "utf-8;" />-->
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" charset = "utf-8;" />
		<title>SISTEMA DE CONTROL - Ingreso de Datos</title>
		<link   rel = "stylesheet" type = "text/css" href = "_css/css.css" />
		<script src = "_inc/jquery/jquery-1.12.4.min.js"></script>
		<link   rel = "stylesheet" type = "text/css" href = "_inc/tcal/tcal.css" />
		<script type = "text/javascript" src = "_inc/tcal/tcal.js"></script> 
	</head>
	<body>
		<div id = "contenedor1">
			<div id = "contenedor2">
				<h3 align = "center">SISTEMA DE CONTROL</h3>
			</div>
			<div id = "contenedor3">
				<div id = "cuadroformusu">
					<form method = "post" enctype = "multipart/form-data" id = "form2" name = "form2" action = "index.php" accept-charset = "UTF-8" >
						<table id = "tableformulario" align = "center">
							<tr><td>&nbsp;</td></tr>
							<tr valign = "baseline">
								<td align = "left">
									<label>Iniciador</label>
								</td>
								<td align = "left">
									<input 
										name        = "vinicia" 
										id          = "vinicia" 
										type        = "text" 
										maxlength   = "50" 
										size        = "50" 
										placeholder = "Iniciador"
										>
								</td>
							</tr>
							<tr valign = "baseline">
								<td align = "left">
									<label>Fecha</label>
								</td>
								<td align = "left">
									<input 
										readonly = "readonly" 
										name     = "vfecha" 
										type     = "text" 
										id       = "vfecha" 
										class    = "tcal" 
										size     = "10"
										>
								</td>
							</tr>
							<tr valign = "baseline">
								<td align = "left">
									<label>Hora</label>
								</td>
								<td align = "left">
									<input 
										name        = "vhora" 
										id          = "vhora" 
										type        = "text" 
										maxlength   = "8" 
										size        = "8" 
										placeholder = "Hora" 
										>
								</td>
							</tr>
							<tr valign = "baseline">
								<td align = "left" valign = "top">
									<label>Participantes</label>
								</td>
								<td align = "left">
									<textarea 
										name = "vparticipan" 
										id   = "vparticipan" 
										cols = "40" 
										rows = "4"
										></textarea>
								</td>
							</tr>
							<tr></tr>
							<tr valign = "baseline">
								<td align = "center" colspan = "2">
									<button 
										class   = "button" 
										role    = "button" 
										onclick = "submit()"
										>Enviar</button>
								</td>
							</tr>
						</table>
						<input 
							type  = "hidden" 
							name  = "MM_insert" 
							id    = "MM_insert" 
							value = "form2"
							>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
