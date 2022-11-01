<?php
    $imagee = [
        "https://vn-live-01.slatic.net/p/8c831599bf56dcda578f75290a4afd1a.jpg",
        "https://salt.tikicdn.com/ts/tmp/ae/93/17/ba0669dd3e8ffa99c1b964550ec3a583.jpeg",
        "https://mikenco.vn/wp-content/uploads/2020/04/93642895_600705573990825_5150592220939681792_n-copy.jpg",
        "https://mikenco.vn/wp-content/uploads/2021/11/1-1.jpg"
    ];
    $arrLength = count($imagee);
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <?php for($i=0; $i < $arrLength; $i++) { ?>
                <?php if($i % 2 == 0) {?>
                    <div class="media">
                        <img src="<?php echo $imagee[$i]?>" class="mr-3 w-25" alt="...">
                        <div class="media-body">
                            <h5 class="mt-0">Media heading</h5>
                            <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="media">
                        <div class="media-body bg-primary text-white">
                            <h5 class="mt-0">Media heading</h5>
                            <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p>
                        </div>
                        <img src="<?php echo $imagee[$i]?>" class="mr-3 w-25" alt="...">
                    </div>
                <?php }?>
            <?php ;}?>
        </div>
      
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>