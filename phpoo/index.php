<?php
    require ("pessoa.php");
    require ("retangulo.php");
    class fruta
    {
        //Atributos
        public $nome;
        public $cor;

        //Métodos
        function __construct($nome, $cor)
        {
            $this->nome = $nome;
            $this->cor = $cor;
        }
        function set_name($nome)
        {
            $this->nome = $nome;
        }
        function get_name()
        {
            return $this->nome;
        }
        function set_cor($cor)
        {
            $this->cor = $cor;
        }
        function get_cor()
        {
            return $this->cor;
        }
    }
    //Criando um objeto
    $maca = new fruta("maca_ifsp", "vermelho");
    $banana = new fruta("banana_ifps", "amarelo");

    echo $maca->get_name();
    echo "<br>".$banana->get_name();

    $aluno1 = new pessoa("Lucas", 18, "Aluno");
    echo $aluno1->apresentar();

    $quadrado = new retangulo(2, 4)
    echo $quadrado->calcular_area();
    echo $quadrado->calcular_perimetro();
?>