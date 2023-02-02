<div class="row">
    <div class="col-6 offset-3">
        <div id="hello" class="card mb-3 " style="width: 100%;">
            <div class="card-body col-8" style="width: max;">
                <h2 class="card-title" id='npergunta' value='<?php echo $_SESSION['nper']; ?>'>Pergunta <?php echo $_SESSION['nper'] + 1; ?></h2>
                <h3 class="card-subtitle mb-2 text-muted"> <?php echo $perguntas[$_SESSION['nper']][0]; ?></h3>
                <div class="card-text" id="word">
                    <?php
                    for ($i = 1; $i < 5; $i++) {
                    ?>
                        <div class="form-check" id="word2">
                            <input class="form-check-input disabled" type="radio" id="io" name="esc" value=<?php echo $perguntas[$_SESSION['nper']][$i]; ?> onclick="verificar(this.value)">
                            <label class="form-check-label" for="esc">
                                <?php echo $perguntas[$_SESSION['nper']][$i] ?>
                            </label>
                        </div>
                        <br>
                    <?php
                    }
                    ?>
                </div>
            </div>

            <div class="card-body col-4" style="width: max;">
                <h2 class="card-title">Acertos</h2>
                <span class="teste"><?php echo $_SESSION['nacertos'];?></span>
            </div>
        </div>
        <div class="btn-group" role="group" aria-label="Basic example" id="oi">
            <button id="btn1" name='rem' class="btn disabled">
                <span>Anterior</span>
                <div class="liquid"></div>    
            </button>
            <button id="verificar" class="btn disabled">
                <span>Verificar</span>
                <div class="liquid"></div>
            </button>
            <button id="btn2" name='add' class="btn disabled">
                <span>Próxima</span>
                <div class="liquid"></div> 
            </button>
        </div>
    </div>
</div>

<div class="modal" tabindex="-1" id='certo'>
    <div class="modal-dialog">
        <center>
            <i class="bi bi-check-lg"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="70%" height="70%" color="white" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
            </svg>
        </center>
    </div>
</div>
<div class="modal" tabindex="-1" id='errado'>
    <div class="modal-dialog">
        <center>
            <i class="bi bi-x"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="70%" height="70%" color="white" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
        </center>
    </div>
</div>