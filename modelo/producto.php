<?php 



/**
 * 
 */
class Productos
{

	private $id;
	private $nombre;
	private $precio;
	private $unidades;
    private $conexion;


    function __construct(){

       $this->conexion=Conectar::Conexion();
    } 




    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     *
     * @return self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * @param mixed $precio
     *
     * @return self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnidades()
    {
        return $this->unidades;
    }

    /**
     * @param mixed $unidades
     *
     * @return self
     */
    public function setUnidades($unidades)
    {
        $this->unidades = $unidades;

        return $this;
    }



    public function Listar(){

        $sql=$this->conexion->query("SELECT * FROM productos ORDER BY id DESC");

        return $sql;
    }





   public function Insertar(){
    

    $sql="INSERT INTO productos VALUES (NULL,'{$this->getNombre()}',

     {$this->getPrecio()},{$this->getUnidades()})";



     $insertar=$this->conexion->query($sql);

     return $insertar;

   } 



 public function Edicion(){
  $sql=$this->conexion->query("SELECT * FROM productos WHERE id={$this->getId()}");
  return $sql->fetch_object();

 }




 public function Modificar(){

    $sql="UPDATE productos SET nombre='{$this->getNombre()}',precio={$this->getPrecio()},unidades={$this->getUnidades()} WHERE id={$this->id}";

    $modificar=$this->conexion->query($sql);

    return $modificar;
 }



 public function Borrar(){

    $sql="DELETE FROM productos WHERE id = {$this->id}";


    $borrar=$this->conexion->query($sql);

    return $borrar;
 }





}










 ?>