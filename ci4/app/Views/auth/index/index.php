<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  
    

    <title>Web Hobi Makan</title>
  </head>

  <body>
    <?php echo $this->include('auth/index/header') ?>
    <?php echo $this->include('auth/index/content') ?>
    
    <?php echo $this->renderSection('content') ?>
    
    <?php echo $this->include('auth/index/footer') ?>
    </body>
    