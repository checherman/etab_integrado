<?php

namespace ISECH\IndicadoresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ISECH\IndicadoresBundle\Validator as CustomAssert;

/**
 * ISECH\IndicadoresBundle\Entity\MatrizSeguimientoMatriz
 *
 * @ORM\Table(name="matriz_seguimiento_matriz")
 * @ORM\Entity
 */
class MatrizSeguimientoMatriz
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     * @CustomAssert\OnlyAlphanumeric(message="OnlyAlphanumeric.Message")
     */
    private $nombre;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Set id
     *
     * @param  integer $id
     * @return MatrizSeguimientoMatriz
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }


    /**
     * Set nombre
     *
     * @param  string $nombre
     * @return MatrizSeguimientoMatriz
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param  string $descripcion
     * @return MatrizSeguimientoMatriz
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    public function __toString()
    {
        return $this->nombre ? : '';
    }

}
