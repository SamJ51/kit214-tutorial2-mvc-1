<?php
class ViewSearchBox
{
    public function output()
    {
        ?>
        <form action="index.php" method="get">
            <input type="text" name="search" placeholder="Search by first or last name" />
            <input type="submit" value="Search" />
        </form>
        <?php
    }
}
?>