<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="myForm" id="myForm" action="try.php" method="POST">
    <p>
        <input name="test" value="test" />
    </p>
    <p>
        <input type="submit" value="Submit" />
    </p>
</form>

<script type="text/javascript">
    window.onload=function(){
        var auto = setTimeout(function(){ autoRefresh(); }, 100);

        function submitform(){
          alert('test');
          document.forms["myForm"].submit();
        }

        function autoRefresh(){
           clearTimeout(auto);
           auto = setTimeout(function(){ submitform(); autoRefresh(); }, 10000);
        }
    }
</script>
</body>
</html>