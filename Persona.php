
<?php
class Persona
{
    private $nombre;
    private $apellido;
    private $altura;
    private $edad;

    function __construct($nombre,$apellido,$altura,$edad)
    {
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->altura=$altura;
        $this->edad=$edad;
    }
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * Get the value of altura
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * Set the value of altura
     *
     * @return  self
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    //FUNCIONES
    public function hablar($persona){
        return print("Soy ".$persona->getNombre()." y estoy hablando");
    }
    public function caminar($persona){
        return print("Soy ".$persona->getNombre()." y estoy caminando");
    }
}
