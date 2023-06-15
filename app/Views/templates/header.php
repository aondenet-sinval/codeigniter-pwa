<!doctype html>
<html>
<?php
helper('html');
echo script_tag('bootstrap/dist/js/bootstrap.min.js');
echo script_tag('sw.js');
echo link_tag('bootstrap/dist/css/bootstrap.min.css');
echo link_tag('/css/welcome_message.css');
 ?>
<head>
  <title>Conhecendo: CodeIgniter Tutorial</title>
  <link rel="manifest" href="/manifest.json">
  <style media="screen">
    .title-news{
      margin-top: 50px;
    }
    .main{margin-left: 10px;}
  </style>
</head>
<body>
  <div class="menu fixed-top">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="/" role="tab" aria-controls="home" aria-selected="true">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="/news/create" role="tab" aria-controls="profile" aria-selected="false">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="messages-tab" data-toggle="tab" href="/home" role="tab" aria-controls="messages" aria-selected="false">Home news</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="settings-tab" data-toggle="tab" href="/about" role="tab" aria-controls="settings" aria-selected="false">Sobre mim</a>
      </li>
    </ul>
  </div>
