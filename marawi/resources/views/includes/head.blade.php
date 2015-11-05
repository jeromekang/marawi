<?php
//<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
//<script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

//<link rel="stylesheet" href="{{ URL::asset('DataTables-1.10.9/css/jquery.dataTables.min.css') }}">
//<script type="text/javascript" charset="utf8" src="{{ URL::asset('jQuery-2.1.4/jquery-2.1.4.min.js') }}"></script>
//<script type="text/javascript" charset="utf8" src="{{ URL::asset('DataTables-1.10.9/js/jquery.dataTables.min.js') }}"></script>

//<link rel="stylesheet" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
//<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
//<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="author" content="JKang">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>MARAWI</title>

  <!--BootStrap Dependencies-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!--DataTables Dependencies-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs/jq-2.1.4,dt-1.10.9,r-1.0.7/datatables.min.css"/>
  <script type="text/javascript" src="https://cdn.datatables.net/r/bs/jq-2.1.4,dt-1.10.9,r-1.0.7/datatables.min.js"></script>

  <style type="text/css">
    .table-striped>tbody>tr:nth-child(odd)>td, 
    .table-striped>tbody>tr:nth-child(odd)>th {
       background-color: #C0C0C0;
     }
  </style>
</head>

<!-- Wrap all page content here -->
<div id="wrap">
  <!-- Full Width Navbar -->
  <div class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">MARAWI</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="{{ action('HomeController@address') }}">Address Book</a></li>
          <li><a href="#about">Inventory</a></li>
          <li><a href="#contact">Orders</a></li>
          <li><a href="#contact">Payables</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Login</a></li>
              <li><a href="#">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>