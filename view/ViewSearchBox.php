<?php
class ViewSearchBox
{
    public function output()
    {
        ?>
        <form action="index.php" method="get">
            <input type="text" name="customer" />
            <input type="submit" value="Search" />
        </form>
        <?php
    }
}
?>