<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Condition en PHP</title>
</head>
<body>
    <h1>condition en PHP</h1>
    <?php
        /* premiere exemple de condition */
        echo 'premiere exemple de condition :<br><br>' ;
    
        $x = 4 ; // variable x contient 4
        $y = -12 ; // varaible y contient -12

        if($x >= 0 AND $x <= 5){
            echo '<br>la variable x contient une valeur entre 0 et 5 <br>' ;
        }

        if($x >= 0 AND $y >= 0){
            echo '<br>les variables $x et $y contiennent une valeur positive<br>' ;
        }else{
            echo '<br>une des deux variables $x ou $y est négtive<br>' ;
        }

        if($x >= 0 OR $y >= 0){
            echo '<br>$x ou $y (ou les deux) contient un valeur positive<br>' ;
        }

        if($x >= 0 XOR $y >= 0){
            echo '<br>$x ou $y contient une valeur positive mais pas les deux<br>' ;
        }


        /* deuxieme exemple de condition */
        echo '<br><br>deuxieme exemple de condition :<br><br>' ;

        $x = 4;
        $y = -12;
        $z = 1;

        if($x >= 0 AND $x <= 5 AND $y <= 0){
            echo '<br>$x contient une valeur entre 0 et 5 et $y contient une valeur négative<br>' ;
        }

        if($x >= 0 AND $y >= 0 XOR $z >= 0){
            echo '<br>$x et $y contiennent tous les deux une valeur positif et $z une valeur stric. négative ou le contraire<br>' ;
        }

        if($x >= 0 AND ($y >= 0 XOR $z >=0)){
            echo '<br>$x contient une valeur positive et soit $y, soit $z contient une valeur positive mais pas les deux<br>' ;
        }

        /* troisieme exemple de condition */
        echo '<br><br>troisieme exemple de condition<br><br>' ;

        $x = 4 ;
        $y = -12 ;

        if(!$x >= 0 AND !$y >= 0){
            echo '<br>Ce texte est toujours affiché !<br>' ;
        }

        if(!($x >= 0) AND !($y >= 0)){
            echo '<br>Ce texte s\'affiche uniquement si $x et $y contiennent toutes les deux une valeur strict négative<br>' ;
        }

        if(!($x >= 0 AND $y >= 0)){
            echo '<br>Soit $x contient une valeur strict négative, soit $y contient une valeur strict négative, soit les deux contiennents une valeur strict négative<br>' ;
        }

        /* quatrieme exemple de condition */
        echo '<br><br>exemple avec du code ternaire<br><br>' ;

        $x = 50 ;

        /* cette condition est non ternaire */
        if($x >= 0){
            echo '<br>la variable $x contient un nombre positif<br>' ;
        }else{
            echo '<br>la variable $x contient un nombre négatif<br>' ;
        }

        echo "<br>le contenu de la variable \$x : $x<br>" ;

        $x = -5 ;

        /* meme condition écrit en tenaire */
        echo $x >= 0 ? '<br>la variable $x contient un nbre positif<br>' : '<br>la variable $x contient un nbre négatif<br>' ;

        echo "<br>la contenu de la variable \$x : $x<br><br>" ;

        
        $x = 25 ;

        echo (($x >= 0) AND ($x <= 50)) ? : "<br>la variable \$x ne contient pas un nombre compris entre 0 et 50, \$x : $x <br>" ; 

        /* exemple de condition avec tenaire ?? */
        echo '<br><br>exemple de condition ternaire ??<br>' ;

        $x = 4 ;
        $y = NULL ;
        $z ;

        $resultatx = $x ?? 'NULL' ;
        $resultaty = $y ?? 'NULL' ;
        $resultatz = $z ?? 'NULL' ;

        echo '<br>$x contient ' .$resultatx. '<br>$y contient ' .$resultaty. '<br>$z contient ' .$resultatz. '<br>' ;


        /* autre test avec null un minuscule */
        echo '<br><br>autre exemple de condition ternaire avec un null et NULL<br><br>' ;

        $x = null ;
        $y = null ;

        $resultatx = $x ?? 'NULL' ;
        $resultaty = $y ?? 'null' ;

        echo '<br>$x contient la valeur : ' .$resultatx. '<br>$y contient la valeur : ' .$resultaty. '<br>' ;


        /* la condition switch */
        echo '<br><br>le switch en php<br><br>' ;

        $x = 15;

        switch ($x){
            case 0 :
                echo '<br>$x contient la valeur 0<br>' ;
                break ;
            case 25 :
                echo '<br>$x contient la valeur 25<br>' ;
                break ;
            case 50 :
                echo '<br>$x contient la valeur 50<br>' ;
                break ;
            default:
                echo '<br>$x ne contient ni la valeur 0 ni 25 ni 50<br>valeur de la variable $x : ' .$x. '<br>' ;
        }


        /* boucle */
        echo '<br><br>les boucles<br><br><br>le while<br>' ;

        $x = 20 ;

        echo '<br>la valeur $x : '.$x ;
        
        while($x <= 25){
            echo '<br>$x contient la valeur ' .$x ;
            $x++ ;
        }

        /* do while (faire ... tant que ...) */
        $x = 25 ;
        
        echo '<br><br><br>le DO WHILE<br><br>la valeur de $x vaux : '.$x. '<br>' ;

        do{
            $x++ ;
            echo '<br>la variable contient ' .$x ;
        }while($x <= 50);

        echo "<br><br>l'incrémentation se fait avec l'echo donc la variable commence a 26<br><br>deuxieme exemple ou l'incrementation est apres l'echo<br>" ;

        $x = 50 ;

        do{
            echo '<br>la variable contient ' .$x ;
            $x++ ;
        }while($x <= 75);

        /* les boucles for */
        echo '<br><br>les boucles for<br><br>' ;

        /* tableau en php */
        $x = array(1,25,"toto") ;
        echo '<br>l\'index 0 : '.$x[0].'<br>l\'index 1 : '.$x[1].'<br>l\'index 2 :'.$x[2] ;


        $table = array("marie","eric","sophie","salim","stef","salim") ;

        $count = count($table) ;

        echo '<br><br>valeur du nombre de case dans le tableau : '.$count.'<br>' ;

        for($i = 0 ; $i < $count ; $i++ ){
            echo '<br>la valeur contenu dans l\'index '.$i.' vaux : '.$table[$i] ;
        }

        $table = ["romane","sophie","seb",'stef'] ;

        $index = count($table) ;

        echo '<br><br>valeur du nombre de case dans le tableau : '.$index.'<br>' ;

        for($i = 0 ; $i < $index ; $i++ ){
            echo '<br>la valeur contenu dans l\'index '.$i.' vaux : '.$table[$i] ;
        }

    ?>
</body>
</html>