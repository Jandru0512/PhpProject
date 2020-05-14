<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Comentarios")
 */
class Comentario
{
  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="Id")
   */
  protected $id;

  /**
   * @ORM\Column(name="Comentario")
   */
  protected $comentario;

  /**
   * @ManyToOne(targetEntity="Comentarios")
   * @JoinColumn(name="Comentario_Id", referencedColumnName="Id")
   */
  protected $comentarioId;

  /**
   * @ManyToOne(targetEntity="Imagenes")
   * @JoinColumn(name="Imagen_Id", referencedColumnName="Id")
   */
  protected $imagenId;

  /**
   * @ManyToOne(targetEntity="Albumes")
   * @JoinColumn(name="Album_Id", referencedColumnName="Id")
   */
  protected $albumId;

  /**
   * @ManyToOne(targetEntity="Usuarios")
   * @JoinColumn(name="Usuario_Id", referencedColumnName="Id")
   */
  protected $usuarioId;

  /**
   * @ManyToOne(targetEntity="Ubicacion_Comentarios")
   * @JoinColumn(name="Ubicacion_Comentario_Id", referencedColumnName="Id")
   */
  protected $ubicacionComentarioId;

  /**
   * @ORM\Column(name="Fecha_Creacion")
   */
  protected $dateCreated;
}
