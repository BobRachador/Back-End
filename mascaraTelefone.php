<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Telefone</title>
  <style>
    input{
      padding: 0.5%;
      border-radius: 5px;
    }
    label{
      font-size: 1.5em;
    }
    input[type="submit"]{
      color: #FFFFFF;
      background-color: green;
      border: #FFFFFF solid 1px;
      transition: 0.2s;
    }
    input[type="submit"]:hover{
      color: #333333;
      background-color: #FFFFFF;
      border: green solid 1px;
    }
  </style>
</head>
<body>
<form action="fone.php" method="POST">
    <label for="telefone"> telefone:</label> <input type="tel" name="telefone" placeholder="(00) 0000-0000"  maxlength="15" onkeyup="handlePhone(event)">
    <input type="submit" value="validar">
</form>
<script>
    const handlePhone = (event) => {
  let input = event.target
  input.value = phoneMask(input.value)
}

const phoneMask = (value) => {
  if (!value) return ""
  value = value.replace(/\D/g,'')
  value = value.replace(/(\d{2})(\d)/,"($1) $2")
  value = value.replace(/(\d)(\d{4})$/,"$1-$2")
  return value
}
</script>
</body>
</html>