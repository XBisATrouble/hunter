<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="/css/sweetalert.css">
</head>
<body>

<div class="container">
    <p>Welcome to my website...</p>
</div>

<script src="/js/sweetalert.min.js"></script>

<!-- Include this after the sweet alert js file -->
@include('sweet::alert')


<script>
    window.onload=function(){
        document.load(
            swal("Good job!", "You clicked the button!", "success")
        )
    }
</script>
</body>
</html>