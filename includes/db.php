<?
    include_once "config.php";
    
    $connect = mysqli_connect(
        $config["bd"]["host"], 
        $config["bd"]["user"], 
        $config["bd"]["pass"], 
        $config["bd"]["dbname"]
    );
?>