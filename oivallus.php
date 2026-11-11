<?php include("header.php") ?>

<div class="container">

    <?php
        if(!$_GET["name"]) {
            echo "<h2>Moikka Anon</h2>";
        } else {
            echo "<h2> Moikka " . $_GET["name"] . "</h2>";
        }  
    ?>

    <div class="form">
        <form action="add-oivallus.php?name=<?php echo $_GET["name"]; ?>">

        <label for="idea">Add new</label>
        <input type="text" name="idea" placeholder="Enter text">
        <div>
            <label for="category">Choose category</label>
        
            <select name="category" id="">
                <option value="System">System</option>
                <option value="Programming">Programming</option>
                <option value="PHP">PHP</option>
            </select>
        </div>
        <input type="submit">
    </form>
    </div>

    <?php include("list-oivallus.php"); ?>
    
    <?php include("footer.php") ?>
</div>
