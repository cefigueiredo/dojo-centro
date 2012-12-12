<?php

include "batalha_naval.php";

class TestBatalhaNavalPosicionamento extends PHPUnit_Framework_TestCase {

    public function test_insere_horizontal(){
        $tabuleiro = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 1, 1, 1, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1,1), array(1,3));

        $this->assertSame($tabuleiro, $jogo->tabuleiro);
    }

    public function test_insere_horizontal_2(){
        $tabuleiro = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 1, 1, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1,2), array(1,3));

        $this->assertSame($tabuleiro, $jogo->tabuleiro);
    }

    public function test_insere_horizontal_3(){
        $tabuleiro = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 1, 1, 1, 1, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1,1), array(1,4));

        $this->assertSame($tabuleiro, $jogo->tabuleiro);
    }

    public function test_insere_horizontal_4(){
        $tabuleiro = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 1, 1, 1, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(2,1), array(2,3));

        $this->assertSame($tabuleiro, $jogo->tabuleiro);
    }

    public function test_insere_vertical(){
        $tabuleiro = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1,1), array(3,1));

        $this->assertSame($tabuleiro, $jogo->tabuleiro);
    }

    public function test_insere_vertical_1(){
        $tabuleiro = array(
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
            array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1,2), array(4,2));

        $this->assertSame($tabuleiro, $jogo->tabuleiro);
    }

    public function test_tiro_na_agua(){
        // $tabuleiro = array(
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        // );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1,2), array(4,2));

        $this->assertFalse($jogo->tiro(0,0));
    }
    public function test_tiro_acerto(){
        // $tabuleiro = array(
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        // );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1, 2), array(4, 2));

        $this->assertTrue($jogo->tiro(1, 2));
    }
}

class TestBatalhaNavalTiros extends PHPUnit_Framework_TestCase {
    public function test_tiro_na_agua(){
        // $tabuleiro = array(
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        // );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1,2), array(4,2));

        $this->assertFalse($jogo->tiro(0,0));
    }
    public function test_tiro_acerto(){
        // $tabuleiro = array(
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
        //     array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0)
        // );

        $jogo = new BatalhaNaval();
        $jogo->insereNavio(array(1, 2), array(4, 2));

        $this->assertTrue($jogo->tiro(1, 2));
    }
}
