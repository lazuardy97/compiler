<?php
$current = "";
$answer = "";

if (!empty($_POST)) {
    $current = $_POST['cppcode'];
    $file = "hello.cpp";
    file_put_contents($file, $current);

    putenv("PATH=C:\Program Files (x86)\Dev-Cpp\MinGW64\bin");
    //putenv("https://rextester.com/rundotnet/api");
    shell_exec("g++ hello.cpp -o hello.exe");
    $answer = shell_exec("hello.exe");
}
?>
<html>
<style>
    .txtarea {
        resize: none;
        outline: none;
        width: 800px;
        height: 400px;
        border: 3px solid #cccccc;
        padding: 5px;
        font-family: 'Times New Roman', Times, serif;
        background-position: bottom right;
        background-repeat: no-repeat;
        font-size: 25px;
        color: #FFFFFF;
    }
</style>
<form method="POST">
    <textarea name="cppcode" style="background:red;" placeholder="Enter C++" class="txtarea"><?php echo $current; ?></textarea>
    <input type="submit" value="RUN">
    <textarea name="cppcode2" style="background:blue;" placeholder="Hasil" class="txtarea"><?php echo $answer; ?></textarea>
</form>

</html>
