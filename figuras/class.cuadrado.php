<?php
class cuadrado extends figura implements formulas {
	private $lado; // Definir la propiedad para el lado del cuadrado

    // Definir el constructor del cuadrado
    public function __construct($lado) {
        $this->lado = $lado;
    }

    // Implementar el método "area" de la interfaz "formulas"
    public function area() {
        return pow($this->lado, 2);
    }

    // Implementar el método "perimetro" de la interfaz "formulas"
    public function perimetro() {
        return 4 * $this->lado;
    }


    public function GetArea() {
        return $this->area();
    }

    public function GetPerimetro() {
        return $this->perimetro();
    }

    public function GetTipo() {
        return "Cuadrado";
    }
}
?>
