<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $imagemData = $_POST['imagem'];
    $imagemBase64 = str_replace('data:image/jpeg;base64,', '', $imagemData);
    $imagem = base64_decode($imagemBase64);

    // Aqui você pode usar uma biblioteca de OCR como Tesseract para reconhecer números na imagem
    // Exemplo básico usando Tesseract (necessário instalar Tesseract no servidor):
    // exec('tesseract /caminho/para/imagem.jpg stdout', $output);
    // $numero = $output[0];

    // Simulando o resultado do OCR
    $numero = '1234';

    echo $numero;
}
?>
