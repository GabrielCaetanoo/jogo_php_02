<?php 

defined('CONTROL') or die('Acesso Negado');

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    $data = [

        // PLAYER 1
        'player_1_name' => $_POST['text_player_1'],
        'player_1_symbol' => 'X',
        'player_1_score' => 0, 

        // PLAYER 2
        'player_2_name' => $_POST['text_player_2'],
        'player_2_symbol' => 'O',
        'player_2_score' => 0,

        'game_board' => [
            ['', '', ''],
            ['', '', ''],
            ['', '', '']
        ],
        'game_turn' => 1,
        'game_number' => 1,
        'active_player' => 1

    ];

    $_SESSION = $data;

    //start the game
    header('Location: index.php?route=game');

}

?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-6 card bg-secondary text-white p-5">
            <form action="index.php?route=start" method="post">

                <h3 class="text-center">JOGO DA VELHA</h3>
                <hr>

                <!-- player 1 -->
                <div class="mb-3">
                    <label for="text_player_1" class="form-label">JOGADOR 1:</label>
                    <input type="text" class="form-control" name="text_player_1" required>
                </div>

                <div class="mb-3">
                    <label for="text_player_2" class="form-label">JOGADOR 2:</label>
                    <input type="text" class="form-control" name="text_player_2" required>
                </div>
                
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-dark w-25">INICIAR JOGO</button>
                </div>
            </form>
        </div>
    </div>
</div>