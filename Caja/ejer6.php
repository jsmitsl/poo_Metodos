<?php

class Caja {
    //propiedades
    private float $ancho;
    private float $alto;
    private float $largo;

    /**
     * Summary of __construct
     * @param float $ancho
     * @param float $alto
     * @param float $largo
     */
    public function __construct(float $ancho, float $alto,float $largo) {
        $this->ancho = $ancho;
        $this->alto = $alto;
        $this->largo = $largo;
    }
    /**
     * Crea una nueva Caja con las mismas dimensiones que otra caja existente.
     * @param Caja $otraCaja
     * @return Caja
     */
    public static function copiarCaja(Caja $otraCaja): Caja {
        return new Caja($otraCaja->getAncho(), $otraCaja->getAlto(), $otraCaja->getLargo());
    }
    
    /** 
    * funcion para calcular el volumen de la caja
    * @return float
    */
    public function volumen(): float {
        return $this->ancho * $this->alto * $this->largo;
    }
    
    /**
    * Calcula el área total de la caja utilizando métodos privados.
    * @return float
    */
    public function areaTotal(): float {
        return 2 * ($this->areaFrontal() + $this->areaSuperior() + $this->areaLateral());
    }

    /**
    * Calcula el área de la cara frontal.
    * @return float
    */
    private function areaFrontal(): float {
        return $this->ancho * $this->alto;
    }

    /**
    * Calcula el área de la parte superior.
    * @return float
    */
    private function areaSuperior(): float {
        return $this->ancho * $this->largo;
    }

    /**
    * Calcula el área del lateral.
    * @return float
    */
    private function areaLateral(): float {
        return $this->alto * $this->largo;
    }   

    //geters y seters
    public function getAncho(): float {
        return $this->ancho;
    }
    public function setAncho(float $ancho): void {
        $this->ancho = $ancho;
    }
    public function getAlto(): float {
        return $this->alto;
    }
    public function setAlto(float $alto): void {
        $this->alto = $alto;
    }
    public function getLargo(): float {
        return $this->largo;
    }
    public function setLargo(float $largo): void {
        $this->largo = $largo;
    }
    
    /**
     * Crea una nueva Caja un 25% más grande que la actual.
     * @return Caja
     */
    public function cajaMasGrande(): Caja {
        return new Caja(
            $this->ancho * 1.25,
            $this->alto * 1.25,
            $this->largo * 1.25
        );
    }

    /**
     * Crea una nueva Caja un 25% más pequeña que la actual.
     * @return Caja
     */
    public function cajaMasPequena(): Caja {
        return new Caja(
            $this->ancho * 0.75,
            $this->alto * 0.75,
            $this->largo * 0.75
        );
    }
    /**
     * Devuelve una representación en cadena de la Caja.
     * @return string
     */
    public function __toString(): string {
        return "Caja [Ancho: {$this->ancho}, Alto: {$this->alto}, Largo: {$this->largo}]";
    }
}