<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Imagenes")
 */
class Imagen
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="Id")
   */
  protected $id;

  /**
   * @ORM\Column(name="Foto")
   */
  protected $foto;

  /**
   * @ORM\Column(name="Descripcion")
   */
  protected $descripcion;

  /**
   * @ORM\Column(name="Titulo")
   */
  protected $titulo;

  /**
   * @ORM\Column(name="Fecha_Creacion")
   */
  protected $dateCreated;
}
