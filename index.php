<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Movies Table</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    /* Add some custom styles */
    body {
      padding: 20px;
    }
    table {
      margin-top: 20px;
    }
    #add-movie-btn {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Movies Table</h1>
    <!-- Create a dropdown menu for filtering the data -->
    <div class="form-group">
      <label for="filter-select">Filter by:</label>
      <select class="form-control" id="filter-select">
        <option value="rating">Rating</option>
        <option value="views">Views</option>
        <option value="earnings">Earnings</option>
      </select>
    </div>
    <!-- Create a button for adding new movies -->
    <button class="btn btn-primary" id="add-movie-btn">Add New Movie</button>
    <!-- Create a table to display the data -->
    <table class="table">
      <thead>
        <tr>
          <th>Title</th>
          <th>Rating</th>
          <th>Views</th>
          <th>Earnings</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>The Godfather</td>
          <td>9.2</td>
          <td>500 million</td>
          <td>$245 million</td>
        </tr>
        <tr>
          <td>The Shawshank Redemption</td>
          <td>9.3</td>
          <td>320 million</td>
          <td>$28 million</td>
        </tr>
        <tr>
          <td>Forrest Gump</td>
          <td>8.8</td>
          <td>330 million</td>
          <td>$680 million</td>
        </tr>
        <tr>
          <td>The Dark Knight</td>
          <td>9.0</td>
          <td>650 million</td>
          <td>$1 billion</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Link to Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>