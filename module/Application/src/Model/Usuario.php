<?php

namespace Application\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Usuarios")
 */
class Usuario
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
   * @ORM\Column(name="Cedula")
   */
  protected $cedula;

  /**
   * @ORM\Column(name="Nickname")
   */
  protected $nickname;

  /**
   * @ORM\Column(name="Avatar")
   */
  protected $avatar;

  /**
   * @ORM\Column(name="Fecha_Creacion")
   */
  protected $dateCreated;
}
