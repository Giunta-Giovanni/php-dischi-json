<?php
require_once('./server.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <!-- style -->
     <link rel="stylesheet" href="./style.css">
    <title>Songibles</title>
</head>
<body>
    <header>
        <h1>
            Songibles
        </h1>
    </header>
    <main>
        <div class="container">
            <div class="row m-3">
                <?php
                foreach($records as $record){
                ?>
                <div class="col-4">
                    <div class="card">
                        <img src="<?php echo $record['cover_url']?>">
                        <div class="card-body">
                            <h4><?php echo $record['title']?></h4>
                            <p><?php echo $record['genre']?></p>
                            <p><?php echo $record['artist']?></p>
                            <h5><?php echo $record['year']?></h5>
                        </div>
                    </div>
                </div> 
                <?php
                    }
                    ?>    
            </div>
        </div>
    </main>
    
</body>
</html>