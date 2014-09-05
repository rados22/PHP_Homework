<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="" method="POST">
    <textarea name="inputStr"></textarea>
    <input type="text" name="banned-list">
    <input type="submit" name="submit" value="Filter">
</form>

<?php
if(isset($_POST['submit'])&& isset($_POST['banned-list'])) {
    $text = $_POST['inputStr'];
    $bannedWords = explode(', ', $_POST['banned-list']);
    foreach ($bannedWords as $word) {
        $text = str_replace($word, str_repeat('*', strlen($word)), $text);
    }?>
   <p><?php echo $text ?></p>
<?php }?>

</body>
</html>