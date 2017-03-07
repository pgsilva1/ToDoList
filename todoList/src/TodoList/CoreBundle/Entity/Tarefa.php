<?php

namespace TodoList\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Tarefa
 *
 * @ORM\Table(name="tarefa")
 * @ORM\Entity(repositoryClass="TodoList\CoreBundle\Repository\TarefaRepository")
 */
class Tarefa extends Timestampable
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
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text")
     * @Assert\NotBlank(message="Campo Descrição Vazio")
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text")
     * @Assert\NotBlank(message="Campo observacao Vazio")
     */
    private $observacao;

    /**
     * @var bool
     *
     * @ORM\Column(name="situacao", type="boolean")
     */
    private $situacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pz_conclusao", type="datetime")
     */
    private $pzconclusao;

    /**
     * @var Lista
     *
     * @ORM\ManyToOne(targetEntity="Lista", inversedBy="tarefas")
     * @ORM\JoinColumn(name="lista_id", referencedColumnName="id", nullable=false, onDelete="CASCADE")
     * @Assert\NotBlank
     */
    private $lista;

    /**
     * Construct
     */
     public function __construct()
     {
        $this->pzconclusao = new \DateTime('+1 week');
        parent::__construct();
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
     * Set titulo
     *
     * @param string $titulo
     * @return Tarefa
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Tarefa
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return Tarefa
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string
     */
    public function getObservacao()
    {
        return $this->observacao;
    }

    /**
     * Set situacao
     *
     * @param boolean $situacao
     * @return Tarefa
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;

        return $this;
    }

    /**
     * Get situacao
     *
     * @return boolean
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * Set pzconclusao
     *
     * @param \DateTime $pzconclusao
     * @return Tarefa
     */
    public function setPzconclusao($pzconclusao)
    {
        $this->pzconclusao = $pzconclusao;

        return $this;
    }

    /**
     * Get pzconclusao
     *
     * @return \DateTime
     */
    public function getPzconclusao()
    {
        return $this->pzconclusao;
    }


    /**
     * Set lista
     *
     * @param \TodoList\CoreBundle\Entity\Lista $lista
     * @return Tarefa
     */
    public function setLista(\TodoList\CoreBundle\Entity\Lista $lista)
    {
        $this->lista = $lista;

        return $this;
    }

    /**
     * Get lista
     *
     * @return \TodoList\CoreBundle\Entity\Lista
     */
    public function getLista()
    {
        return $this->lista;
    }
}
