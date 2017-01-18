<?php include 'baglanti.php'; ?>


<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTf-8">
<title>RMP</title>
<link rel="stylesheet" href="new 1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<style>

#nvb {margin-top: 40px;}

#rmp{
	font-size: 300%;
	color: red;
	text-shadow:2px 3px 4px #999;
}
body{
	padding-top: 70px;
}
#is{
	color: red;
}

#p1 {margin-top: 130px;
	margin-left: 102px;
	font-size: 200%;
	color:black;
}
#p2{margin-left: 102px;
	font-size: 200%;
	color:black;
}	

#p3{margin-top: 50px;
	margin-left: 102px;
	font-size: 120%;
	
}

#p4{margin-left: 102px;
	font-size: 120%;
		}
		
#b{margin-left:100px;
	margin-top: 30px;
}		
		

body {
     
      background-size:cover;
   }

   #aaa {margin-left:220px;
	   
   }
   
   #bbb {margin-left:220px;
	   
   }

   #ky {margin-left:150px;}
   
   #kp {margin-right:250px;
	   
   }
 
   #iner {
	 height:300px;
		background-color:transparent;
	   margin-top:80px;
	   margin-left:108px;
	   margin-right:108px;
   }
 
	
 
 
 
	#c1{margin-left:100px;
		}
		
		
	#as {margin-left:70px;
		
	}

	
	#hrihh {color:blue;
			font-size:18px;
	}
	
	#gset  {color:blue;
			font-size:18px;
			}
	
	#kiap {font-size:18px;
		color:blue;
	}
	
	
	#yt{height:100px;
	margin-left: 480px;}
	
	#fb{height:50px;
		margin-right:30px;}
	
	#tw{height:50px;}
	
	#smb{margin-left:510px;}
	
	
	#yeni{margin-left:150px;
		margin-top:50px;
		
		
	}
	
	
	#çoby{font-size:18px;
	margin-left:70px;
	color:blue;}
	
	#eyhr{font-size:18px;
	margin-left:24px;
	color:blue;}
	
	#ese{font-size:18px;
	margin-left:0px;
	color:blue;}
	
	
</style>

</head>

<body background="resim/raporlamaresmi.jpg" height="250px" width="250px">

<?php
if($_POST){
//print_r($_POST);

	$yemek = $_POST["yemek"];
	$tarih = $_POST["tarih"];
	
	
	
	$ekle = "INSERT INTO `yemekkayitleri` (`id`, `yemekid`, `tarih`) VALUES (NULL, '$yemek', '$tarih')";
	$kaydet = $link->query($ekle) or die("kayıt eklenemedi.");
}
?>

<nav id="nvb" class="navbar navbar-transparent navbar-fixed-top">

<div class="container">
<button class="navbar-toggle" data-toggle="collapse" data-target=".ackapa">
<div style="background-color:red" class="icon-bar"></div><div style="background-color:red" class="icon-bar"></div><div style="background-color:red" class="icon-bar"></div>

</button>
<div class="navbar-header">
<a class="navbar-brand" id="rmp" href="#"><strong><em>RMP</em></strong></a>
</div>
<ul class="nav navbar-nav">
<li id="AS" class=><a id="as" href="#"><strong>Ana Sayfa</strong></a></li>
</ul>
<div class="collapse navbar-collapse ackapa">
 <ul class="nav navbar-nav navbar-right">

<li><a href="#"><strong>Özellikler</strong></a></li>
<li><a href="#"><strong>Fiyatlar</strong></a></li>
      <li class="dropdown">
<a id="is" class="dropdown-toggle" data-toggle="dropdown" href="#"><strong>İletişim</strong>
<span class="caret"></span></a>
<ul class="dropdown-menu">
<li><a href="#">Tel:+902123734681</a></li>
<li><a href="#">E-Mail:hızlıraporlama@rpm.com</a></li>

</ul>
</li>
</ul>
   
</div>
</div>
</nav>

<p id="p1"><strong>Yenilikçi restorantlar için,</strong><p>
<p id="p2"><strong>online menu raporlama programı!</p></strong>
<p id="p3"><strong>Misafirlerinize daha iyi hizmet verebilmek için ,</strong></p>
<p id="p4"><strong>hızlı menu raporlama ile nokta atış sağlayın.</strong></p> 

<div class="container">

  <h4>Memnun Kalırsanız Abone Olun!</h4>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Ücretsiz Deneyin</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 id="bbb" class="modal-title">Yemek Seçimi</h4>
        </div>
        <div class="modal-body">
          
  <h4 id="aaa">Sipariş Seçiniz</h4>
  <form class="form-horizontal" method="POST" name="formkayit">
  
    <div class="form-group">
       <label class="control-label col-sm-2" for="yemek">Yemek</label>
	   <div class="col-sm-10">
	   
	   <?php 
	   $result = $link->query('select * from yemekcesitleri') or die ('yemekcesitlerine Bağlanamadı.');
		?>
		 <select class="form-control" name="yemek" id="yemek">
		<option>Yemek Seçiniz</option>
	   <?php
	   while($secenekler = mysqli_fetch_row($result)){
		   echo'<option value="'.$secenekler[0].'">'.$secenekler[1].'</option>';
	   }
	   
	 ?>
	  
     
      </select>
	  </div>
	  
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="tarih">Tarih</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" name="tarih" id="tarih" placeholder="Tarih Giriniz">
      </div>
    </div>
           
      
        
          
        
 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button id="ky" type="submit" class="btn btn-default">Kaydet</button>
      </div>
    </div>
  </form>		  	  
		 
        </div>
        <div class="modal-footer">
          <button id="kp" type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 

<div id="iner" class="container>
  <div class="row">
  <div id="c1" class="row">
  <div class="col-xs-6 col-md-4" >
  
  <br>
  <br>
  <br><p id="kiap"><strong>Kobiler İçin Avantajlı Paketler</p></strong>
  <ol>
  <li><strong>Bir Ay Ücretsiz Kullanım</strong></li>
  <li><strong>Kobilere Destek Paketler</strong></li>
  <li><strong>Stoklama Maliyetlerinden Kurtulma</strong></li>
  </ol>
  <button type="button" class="btn btn-primary">KEŞFET</button>
  </div>
  <div class="col-xs-6 col-md-4">
  <br>
  <br>
  <br><p id="hrihh"><strong>Hızlı Raporlama İle Happy Hour</p></strong>
  <ol>
  <li><strong>Misafilerinize Daha İyi Sunum</strong> </li>
  <li><strong>Aylık İkramlar</strong></li>
  <li><strong>En Mutlu Anı Beraber Yaşayın</strong></li>
  </ol>
  <button type="button" class="btn btn-primary">KEŞFET</button>
  </div>
  <div class="col-xs-6 col-md-4">
  <br>
  <br>
  <br><p id="gset"><strong>Gün Sonu Envanter Takibi</p></strong>
  <ol>
  <li><strong>Gereksiz Stoklardan Kurtulun</strong></li>
  <li><strong>Haftalık Ve Aylık Tedarik Kolaylığı</strong></li>
  </ol>
  <br>
  <button type="button" class="btn btn-primary">KEŞFET</button>
  </div>
</div>
  
  
  
    
  </div>
</div>


<footer id="ftr">


		<h3 id="smb"><strong>Sosyal Medyada Biz</strong></h3>
		<a class="youtube" href="https://www.youtube.com">
		<img id="yt" src="resim/ytb.jpg">
		</a>
		
		<a class="facebook" href="https://www.facebook.com">
		<img id="fb" src="resim/fcb.jpg">
		</a>
		
		<a class="twitter" href="https://www.twitter.com">
		<img id="tw" src="resim/twt.jpg">
		</a>
	
			
</footer>		
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 </div>

 
 
 
 
 
 
 
 
 
 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>