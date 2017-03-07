<?php

namespace TodoList\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* Timestampable abstract class
* @ORM\MappedSuperclass
*/
abstract class Timestampable
{
   /**
    * @var \DateTime
    *
    * @ORM\Column(name="criado_em", type="datetime")
    * @Assert\NotBlank(message="Sem data de Criação")
    */
   private $criadoEm;

   /**
    * @var \DateTime
    *
    * @ORM\Column(name="atualizado_em", type="datetime")
    * @Assert\NotBlank(message="Sem data de Atualização")
    */
   private $atualizadoEm;

   /**
    * Construct
    */
   public function __construct()
   {
       $this->criadoEm = new \DateTime();
       $this->atualizadoEm = new \DateTime();
   }

   /**
    * Set criadoEm
    *
    * @param $criadoEm
    */
   public function setCriadoEm($criadoEm)
   {
       $this->criadoEm = $criadoEm;
   }

   /**
    * Get CriadoEm
    *
    * @return \DateTime
    */
   public function getCriadoEm()
   {
       return $this->criadoEm;
   }

   /**
    * Set AtualizadoEm
    *
    * @param \DateTime $atualizadoEm
    */
   public function setAtualizadoEm($atualizadoEm)
   {
       $this->atualizadoEm = $atualizadoEm;
   }
   /**
    * Get UpdateAt
    *
    * @return \DateTime
    */
   public function getAtualizadoEm()
   {
       return $this->atualizadoEm;
   }
}
