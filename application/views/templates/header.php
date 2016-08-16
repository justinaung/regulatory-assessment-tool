<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Regulatory Assessment Tool </title>

    <!--Load style.css file, which store in css folder.-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        $( function() {
          $( document ).tooltip({
              track: true
           });
        } );
    </script>
    <style>
    label {
      display: inline-block;
      width: 5em;
    }
    </style>

</head>

<body>
    <h1> <?php echo $title; ?> </h1>
