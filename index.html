<!DOCTYPE html>
<html>
<head>
    <title>App de Leitura de Números</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    <div class="container">
        <h2>App de Leitura de Números</h2>
        <video id="video" width="100%" height="auto" style="display: none;"></video>
        <canvas id="canvas" width="100%" height="auto"></canvas>
        <button class="btn" id="capture">Capturar Número</button>
        <div id="result"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const video = document.getElementById('video');
        const canvas = document.getElementById('canvas');
        const captureButton = document.getElementById('capture');
        const resultDiv = document.getElementById('result');
        
        navigator.mediaDevices.getUserMedia({ video: true })
            .then(stream => {
                video.srcObject = stream;
                video.play();
            })
            .catch(err => {
                console.error('Erro ao acessar a câmera:', err);
            });

        captureButton.addEventListener('click', function() {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
            const imageData = canvas.toDataURL('image/jpeg');

            fetch('processar_imagem.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'imagem=' + encodeURIComponent(imageData)
            })
            .then(response => response.text())
            .then(result => {
                resultDiv.innerHTML = result;
            })
            .catch(err => {
                console.error('Erro ao processar imagem:', err);
            });
        });
    });
    </script>
</body>
</html>

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
