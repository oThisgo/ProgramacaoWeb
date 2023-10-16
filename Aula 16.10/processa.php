<?php

    if(isset($_POST['enviar']) && !empty($_FILES)){
        print_r($_FILES['anexo']);
        echo "<hr>";
        //Array vazio para adicionar erros
        $erros = [];
        $name = $_FILES['anexo']['name'];
        $fileextension = pathinfo($name);
        echo $fileextension['extension'].'<br>';
        $extensions = ['pdf', 'png', 'jpeg', 'jpg', 'php'];
        $filetype = $_FILES['anexo']['type'];
        $types = ['application/pdf', 'image/png', 'image/jpeg', 'image/jpg', 'application/x-httpd-php-source'];
        $filesize = $_FILES['anexo']['size'];
        $maxsize = 1024 * 1024 * 5;

        if ($filesize > $maxsize) {
            $erros[] = 'Arquivo muito grande';
        }

        if (!in_array($fileextension['extension'], $extensions)) {
            $erros[] = 'Formato não permitido';
        } 

        if (!in_array($filetype, $types)) {
            $erros[] = 'Tipo não permitido';
        }

        if (!empty($erros)){
            foreach ($erros as $erro) {
                echo $erro . "<br>";
            } 
        } else {
            $tempname = $_FILES['anexo']['tmp_name'];
            $folder = "files/";
            $data = date('d-m-Y_h-i-s');
            $filename = $data."_".$name;
            if(move_uploaded_file($tempname, $folder.$filename)){
                echo "Arquivo enviado com sucesso!";
            } else {
                echo "Erro ao enviar o arquivo!";
            }
        }

    }

?>