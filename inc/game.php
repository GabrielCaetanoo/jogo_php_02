<?php 

defined('CONTROL') or die('Acesso Negado');

?>

<?php for ($row = 0; $row <= 2; $row++) : ?>
                <div class="d-flex justify-content-center">
                    <?php for ($col = 0; $col <= 2; $col++) : ?>
                        <a href="index.php?route=game&player=<?= $_SESSION['active_player'] ?>&x=<?= $row ?>&y=<?= $col ?>">
                            <div class="board-cell text-center">
                                <?php if ($_SESSION['game_board'][$row][$col] == 'X') : ?>
                                    <img src="/assets//images/times.png">
                                <?php elseif ($_SESSION['game_board'][$row][$col] == 'O') : ?>
                                    <img src="/assets//images/circle.png">
                                <?php endif; ?>
                            </div>
                        </a>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>

            <?php if (!empty($winner)) : ?>
                <div class="text-center mt-3">
                    <h3 class="text-center text-warning"><?= $winner ?></h3>
                    <div class="text-center mt-3">
                        <a href="index.php?route=game&next=1" class="btn btn-success w-25">PRÓXIMO JOGO</a>
                    </div>
                </div>
            <?php endif; ?>

            <div class="text-center mt-3">
                <a href="index.php?route=start" class="btn btn-dark w-25">REINICIAR</a>
            </div>

        </div>
    </div>
</div>
