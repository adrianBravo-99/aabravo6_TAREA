<?php
class rectangulo extends figura implements formulas{
    private $lado1;
    private $lado2;

    // Definir el constructor del cuadrado
    public function __construct($lado1, $lado2) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
    }

    // Implementar el método "area" de la interfaz "formulas"
    public function area() {
        return $this->lado1 * $this->lado2;
    }

    // Implementar el método "perimetro" de la interfaz "formulas"
    public function perimetro() {
        return 2 * ($this->lado1 + $this->lado2);
    }


    public function GetArea() {
        return $this->area();
    }

    public function GetPerimetro() {
        return $this->perimetro();
    }

    public function GetTipo() {
        return "Rectangulo";
    }
}
?>
