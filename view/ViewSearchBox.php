<?php
class ViewSearchBox
{
    public function output()
    {
        echo '<form action="index.php" method="get">';
        echo '<input type="text" name="search" placeholder="Search by name...">';
        echo '<input type="submit" value="Search">';
        echo '</form>';
    }
}
?>