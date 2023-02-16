<?php
	abstract class figura{
		private $tipo;
		private $a; //area
		private $p; //perimetro
		
		public static function get_form(){
			$html = '
			<form name="figuras" method="GET" action="" >
			<table border=0 align="center">
				<tr>
					<th colspan="2">INGRESO DATOS DE LA FIGURA</th>
				</tr>
				<tr>
					<td>Tipo: </td>
					<td>
						<select name="tipo" OnChange=>
							<option value="sel">Seleccione...</option>
							<option value="cuadrado">Cuadrado</option>
							<option value="rectangulo">Rectángulo</option>
							<option value="triangulo">Triángulo</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Lado 1:</td>
					<td><input type="text" name="lado1" id="lado1" size="4"></td>
				</tr>
				<tr>
					<td>Lado 2:</td>
					<td><input type="text" name="lado2" id="lado2" size="4"></td>
				</tr>
				<tr>
					<td>Lado 3:</td>
					<td><input type="text" name="lado3" id="lado3" size="4"></td>
				</tr>	
				<!--					
				<tr>
					<th colspan="2"><input type="submit" name="calcular" value="Calcular"></th>
				</tr>
				--!>	
			</table>
			</form>
			'
			
			;
			return $html;
		}
		
		// METODOS ABSTRACTOS	
		public abstract function GetArea();
	    
	    
	    public abstract function GetPerimetro();
	    
	    
	    public abstract function GetTipo();
	}
?>
