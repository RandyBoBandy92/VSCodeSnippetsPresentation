<?php

?>

<main>
    <h1>Something</h1>
    <?php

        for ($${1:index}=0; $${1:index} < $${2:array}.length; $${1:index}++) :
            ${0}
        endfor;

        // Becomes

        for ($index=0; $index < count($things); $index++):
            $thing = $things[$index];
            // Nice.
        endfor;

?>



<?php
    function myFunction ($arg) {
        echo "Hello World!";
    }

?>




</main>


?>