<!DOCTYPE html>
<html lang="pt_BR">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda-themeless.min.css" integrity="sha512-EOY99TUZ7AClCNvbnvrhtMXDuWzxUBXV7SFovruHvYf2dbvRB5ya+jgDPk5bOyTtZDbqFH3PTuTWl/D7+7MGsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="stylesheet" href="/assets/css/styles.css" />

  <title>Teste | Voxline</title>
</head>

<body class="wrapper">
  <div class="container">
    <div class="mb-3">
      <label for="cep" class="form-label">Insira o CEP que deseja consultar</label>
      <input type="text" class="form-control" id="cep" name="cep" maxlength="9" placeholder="Ex.:  00000-000" data-mask="00000-000" required>
    </div>
    <div class="buttons-container">
      <button type="button" class="ladda-button btn btn-success" id="search" data-style="expand-right">Consultar</button>
      <button type="button" class="btn btn-outline-secondary" id="clear">Limpar</button>
    </div>
    <div id="info" class="result"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js" integrity="sha512-Tn2m0TIpgVyTzzvmxLNuqbSJH3JP8jm+Cy3hvHrW7ndTDcJ1w5mBiksqDBb8GpE2ksktFvDB/ykZ0mDpsZj20w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/spin.min.js" integrity="sha512-FzwLmClLNd77zi/Ke+dYlawHiPBAWhk8FzA4pwFV2a6PIR7/VHDLZ0yKm/ekC38HzTc5lo8L8NM98zWNtCDdyg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda.min.js" integrity="sha512-fK8kfclYYyRUN1KzdZLVJrAc+LmdsZYH+0Fp3TP4MPJzcLUk3FbQpfWSbL/uxh7cmqbuogJ75pMmL62SiNwWeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Ladda/1.0.6/ladda.jquery.min.js" integrity="sha512-9pDK1QtjyYU3QU0NU3+kZ6TrxsMJISp9qxRXDN3Ali+pZPJzxDJL1jc6oQuLoAtve6Pc+KUDy6QJajimBKxfYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="/assets/js/scripts.js"></script>
</body>

</html>