<?php

$url = "http://localhost/modulo02/api/equipe.php";

$dadosJson = file_get_contents($url);

$dadosEquipe = json_decode($dadosJson, true);

?>

<div class="container">
    <h2 class="text-center">Nossa Equipe:</h2>
    <div class="row">
        <?php
        if (!empty($dadosEquipe)){
            foreach ($dadosEquipe as $membro){
        ?>
         <div class="col-12 col-md-3 text-center">
             <div class="card" data-aos="fade-left" data-aos-delay="50">
                <img src="<?= htmlspecialchars($membro['foto'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($membro['nome'], ENT_QUOTES, 'UTF-8') ?>" class="card-img-top" loading="lazy">
                <div class="card-body text-center-color">
                        <p><strong><?= htmlspecialchars($membro['nome'], ENT_QUOTES, 'UTF-8') ?></strong></p>
                        <p><?= htmlspecialchars($membro['cargo'], ENT_QUOTES, 'UTF-8') ?></p>
                </div>
            </div>
         </div>
        
        <?php
             }
        }
        ?>
         
    </div>
</div>
