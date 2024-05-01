<?php include('header.php');?>
<style>
<?php include ('css/providers.css'); ?>
</style>

<?php
$conn = mysqli_connect('localhost', 'admin', '1234', 'bakery_project');

if(!$conn){
    echo 'connection error'. mysqli_connect_error();
}?>

<div class='container'>
    <div class='row'>
        <div class='record'>
            <a href = 'a-food.php'>
                <img src='./images/aroma.png' alt='aroma bakery'>
            </a>
        </div>
        <div class='record'>
            <a href = 'm-food.php'>
            <img src='./images/mexims.png' alt='mexim bakery'>
            </a>
        </div>
    </div>
</div>


<?php include('footer.php')?>
