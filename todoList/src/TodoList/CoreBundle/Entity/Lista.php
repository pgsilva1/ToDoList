<?php

namespace TodoList\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Lista
 *
 * @ORM\Table(name="lista")
 * @ORM\Entity(repositoryClass="TodoList\CoreBundle\Repository\ListaRepository")
 */
class Lista extends Timestampable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=255)
     * @Assert\NotBlank
     */
    private $categoria;

    /**
     * @var ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Tarefa", mappedBy="lista", cascade={"remove"})
     */
    private $tarefa;

    /**
     * Constructor
     */
    public function __construct()
    {
         parent::__construct();

        $this->tarefa = new ArrayCollection();
    }

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
     * Set categoria
     *
     * @param string $categoria
     * @return Lista
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Add tarefa
     *
     * @param \TodoList\CoreBundle\Entity\Tarefa $tarefa
     * @return Lista
     */
    public function addTarefa(\TodoList\CoreBundle\Entity\Tarefa $tarefa)
    {
        $this->tarefa[] = $tarefa;

        return $this;
    }

    /**
     * Remove tarefa
     *
     * @param \TodoList\CoreBundle\Entity\Tarefa $tarefa
     */
    public function removeTarefa(\TodoList\CoreBundle\Entity\Tarefa $tarefa)
    {
        $this->tarefa->removeElement($tarefa);
    }

    /**
     * Get tarefa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTarefa()
    {
        return $this->tarefa;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getCategoria();
    }
}
