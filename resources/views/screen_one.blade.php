<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Simple Crud</title>
</head>

<body>
<div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Day</th>
              <th scope="col">Article Name</th>
              <th scope="col">Author</th>
              <th scope="col">Shares</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Bootstrap Flexbox Tutorial and Examples</td>
              <td>Cristina</td>
              <td>1.234</td>
              <td>
                <button type="button" class="btn btn-primary">View</button>
                <a href="/add-amount" type="button" class="btn btn-success">Add Amount</a>
              </td>
            </tr>
          </tbody>
        </table>
        <a href="/create-project" class="btn btn-primary">Add Project</a>
      </div>
    </div>
  </div>
</body>
</html>