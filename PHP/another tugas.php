<!DOCTYPE html>
<html>

<head>
    <title>Profil Mahasiswa</title>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="tanya.js" type="text/javascript"></script>
</head>

<body>
    <table id="table1">
        <tr>
            <th colspan="3">
                <img id="foto1" src="img/foto.jpg" alt="foto">
            </th>
        </tr>
        <tr>

            <td colspan="3">
                <h1>Satya Haryo Prasojo</h1>
            </td>>

        </tr>
        <tr>
            <td colspan="3">
                <h2>185150301111017</h2>
            </td>

            <tr>
                <nav>
                    <a href="https://ub.ac.id/"><img id="foto2" src="img/ub1.png" alt="ub1" onclick="ub()" value="Calljavascriptfunction from tanya.js"></a>

                </nav>

            </tr>
    </table>
	<br><br>
    <h3>Mahasiswa prodi Teknik Komputer angkatan 2018. Asal dari Gresik, Jawa timur. Tidak begitu pandai ngoding karena susah dalam menghafal syntax. Hobi menghabiskan hari diatas kasur sambil melakukan hal yang tidak berguna. japanese culture, seiyuu and
        vtuber enthusiast.
        <br><br>
		</h3>
    <hr>
	<?php
$menang ='win';
$kotak = array('','','','','','','','','',);
if(isset($_POST["next"]))
{
	$kotak[0]=$_POST["kotak0"];
	$kotak[1]=$_POST["kotak1"];
	$kotak[2]=$_POST["kotak2"];
	$kotak[3]=$_POST["kotak3"];
	$kotak[4]=$_POST["kotak4"];
	$kotak[5]=$_POST["kotak5"];
	$kotak[6]=$_POST["kotak6"];
	$kotak[7]=$_POST["kotak7"];
	$kotak[8]=$_POST["kotak8"];

	if (($kotak[0]=='x' && $kotak[1]=='x' && $kotak[2]=='x')||($kotak[3]=='x' && $kotak[4]=='x' && $kotak[5]=='x')||($kotak[6]=='x' && $kotak[7]=='x' && $kotak[8]=='x')
	||($kotak[0]=='x' && $kotak[3]=='x' && $kotak[6]=='x')||($kotak[1]=='x' && $kotak[4]=='x' && $kotak[7]=='x')||($kotak[2]=='x' && $kotak[5]=='x' && $kotak[8]=='x')
	||($kotak[0]=='x' && $kotak[4]=='x' && $kotak[8]=='x')||($kotak[2]=='x' && $kotak[4]=='x' && $kotak[6]=='x'))
	{
		$menang ='x';
		echo "X menang";
	}
	$isi=0;
	for($i=0;$i<9;$i++)
	{
		if($kotak[$i]=='')
		{
			$isi=1;
		}
	}
	if($isi==1)
	{
		$i=rand()%8;
		while($kotak[$i]!='')
		{
			$i=rand()%8;
		}
		$kotak[$i]='o';
		if (($kotak[0]=='o' && $kotak[1]=='o' && $kotak[2]=='o')||($kotak[3]=='o' && $kotak[4]=='o' && $kotak[5]=='o')||($kotak[6]=='o' && $kotak[7]=='o' && $kotak[8]=='o')
		||($kotak[0]=='o' && $kotak[3]=='o' && $kotak[6]=='o')||($kotak[1]=='o' && $kotak[4]=='o' && $kotak[7]=='o')||($kotak[2]=='o' && $kotak[5]=='o' && $kotak[8]=='o')
		||($kotak[0]=='o' && $kotak[4]=='o' && $kotak[8]=='o')||($kotak[2]=='o' && $kotak[4]=='o' && $kotak[6]=='o'))
		{
			$menang='o';
			echo "O menang";
		}
	}	
	elseif($menang=='win')
	{
		$menang='seri';
		echo "Game Seri";
	}
}
?>
<form name="tictactoe" method="post" action="another tugas.php">
<?php
for($i=0;$i<9;$i++)
{
	printf('<input type="text" id="box" name="kotak%s" value="%s">', $i ,$kotak[$i]);
	if($i==2||$i==5||$i==8)
	{
		echo ("<br>");
	}
}
if($menang=='win')
{
	echo('<input type="submit" name="next" value="Next Move" id="lanjut">');
}
else
{
	echo('<input type="button"nama="new" value ="Play Again" id "lanjut" onclick ="window.location.href=\'another tugas.php\'""');
}
?>
</form>
<h3>For More Information Visit : </h3>
    <table>
        <tr>
            <td>
                <nav>
                    <a href="https://www.facebook.com/satyapiul"><img id="foto3" src="img/fb.png" alt="fb" onclick="fb()" value="Calljavascriptfunction from tanya.js"></a>
                </nav>
            </td>
            <td>
                <a href="https://twitter.com/Satya227_"><img id="foto3" src="img/twitter.jfif" alt="twitter" onclick="twitter()" value="Calljavascriptfunction from tanya.js"></a>
            </td>
        </tr>
    </table>

</body>

</html>