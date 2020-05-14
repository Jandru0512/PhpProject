<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Albumes_Imagenes")
 */
class AlbumImagen
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="Id")
   */
  protected $id;

  /**
   * @ORM\Column(name="Numero_Orden")
   */
  protected $numeroOrden;

  /**
   * @ManyToOne(targetEntity="Albumes")
   * @JoinColumn(name="Album_Id", referencedColumnName="Id")
   */
  protected $albumId;

  /**
   * @ManyToOne(targetEntity="Imagenes")
   * @JoinColumn(name="Imagen_Id", referencedColumnName="Id")
   */
  protected $imagenId;

  /**
   * @ORM\Column(name="Fecha_Creacion")
   */
  protected $dateCreated;
}
