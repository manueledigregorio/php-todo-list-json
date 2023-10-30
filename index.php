<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512- 
  iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous"/>

  <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  	
  <!-- Vue -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

  <!-- Axius -->
<script src="https://unpkg.com/axios@1.1.2/dist/axios.min.js"></script>
  <link rel="stylesheet" href="style.css">
  
  <title>todolist</title>
</head>
<body>
  <div id="app">
    <div class="container">

      <ul class="list-group">
        <li 
          v-for="item in list" 
          class="list-group-item" >
          {{item.message}}
        </li>
      </ul>

      <div class="input-group mb-3">
        <button class="btn btn-outline-secondary" @click="addTask" type="button" id="button-addon1">Button</button>
        <input type="text" v-model.trim="newTodo" @keyup.enter="addTask" class="form-control" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
      </div>  
    </div>
  </div>
    
    <script src="script.js"></script>
</body>
</html>