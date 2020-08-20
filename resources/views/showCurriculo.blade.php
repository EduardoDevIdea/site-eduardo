<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo - Eduardo Gomes</title>

    <style>

        #container .curriculo {
            width: 90vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

    </style>

</head>
<body>
    <div id="container">
        <!--embed src="/storage/{{ $about->curriculo }}" type="application/pdf"-->
        <iframe class="curriculo" src="/storage/{{ $about->curriculo }}" frameborder="0"></iframe>
    </div>
</body>
</html>