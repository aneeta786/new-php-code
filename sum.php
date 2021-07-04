<html>  
<body>  
<form method="post">  
Enter First Number:  
<input type="text" name="no1" /><br><br>  
Enter Second Number:  
<input type="text" name="no2" id="metabox1" /><br><br>  
<input  type="submit" name="submit" id="metabox2" value="Submit">  
</form>  
<?php  
    if(isset($_POST['submit']))  
    {  
        $number1 = $_POST['no1'];  
        $number2 = $_POST['no2'];  
        $sum =  $number1+$number2;     
echo "The sum of $number1 and $number2 is: ".$sum;   
}  
?>  
</body>  
</html> 