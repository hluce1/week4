
<?php include "templates/header.php"; ?>

<!--form to collect data for each artwork-->

<form method="post">
    <label for="artistname">Artist Name</label>
    <input type="text" name="artistname" id="artistname">

    <label for="worktitle">Work Title</label>
    <input type="text" name="worktitle" id="worktitle">

    <label for="workdate">Work Date</label>
    <input type="text" name="workdate" id="workdate">

    <label for="worktype">Work Type</label>
    <input type="text" name="worktype" id="worktype">

    <input type="submit" name="submit" value="Submit">

</form>
<?php include "templates/footer.php"; ?>
