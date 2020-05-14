<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Ubicacion_Comentarios")
 */
class UbicacionComentario
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="Id")
   */
  protected $id;

  /**
   * @ORM\Column(name="Ubicacion")
   */
  protected $ubicacion;
  
  /**
   * @ORM\Column(name="Fecha_Creacion")
   */
  protected $dateCreated;
}
