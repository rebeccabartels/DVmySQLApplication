<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="style.css" rel="stylesheet" type="text/css">
  <title>Ajax 1 - Text File</title>
</head>
<body>
  <button id="button">Get Text File</button>
  <br><br>
  <div id="text"></div>

  <?php include('login.php');?>

  <script>
    // Create event listener
    document.getElementById('button').addEventListener('click', loadText);

    function loadText(){
      // Create XHR Object
      var xhr = new XMLHttpRequest();
      // OPEN - type, url/file, async
      xhr.open('GET', 'mysql.sql', true);

      console.log('READYSTATE: ', xhr.readyState);

      // OPTIONAL - used for loaders
      xhr.onprogress = function(){
        console.log('READYSTATE: ', xhr.readyState);
      }

      xhr.onload = function(){
        console.log('READYSTATE: ', xhr.readyState);
        if(this.status == 200){
          //console.log(this.responseText);
          document.getElementById('text').innerHTML = this.responseText;
        } else if(this.status = 404){
          document.getElementById('text').innerHTML = 'Not Found';
        }
      }

      xhr.onerror = function(){
        console.log('Request Error...');
      }

      // xhr.onreadystatechange = function(){
      //   console.log('READYSTATE: ', xhr.readyState);
      //   if(this.readyState == 4 && this.status == 200){
      //     //console.log(this.responseText);
      //   }
      // }

      // Sends request
      xhr.send();
    }

    // readyState Values
    // 0: request not initialized 
    // 1: server connection established
    // 2: request received 
    // 3: processing request 
    // 4: request finished and response is ready

    // HTTP Statuses
    // 200: "OK"
    // 403: "Forbidden"
    // 404: "Not Found"
  </script>
</body>
</html>
<?php ?>
