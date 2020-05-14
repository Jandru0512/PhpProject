<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Albumes")
 */
class Album
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="Id")
   */
  protected $id;

  /**
   * @ORM\Column(name="Nombre")
   */
  protected $nombre;

  /**
   * @ORM\Column(name="Descripcion")
   */
  protected $descripcion;

  /**
   * @ManyToOne(targetEntity="Usuarios")
   * @JoinColumn(name="Usuario_Id", referencedColumnName="Id")
   */
  protected $usuarioId;

  /**
   * @ORM\Column(name="Fecha_Creacion")
   */
  protected $dateCreated;
}
