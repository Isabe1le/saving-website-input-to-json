<?php
if(isset($_POST['submit'])) {
    $file = "data.json";
    $arr = array(
        'text-box-one-value'     => $_POST['text-box-one-name'],
        'text-box-two-value'    => $_POST['text-box-two-name']
    );
    $json_string = json_encode($arr);
    file_put_contents($file, $json_string);
    echo $json_string;
}
?>
<!doctype html>
<html>
<head>
</head>
<body>
<div style="text-align: center;">
    <h1>Form</h1>
    <form name="input-form" method="post" action="">
        <p>
            <label for="text">Value one: </label>
            <input type="text" name="text-box-one-name" id="text-box-one" placeholder="Placeholder value one" autofocus required>
        </p>
        <p>
            <label for="text">Value two: </label>
            <input type="text" name="text-box-two-name" id="text-box-two" placeholder="Placeholder value two" autofocus required>
        </p>
        <p style="text-align: center;">
            <input type="submit" name="submit" id="submit" value="Submit">
        </p>
    </form>
</div>
</body>
</html>
