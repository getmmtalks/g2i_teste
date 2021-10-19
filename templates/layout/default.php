<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    

    <!--Styles-->
    <?= $this->Html->css(['layout-default', 'home']) ?>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet" type="text/css" />

    <!--Select2-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    

</head>
<body>

    <div class="container">
        <header>
        <nav class="navbar navbar-expand-lg navbar-light">
        
            <a class="navbar-brand" href="#">g2iCar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Principal</a>
                    </li>
                    <li class="nav-item">
                    <a type="button" class="nav-link btn btn-success text-light"  data-bs-toggle="modal" data-bs-target="#exampleModal" href="javascript:void(false);"><i class="fas fa-plus-circle"></i> Add veículo</a>
                    </li>
                </ul>
            </div>
        
        </nav>
        </header>
        <main>
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </main>
    </div>
    <div class="container-fluid">
        <footer>
            <div class="row">
                <div class="col-12 text-center">
                    <p>Todos os direitos reservados.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="https://github.com/getmmtalks/" target="_blank">Github</a>
                </div>
            </div>
        </footer>
    </div>

    <!--Scripts on end-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <?= $this->Html->script(['home']) ?>
</body>
</html>
