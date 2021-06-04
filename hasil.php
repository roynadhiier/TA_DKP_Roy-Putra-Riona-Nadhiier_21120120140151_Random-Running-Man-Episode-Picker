<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hasil</title>
    <link rel="stylesheet" href="bootstrap-5.0.1-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="tambahan2.css">
</head>
<body>
<?php


    function gg($value){
        if ($value % 2 == 0) {
            echo "Episode genap";
        } else {
            echo "Episode ganjil";
        }
    }


    function randomEp($min, $max){
        return random_int($min, $max);
    }

    class Episode {
        public $min;
        public $max;

        function __construct($min, $max) {
            $this->min = $min;
            $this->max = $max;
        }
        function get_min() {
            return $this->min;
        }
        function get_max() {
            return $this->max;
        }
    }

    $ep = new Episode($_POST['min'], $_POST['max']);


    $jml = $_POST['jml'];

    $hslArray = array();


    if(isset($_POST["submit1"])){
        $hsl = "Please watch Running Man episode";
        for ($i = 0; $i < $jml; $i++){
            $hsl2 = randomEp($ep->get_min(), $ep->get_max());
            array_push($hslArray,$hsl2);
        }
    }
    ?>

 
    <div class="container table-responsive mt-4">
        <table class="table table-borderless table-light align-middle justify-content-center text-center">
            <tr class="table-dark">
                <th style="width: 25%">#</th>
                <th style="width: 25%">Episode</th>
                <th style="width: 25%">Ganjil/Genap</th>
                <th style="width: 25%">Link</th>
            </tr>
        
        <?php for ($no = 1, $i = 0; $i < $jml; $i++) { ?>

            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $hslArray[$i]; ?></td>
                <td><?php gg($hslArray[$i]); ?></td>
                <td><a class="btn btn-danger btn-md mb-3" href="https://kisstvshow.to/Show/Running-Man/Episode-<?php echo $hslArray[$i]?>" target="_blank">WATCH NOW!</a></td>
            </tr>
        <?php $no++; } ?>


        
        </table>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col">
                <form action="index.html" method="post">
                    <button type="submit" name="submit2" class="btn btn-primary btn-lg">Another episode?</button>
                </form>
            </div>
        </div>
    </div>
    

    
</body>
</html>