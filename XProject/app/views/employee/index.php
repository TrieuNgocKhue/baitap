<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST OFF EMPLOYEED</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="header">
            <h1>LIST OF EMPLOYEES</h1>
            <button>+ Add New Employee</button>
        </div>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Addres</th>
      <th scope="col">Salary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Ronal Mendel</td>
      <td>C/ Araquil, 67, Madrid</td>
      <td>5000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Victoria Ashworth</td>
      <td>35 King George, London</td>
      <td>6500</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Martin Blank</td>
      <td>25, Rue Lauriston, Paris</td>
      <td>8000</td>
    </tr>
  </tbody>
</table>
    </div>
</body>
</html>