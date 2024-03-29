<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="create.php" method="post">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" class = "email_id"  placeholder="email"> <br> <br>
    <span class = "email_error">  </span>
    <input type="submit" value="Submit">
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
  $(document).ready(function() {
    $('.email_id').keyup(function(e) {
     var email = $('.email_id').val();
     
     $.ajax({
        type : "POST",
        url: "create.php",
        data: {
            'check_Emailbtn': 1,
            "email": email,
        },
        success: function (response) {
           $('.email_error').text(response)
        }
     });
});
  } )

</script>


</body>
</html>


