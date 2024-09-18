<?php
    session_start();

    /**
     * Gera o cabeçalho da página.
     * 
     * Esta função imprime o HTML para o cabeçalho da página, incluindo o título do site.
     * 
     * @return void
     * 
     * @author Manoela
     */
    function Cabecalho(){
        echo '<header>
            <h1>FinanPro</h1>
        </header>';
    }

    /**
     * Gera o rodapé da página.
     * 
     * Esta função imprime o HTML para o rodapé da página, incluindo a mensagem de direitos autorais.
     * 
     * @return void
     * 
     * @author Manoela
     */
    function Rodape(){
        echo '<footer>
            <p>&copy; 2024 FinanPro. Todos os direitos reservados.</p>
            <p>Daniel José Dantas Jacometo</p>
            <p>João Pedro Garcia Girotto</p>
            <p>João Pedro Vieira Pereira</p>
            <p>Manoela Pinheiro da Silva</p>
        </footer>';
    }
?>
