<?php
namespace app\entity;

class Vaga{

    /**
     * @var integer
     */
    public $id;
    /**
     * @var string
     */
    public $titulo;
    /**
     * @var string
     */
    public $descricao;
    /**
     * @var string(s/n)
     */
    public $ativo;

    /**
     * @var string
     */
    public $data;
}