<?php
/**
 * Produto
 * 
 * @Entity
 * @Table(name="produto")
 */
class Produto
{
    /**
     * @Id
     * @Column(type="integer", name="idProduto")
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @Column(type="string", name="nomeProduto")
     */
    protected $nome;
    

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}