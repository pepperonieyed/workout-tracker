<?php
    include_once("header.php");
?>
    <header>
        <nav>
            <ul>
                <li>Home</li>
                <li>Test</li>
            </ul>
        </nav>
    </header>
    
    <main>
        <div id="content">
            <?php
                // We already checked if the page exists in header.php
                include("pages/" . $page . ".php");
            ?>
        </div>
    </main>
    <?php echo $DB_HOST; ?>

<?php
    include_once("footer.php");
?>
