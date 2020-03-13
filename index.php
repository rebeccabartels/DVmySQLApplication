<?php ?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Federal CT Crime Database - Prentend FBI project</title>
    </head>
    <body>
    <button id="button">Click Here</button>
    </body>
    <script>
    document.getElementById('button').addEventListener('click', loadText);
    
    function loadText(){
        console.log("this mf button works");
        var xhr = new XMLHttpRequest();
        console.log(xhr)
        xhr.open('GET', '2012CtCrimeData.xml', true)
        xhr.onload = function(){
            if(this.status ==200){
                console.log(this.responseText)
            }
        }
        xhr.send();
    } </script>





















<?php ?>
