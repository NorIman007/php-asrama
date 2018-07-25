
<html>
 <?php 
include 'config.php';
?><style>
    body{
        background-image: url('img/hd-background-images-beautiful-background-hd-wallpapers-pulse-of-hd-background-images.jpg');
        background-size: cover;
        font-family: calibri;
    }
    #wel{
    }
    .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 23px 60px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    font-weight: bold;
}

.button1 {
    background-color: transparent; 
    color: white; 
    border: 2px solid white;

}

.button1:hover {
    background-color: blue;
    color: white;
        border: 2px solid blue;

}

    
table,tr,th,td
{
  border: 1px solid grey;
  padding: 8px;
}
table
{
  border-collapse:collapse;
}

td {
  text-align: center;
}
tr{
    color: white;
}
tr:hover {
  background-color: #ddd;   
   color: black;

}

th{
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}

table td button a{
  text-decoration: none;
  color: black;
}
.editbtn{
    width:100px;
    background-color: #4CAF50;
    color: white;
    padding: 5px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}
.deletebtn{
    width:100px;
    background-color: #E04040 ;
    color: white; 
    padding: 5px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}
.bayarbtn{
    width:100px;
    background-color: #43B2E7;
    color: white;
    padding: 5px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
}
        input[type=button] {
    width:220px;
    background-color: #4CAF50;
    color: white;
    padding: 10px 25px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}



    </style>
    <body>

    <div id="wel">
        
            <center>
    <p> <br>
      <h1><font face="monospace" color="white">Senarai Barang Asrama</font> </h1>
      <p>
      <br>
<table width="676" height="162">
<tr>
<th>ID</th>
<th>KATIL</th>
<th>LOCKER</th>
<th>KIPAS</th>
<th>MEJA</th>
<th>CERMIN</th>
<th>TINDAKAN</th>




</tr>

<?php
    $no=1;

$ambil=mysql_query("SELECT * FROM jebat");
//
while($data=mysql_fetch_array($ambil)) {
?>

<tr>
<td> <?php echo $data['id_barang']; ?>      </td>
<td><?php echo $data['katil']; ?></td>
<td><?php echo $data['locker']; ?></td>
<td><?php echo $data['kipas']; ?></td>
<td><?php echo $data['meja']; ?></td>
<td><?php echo $data['cermin']; ?></td>
<td> <a class="editbtn"  href="editlekir.php?id=<?php echo $data['id_barang'];?>">EDIT</td>



      
</tr>

<?php 
}
?>


            
        </center></div>
    </body>
</html>