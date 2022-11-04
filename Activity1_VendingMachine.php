<?php 
    $arrsoda = array('Coke' => 15,'Sprite' => 20, 'Royal' => 20, 'Pepsi' => 15, 'Mountain Dew' => 20);
    $arrsizes = array('Regular' => "Regular", 'up-size (add ₱5)' => "upsize", 'jumbo (add ₱10)' => "Jumbo");
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vending Machine</title>
</head>
<body>
    <h3>Vending MAchine</h3>
    <form method="post">

            <!---------------------------the products display--------------->

        <fieldset style="width: 40%;">
            <legend>Products:</legend>            
            <?php 
                if (isset($arrsoda)) {
                    foreach ($arrsoda as $keysoda => $sodavalue) {
                        // echo "<input type='checkbox' name='sodacheck'" .$keysoda. "}' value'" .$sodavalue. "'>
                        // <label>" . $keysoda. " - ₱" .$sodavalue. "</label> <br>";
                        echo "<input type='checkbox' name='sodacheck[".$keysoda."]' value='".$sodavalue."' id = 'sodacheck[".$keysoda."]'><label for = 'sodacheck[".$keysoda."]'>".$keysoda." -&#8369; ".$sodavalue." </label><br>\n";

                    }
                }

             ?> 

        </fieldset>
        
        <!---------------------------the options display--------------->
        <fieldset style="display: inline-block;">

            <legend>Options:</legend>
            <label for="select_size">Size</label>
            <select name="select_size" id="select_size">

                <?php
                    if (isset($arrsizes)){
                        foreach ($arrsizes as $keysizes => $sizesvalue) {
                            echo "<option value='".$sizesvalue."'>".$keysizes. "</option>";
                        }
                    }
                  ?>
            </select>

            <label for="num_Quantity">Quantity</label>
            <input type="number" name="num_Quantity" id="num_Quantity" min="0" max="100" value="0">

            <button type="submit" name="btnSubmit"> Check Out</button>
        </fieldset>
        <hr>



        <?php 
        if (isset($_POST['btnSubmit'])){

            if (isset($_POST["sodacheck"]) && isset($_POST['select_size'])) {

                $quantity = $_POST['num_Quantity'];
                $size  = $_POST['select_size'];
                $pop = $_POST['sodacheck'];

                if ($quantity == 1) {
                    $pieces = "piece";
                }
                else{
                    $pieces = "pieces";
                }

                if ($size == ' Regular'){
                    $addOns = 0;
                }
                elseif ($size == 'upsize') {
                    $addOns = 5;
                }
                elseif ($size == 'Jumbo') {
                    $addOns = 10;
                }


                echo "<h3> Purchace Summary </h3>";
                foreach ($pop as $popkey => $popvalue) {
                    echo 
                        "<ul><li>"
                                .$quantity ." ".$pieces." of ".$size." ".$popkey." amounting to ₱ = ".$totalValue = intval($popvalue) * intval($quantity) + ($addOns *intval($quantity)).
                        "</li></ul>";

                $totalPrice = (array_sum($pop) + $addOns *  $quantity) * $quantity;
                
                }        
                }
                else{
                    echo " No selected product. Please try again.";
                }
                echo "<b> Total amount:</b>" . $totalPrice;
                echo "<br><b>Total Number of Items:</b> ". $totalItems = ($quantity * sizeof($pop));
        }
        ?>  
    </form>
</body>
</html>