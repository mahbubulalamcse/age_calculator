<!DOCTYPE html>
<!-- code by webdevtrick ( https://webdevtrick.com ) -->
<html>
<head>
<title>PHP Age Calculator | Webdevtrick.com</title> 
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<style>
.calculate {
	width: 12%;
	background-color:green ;
	color: white;
	font-size: 16pt;
	border-radius: 10px;
}
form option {
	background-color: green;
	color: white;
}
h1 {color:green;font-weight:bold;}
</style>
</head>
<body>
 <div align="center">
<br><br><br><br>
<h1>Enter Your Date of Birth</h1>
 
<form action="index.php" method="post" class="drop">
 <select name="day" style="width:5%;height:30px;border:2px solid green;font-size:15px;color:green;"> 
 <option value="01">01</option>
 <option value="02">02</option>
 <option value="03">03</option>
 <option value="04">04</option>
 <option value="05">05</option>
 <option value="06">06</option>
 <option value="07">07</option>
 <option value="08">08</option>
 <option value="09">09</option>
 <option value="10">10</option>
 <option value="11">11</option>
 <option value="12">12</option>
 <option value="13">13</option>
 <option value="14">14</option>
 <option value="15">15</option>
 <option value="16">16</option>
 <option value="17">17</option>
 <option value="18">18</option>
 <option value="19">19</option>
 <option value="20">20</option>
 <option value="21">21</option>
 <option value="22" selected="selected">22</option>
 <option value="23">23</option>
 <option value="24">24</option>
 <option value="25">25</option>
 <option value="26">26</option>
 <option value="27">27</option>
 <option value="28">28</option>
 <option value="29">29</option>
 <option value="30">30</option>
 <option value="31">31</option>
 
</select>
 
 <select name="month" style="width:9%;height:30px;border:2px solid green;font-size:15px;color:green;">
 <option value="01">January</option>
 <option value="02">Febuary</option>
 <option value="03">March</option>
 <option value="04">April</option>
 <option value="05">May</option>
 <option value="06">June</option>
 <option value="07">July</option>
 <option value="08">August</option>
 <option value="09">September</option>
 <option value="10">October</option>
 <option value="11">November</option>
 <option value="12" selected="selected">December</option>
 </select>
 
 <select name="year" style="width:6%;height:30px;border:2px solid green;font-size:15px;color:green;">
 <option value="2014">2014</option>
 <option value="2013">2013</option>
 <option value="2012">2012</option>
 <option value="2011">2011</option>
 <option value="2010">2010</option>
 <option value="2009">2009</option>
 <option value="2008">2008</option>
 <option value="2007">2007</option>
 <option value="2006">2006</option>
 <option value="2005">2005</option>
 <option value="2004">2004</option>
 <option value="2003">2003</option>
 <option value="2002">2002</option>
 <option value="2001">2001</option>
 <option value="2000" selected="selected">2000</option>
 <option value="1999">1999</option>
 <option value="1998">1998</option>
 <option value="1997">1997</option>
 <option value="1996">1996</option>
 <option value="1995">1995</option>
 <option value="1994">1994</option>
 <option value="1993">1993</option>
 <option value="1992">1992</option>
 <option value="1991">1991</option>
 <option value="1990">1990</option>
 <option value="1989">1989</option>
 <option value="1988">1988</option>
 <option value="1987">1987</option>
 <option value="1986">1986</option>
 <option value="1985">1985</option>
 <option value="1984">1984</option>
 <option value="1983">1983</option>
 <option value="1982">1982</option>
 <option value="1981">1981</option>
 <option value="1980">1980</option>
 <option value="1979">1979</option>
 <option value="1978">1978</option>
 <option value="1977">1977</option>
 <option value="1976">1976</option>
 <option value="1975">1975</option>
 <option value="1974">1974</option>
 <option value="1973">1973</option>
 <option value="1972">1972</option>
 <option value="1971">1971</option>
 <option value="1970">1970</option>
 <option value="1969">1969</option>
 <option value="1968">1968</option>
 <option value="1967">1967</option>
 <option value="1966">1966</option>
 <option value="1965">1965</option>
 <option value="1964">1964</option>
 <option value="1963">1963</option>
 <option value="1962">1962</option>
 <option value="1961">1961</option>
 <option value="1960">1960</option>
 <option value="1959">1959</option>
 <option value="1958">1958</option>
 <option value="1957">1957</option>
 <option value="1956">1956</option>
 <option value="1955">1955</option>
 <option value="1954">1954</option>
 <option value="1953">1953</option>
 <option value="1952">1952</option>
 <option value="1951">1951</option>
 <option value="1950">1950</option>
 <option value="1949">1949</option>
 <option value="1948">1948</option>
 <option value="1947">1947</option>
 <option value="1946">1946</option>
 <option value="1945">1945</option>
 <option value="1944">1944</option>
 <option value="1943">1943</option>
 <option value="1942">1942</option>
 <option value="1941">1941</option>
 <option value="1940">1940</option>
 <option value="1939">1939</option>
 <option value="1938">1938</option>
 <option value="1937">1937</option>
 <option value="1936">1936</option>
 <option value="1935">1935</option>
 <option value="1934">1934</option>
 <option value="1933">1933</option>
 <option value="1932">1932</option>
 <option value="1931">1931</option>
 <option value="1930">1930</option>
 </select>
 <br> <br>
	<input type="submit" name="submit" value="Calculate" class="calculate" />
 </form> 


</div>
<hr>
<div class="" style="text-align:center">
<?php
if(isset($_POST['submit']))
{
$d=$_POST['day'];
$m=$_POST['month'];
$y=$_POST['year'];
 
$dob=$d.'-'.$m.'-'.$y;

$bday=new DateTime($dob);

$t=date('d-m-Y');
	
$age=$bday->diff(new DateTime);
 
$today=date('d-m-Y'); 
echo '<br />';
echo '<b>Your Birth date: </b>';
echo $dob;
echo '<br>';
echo '<b>Your Age : </b> ';
echo $age->y;
echo ' Years, ';
echo $age->m;
echo ' Months, ';
echo $age->d;
echo ' Days';
}
?>
</div>
</body>
</html>