<?php
session_start();
include_once ("../settings/includes.php");

?>
<form method="POST" enctype="multipart/form-data" id="form-publicar" class="col-sm-8">
<label>titulo</label>
<input type="text" name="titulo" class="form-control"><br>

<label>imagem</label>
<input type="file" name="userFile" class="form-control"><br>

<label>publicação</label>
<input name="post" class="form-control" rows="5" id="controls"><br>

<input type="submit" class="btn btn-outliline-primary btn-lg btn-block">
<input type="hidden" name="env" value="post">
</form>
<script src="../api/textarea/build/ckeditor.js"></script>
<script>ClassicEditor
        .create( document.querySelector( '#controls' ), {

            toolbar: {
                items: [
                    'heading',
                    '|',
                    'undo',
                    'redo',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'alignment',
                    'indent',
                    'outdent',
                    '|',
                    'imageUpload',
                    'mediaEmbed',
                    'CKFinder',
                    '|',
                    'exportPdf'
                ]
            },
            language: 'pt-br',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',

        } )
        .then( editor => {
            window.editor = editor;








        } )
        .catch( error => {
            console.error( 'Oops, something went wrong!' );
            console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
            console.warn( 'Build id: qvwljm3hezqd-cbvqs2fi4hgy' );
            console.error( error );
        } );
</script>
<?php

        if (@$_POST["env"] && @$_POST["env"] == "post") {
            if (@$_POST["titulo"] && @$_POST["post"]) {
                $idUser = "gereg";
                $titulo = $_POST["titulo"];
                $postag = $_POST["post"];

                $uploaddir = "uploads";
                $uploaddirN = "uploadsN";
                $uploadsFile = $uploaddir . basename($_FILES["userFile"]["name"]);
                $uploadsFileN = $uploaddirN . basename($_FILES["userFile"]["name"]);

                $query = $con->prepare("INSERT INTO posts (id_postador,titulo,postagem,imagem) VALUES (?,?,?,?)");
                $query->bind_param("ssss", $idUser, $titulo, $postag, $uploaddirN);
                $query->execute();

                if ($query->affected_rows > 0 && move_uploaded_file($_FILES["userFile"]["tmp_name"], $uploadsFile)) {
                    echo "publicação emviada com sucesso!";
                } else {
                    echo "erro";

                }

            } else {
                echo "<br><div class='alert alert-danger'> preecha todos os campos</div>";
            }

    }
?>
