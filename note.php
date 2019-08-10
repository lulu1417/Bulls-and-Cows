<?php
//show note
include "db.php";
$query = "SELECT * FROM note";
$result = mysqli_query($db, $query);
while ($rs = mysqli_fetch_array($result)) {?>

    <label for="0">0</label>
                            <input type="checkbox" name="number" id="0" value="<?=$rs[0]?>" />
                            <label for="1">1</label>
                            <input type="checkbox" name="number" id="1" value="<?=$rs[1]?>"/>
                            <label for="2">2</label>
                            <input type="checkbox" name="number" id="2" value="<?=$rs[2]?>"/>
                            <label for="3">3</label>
                            <input type="checkbox" name="number" id="3" value="<?=$rs[3]?>"/>
                            <label for="4">4</label>
                            <input type="checkbox" name="number" id="4" value="<?=$rs[4]?>"/>
                            <label for="5">5</label>
                            <input type="checkbox" name="number" id="5" value="<?=$rs[5]?>"/>
                            <label for="6">6</label>
                            <input type="checkbox" name="number" id="6" value="<?=$rs[6]?>"/>
                            <label for="7">7</label>
                            <input type="checkbox" name="number" id="7" value="<?=$rs[7]?>"/>
                            <label for="8">8</label>
                            <input type="checkbox" name="number" id="8" value="<?=$rs[8]?>"/>
                            <label for="9">9</label>
                            <input type="checkbox" name="number" id="9" value="<?=$rs[9]?>"/>
                        <?php}?>
}
