
<html>
 <?php 
include 'config.php';
?>
<style>
    body{
        background-image: url('img/hd-background-images-beautiful-background-hd-wallpapers-pulse-of-hd-background-images.jpg');
        background-size: cover;
        font-family: calibri;
    }
    #wel{
    }
   <style>
table,tr,th,td
{
 border-radius: 5px;
  padding: 5px;
}
table
{
  border-collapse:collapse;
 
}

td {
  text-align: center;
   
}

tr:hover {
  background-color: #ddd;
}

th{

    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #f2f2f2;
    color: black;
    
}

}
div {
   
    background-color: #f2f2f2;
    padding: auto;
}


}

table td button a{
  text-decoration: none;
 
}
input[type=submit] {
    width:220px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 25px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=reset] {
    width:200px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=text]
{
width: 350px;
    padding:10px 5px;
    margin: auto;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
select {

    width: 300px;
    padding: 10px 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color:white;
}

</style>
    </style>
    <body>

    <div id="wel">
        

            
        </center></div>
    </body>
</html><center>
<h1> Kemaskini Data </h1>
<br>

<?php
include ('config.php');

$ambil=mysql_query("SELECT * FROM jebat");
$data=mysql_fetch_array($ambil);
?>

<table width="510" border="0">
  <div class="form">
  <form action="Pros_updatej.php" method="POST"> <input type="hidden" name="id_barang" value="<?php echo $data['id_barang'];?>">
      
      <tr>
  <th scope="col">Katil: </th>
  <th scope="col"><div align="left">
    <input type="text" name="katil" value="<?php echo $data['katil'];?>">
    
  </tr>
  <tr>
  <th scope="col">Locker: </th>
  <th scope="col"><div align="left">
  <input type="text" name="locker" value="<?php echo $data['locker'];?>">
  </div>
  </th>
  </tr>

  <tr>
  <th scope="col">Kipas :</th>
  <th scope="col"><div align="left">
  <input type="text" name="kipas" value="<?php echo $data['kipas'];?>">
  </div>
  </th>
  </tr>


  <tr>
  <th scope="col">Meja :</th>
  <th scope="col"><div align="left">
  <input type="text" name="meja" value="<?php echo $data['meja'];?>">
  </div>
  </th>
  </tr>

  <tr>
  <th scope="col">Cermin :</th>
  <th scope="col"><div align="left">
  <input type="text" name="cermin" value="<?php echo $data['cermin'];?>">
  </div>
  </th>
  </tr>




       
     </div>
     </th>
     </tr>
           

  
     
       
     </div>
     </th>
     </tr>
  </table>  <input type="submit" name="SIMPAN" value="SIMPAN">

</center>