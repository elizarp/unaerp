<div class="container">
    <h2>You are in the View: application/views/heroes/index.php (everything in this box comes from that file)</h2>
    <!-- add hero form -->
    <div>
        <h3>Add a hero</h3>
        <form action="<?php echo URL; ?>heroes/addhero" method="POST">
            <label>Name</label>
            <input type="text" name="name" value="" required />
            <label>Race</label>
            <input type="text" name="race" value="" required />
            <label>Height</label>
            <input type="number" name="height" value="" />
            <input type="submit" name="submit_add_hero" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div>
        <h3>Amount of heroes (data from second model)</h3>
        <div>
            <?php echo $amount_of_heroes; ?>
        </div>
        <h3>List of heroes (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Race</td>
                <td>Height</td>
                <td>DELETE</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($heroes as $hero) { ?>
                <tr>
                    <td><?php if (isset($hero["id"])) echo $hero["id"]; ?></td>
                    <td><?php if (isset($hero["name"])) echo $hero["name"]; ?></td>
                    <td><?php if (isset($hero["race"])) echo $hero["race"]; ?></td>
                    <td><?php if (isset($hero["height"])) echo $hero["height"]; ?></td>
                    <td><a href="<?php echo URL . 'heroes/deletehero/' . $hero["id"]; ?>">x</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
