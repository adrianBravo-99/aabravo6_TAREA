<?php
class triangulo extends figura implements formulas{
    private $lado1;
    private $lado2;
    private $lado3;

    // Definir el constructor del cuadrado
    public function __construct($lado1, $lado2, $lado3) {
        $this->lado1 = $lado1;
        $this->lado2 = $lado2;
        $this->lado3 = $lado3;
    }

    function area() {
        // Calcular el semiperímetro del triángulo
        $s = ($this->lado1 + $this->lado2 + $this->lado3) / 2;
        
        // Calcular el área del triángulo utilizando la fórmula de Herón
        $area = sqrt($s * ($s - $this->lado1) * ($s - $this->lado2) * ($s - $this->lado3));
        
        // Retornar el área del triángulo
        return $area;
    }


    // Implementar el método "perimetro" de la interfaz "formulas"
    public function perimetro() {
        return 2 * ($this->lado1 + $this->lado2 + $this->lado3);
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

