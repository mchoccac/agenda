<?php
/**
 * Description of Model
 *
 * @author Alan
 */
class Model
{
    /**
     * Recebe uma conex�o com banco de dados
     * @var Conexao
     */
    protected $connection;
    
    /**
     * Recebe um instru��o SQL
     * @var string
     */
    protected $instruction;
    
    /**
     * Guarda o status da transa��o
     * como verdadeira ou falso
     * @var boolean
     */
    private $status;

    /**
     * M�todo Construtor
     * Cria uma conex�o com o banco de dados
     */
    public function __construct()
    {
        // Inicia a conex�o
        $this->connection = Conexao::getInstance();
        // Coloca a transa��o como n�o realizada
        $this->status = FALSE;
    }
    
    /**
     * M�todo commit
     * Executa a transa��o com o banco de dados
     */
    public function execute()
    {
        // Inicia um bloco de excess�o
        try
        {
            // Inicia a transa��o
            $this->connection->beginTransaction();
            // Executa a transa��o
            $this->connection->execute();
            // Finaliza a transa��o
            $this->connection->commit();
            // Seta a transa��o com executada
            $this->status = TRUE;
        }
        // Caso haja um erro na transa��o
        catch (Exception $exc)
        {
            // Imprime o erro na tela do display
            echo '<div class="alert">';
            echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
            echo 'ERRO:' . $exc->getTraceAsString() . '</div>';
        }
    }
    
    public function getStatus()
    {
        return $this->status;
    }
}

?>
