<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>


    <title>Menu Page</title>
            <style type="text/css">
          table tr:nth-child(odd) {
           background-color: #C3B8B7;
           }   

           table th
           
           {

            background-color: #E9EBEC;
            padding: 2px;
           } 

           table, th, td {
            border: 1px solid;
            border-color: #000000;
            text-align: center;}
      </style>
  </head>
  <body>
<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4E8239;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="display.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allocation.php">Allocation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="search_page.php">Previous Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="capacitor_bank_show.php">Capacitor Bank</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="grid_list_show.php">Grid List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact_list.php">Phone Book</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" href="allocation_edit.php">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Add Data
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="add_grid_info.php">Add Grid</a>
                        <a class="dropdown-item" href="add_grid_info_with_added.php">Add Grid 2</a>
                        <a class="dropdown-item" href="add_capacitor_bank_info.php">Add Capacitor Bank Data</a>    
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Logout</a>
                </li>


            </ul>


        </div>
    </nav>
  </body>
</html>