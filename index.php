<?php ?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Federal CT Crime Database - Prentend FBI project</title>
    </head>
    <body>
    <button id="button">Click Here</button>
    <br><br>
    <div id ="txt"></div>
    </body>
    <script>
    document.getElementById('button').addEventListener('click', loadText);
    
    function loadText(){
        console.log("this button works");
        var xhr = new XMLHttpRequest();
        console.log(xhr)
        xhr.open('GET', 'mysql.sql', true)
        console.log("READYSTATE: ", xhr.readyState);
        //xhr.onprogress = function(){console.log('READYSTATE: ', xhr.readyState)} if we want a loader 
        xhr.onload = function(){
            if(this.status ==200){
                console.log(this.responseText)
                document.getElementById('txt').innerHTML = this.responseText;
            }

        }

        xhr.send();
    } </script>





















<?php ?>
