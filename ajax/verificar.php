<?php
    session_start();
    if (isset($_POST['escolha'])) {
        $respostas = array('20','1.63','63','Preto');
        $resposta = in_array($_POST['escolha'],$respostas);
        $_SESSION['nacertos'] = ($resposta != false)? $_SESSION['nacertos']+=1 : false; 
        echo $_SESSION['nacertos'];
    }
    else if(isset($_POST['add'])){
        $_SESSION['nper'] = ($_SESSION['nper']<3) ? $_SESSION['nper']+1 : $_SESSION['nper']=0;
    }
    else if(isset($_POST['rem'])){
        $_SESSION['nper'] = ($_SESSION['nper']>0) ? $_SESSION['nper']-1 : $_SESSION['nper']=3;
    }
?>