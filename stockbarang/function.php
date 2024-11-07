<?php
session_start();

$conn = mysqli_connect("localhost","root","","stockbarang");


//stock
if(isset ($_POST['addnewbarang'])){
	$namabarang = $_POST['namabarang'];

	$deskripsi = $_POST['deskripsi'];
	$stocktersedia = $_POST['stocktersedia'];
	$hargajual = $_POST['hargajual'];
	$hargablbrg = $_POST['hargablbrg'];
	$untung = $_POST['untung'];

	
	

			$addtotable = mysqli_query($conn,"insert into sisabarang (namabarang, hargablbrg, deskripsi, stocktersedia, hargajual, untung) values ('$namabarang', '$hargablbrg',  '$deskripsi','$stocktersedia','$hargajual','$untung')");

	if($addtotable){
		header('location:index.php') ('location:indexmember.php');
	} else {
		echo 'gagal';
		header('location:index.php') ('location:indexmember.php');
	}
		
	

};

//memberdata
if(isset ($_POST['addnewbarangmember'])){
	$nmbrg = $_POST['nmbrg'];

	$des = $_POST['des'];
	
	$hrgjl = $_POST['hrgjl'];
	$hrgjualbrg = $_POST['hrgjualbrg'];
	$untg = $_POST['untg'];

	
	

			$addtotable = mysqli_query($conn,"insert into sisabarangmember (nmbrg, hrgjualbrg, des, hrgjl, untg) values ('$nmbrg', '$hrgjualbrg',  '$des','$hrgjl','$untg')");

	if($addtotable){
		header('location:indexmember.php');
	} else {
		echo 'gagal';
		header('location:indexmember.php');
	}
		
	

};



//cashbon

if(isset ($_POST['addcashbon'])){
	$namapenerima = $_POST['namapenerima'];
	$jlhcb = $_POST['jlhcb'];
	
	$allowed_extension = array('png','jpg');
	$nama = $_FILES['file']['name'];
	$dot = explode('.',$nama);
	$ekstensi = strtolower(end($dot));
	$ukuran = $_FILES['file']['size'];
	$file_tmp = $_FILES['file']['tmp_name'];

	$image = md5(uniqid($nama,true) . time()). '.'.$ekstensi; 

	

			$addtotable = mysqli_query($conn,"insert into cashbon (namapenerima, jlhcb, image) values ('$namapenerima','$jlhcb','$image')");

	if($addtotable){
		header('location:cashbon.php');
	} else {
		echo 'gagal';
		header('location:cashbon.php');
	}
		
	

};







//tempo

if(isset ($_POST['addtempo'])){
	 $namabarang = $_POST['namabarang'];
     $jenisbarang = $_POST['jenisbarang'];
     $hargatotal = $_POST['hargatotal'];
     $sudahdibayar = $_POST['sudahdibayar'];
     $sisa = $_POST['sisa'];
     $jatuhtempo =$_POST['jatuhtempo'];
     $namapengirim =$_POST['namapengirim'];
                                               
     $status =$_POST['status'];
	



	

			$addtotable = mysqli_query($conn,"insert into tempo (namabarang, jenisbarang, namapengirim, hargatotal, sudahdibayar, sisa, jatuhtempo, status ) values ('$namabarang','$jenisbarang','$namapengirim','$hargatotal','$sudahdibayar','$sisa','$jatuhtempo','$status')");

	if($addtotable){
		header('location:tempo.php');
	} else {
		echo 'gagal';
		header('location:tempo.php');
	}
		

	

};

//member
if(isset ($_POST['addnewmember'])){
	$namamember = $_POST['namamember'];
	$notlp =$_POST['notlp'];
	$alamatmember =$_POST['alamatmember'];


	$addtotable = mysqli_query($conn,"insert into member (namamember, notlp, alamatmember) values ('$namamember','$notlp', '$alamatmember')");

	if($addtotable){
		header('location:member.php');
	} else {
		echo 'gagal';
		header('location:member.php');
	}
};

//editmember
if(isset($_POST['editmember'])){
	$idmember = $_POST['idmember'];
	$namamember = $_POST['namamember'];
	$notlp = $_POST['notlp'];
	$alamatmember = $_POST['alamatmember'];

	$update = mysqli_query($conn,"update member set namamember='$namamember', notlp='$notlp', alamatmember='$alamatmember' where idmember='$idmember'");
	if($update){
				header('location:member.php');
	} else {
				echo 'gagal';
				header('location:member.php');
	}
}

//hapusmember
if(isset($_POST['hapusmember'])){
	$idmember = $_POST['idmember'];

	$hapus = mysqli_query($conn,"delete from member where idmember='$idmember'");
	if($hapus){
				header('location:member.php');
	} else {
				echo 'gagal';
				header('location:member.php');
	}
}

//jasa
if(isset ($_POST['addnewjasa'])){
	$namajasa = $_POST['namajasa'];
	$hargajasa =$_POST['hargajasa'];


	$addtotable = mysqli_query($conn,"insert into jasa (namajasa, hargajasa) values ('$namajasa','$hargajasa')");

	if($addtotable){
		header('location:jasa.php');
	} else {
		echo 'gagal';
		header('location:jasa.php');
	}
};

//editjasa
if(isset($_POST['editjasa'])){
	$idj = $_POST['idj'];
	$namajasa = $_POST['namajasa'];
	$hargajasa = $_POST['hargajasa'];

	$update = mysqli_query($conn,"update jasa set namajasa='$namajasa', hargajasa='$hargajasa' where idjasa='$idj'");
	if($update){
				header('location:jasa.php');
	} else {
				echo 'gagal';
				header('location:jasa.php');
	}
}


//hapusjasa
if(isset($_POST['hapusjasa'])){
	$idj = $_POST['idj'];

	$hapus = mysqli_query($conn,"delete from jasa where idjasa='$idj'");
	if($hapus){
				header('location:jasa.php');
	} else {
				echo 'gagal';
				header('location:jasa.php');
	}
}
	

//edittempo
if(isset($_POST['edittempo'])){
	$idt = $_POST['idt'];
	$status = $_POST['status'];
	$hargatotal = $_POST['hargatotal'];
	$sudahdibayar = $_POST['sudahdibayar'];
	

	$update = mysqli_query($conn,"update tempo set hargatotal='$hargatotal', sudahdibayar='$sudahdibayar', status='$status' where idtempo='$idt'");
	if($update){
				header('location:tempo.php');
	} else {
				echo 'gagal';
				header('location:tempo.php');
	}
}


//hapustempo
if(isset($_POST['hapustempo'])){
	$idt = $_POST['idt'];

	$hapus = mysqli_query($conn,"delete from tempo where idtempo='$idt'");
	if($hapus){
				header('location:tempo.php');
	} else {
				echo 'gagal';
				header('location:tempo.php');
	}
}
	





//penghasilan
	if(isset ($_POST['addservice'])){
	$namabarang = $_POST['namabarang'];
	$hargajual = $_POST['hargajual'];
	$namajasa = $_POST['namajasa'];
	$hargajasa = $_POST['hargajasa'];
	$nopol = $_POST['nopol'];
	

	
	
	$addtotable = mysqli_query($conn,"insert into penghasilan (namabarang, hargajual, namajasa, hargajasa, nopol) values ('$namabarang','$hargajual','$namajasa','$hargajasa','$nopol')");

	if($addtotable){
		header('location:penghasilan.php');
	} else {
		echo 'gagal';
		header('location:penghasilan.php');
	}
};


//penghasilan montir
	if(isset ($_POST['addmontir'])){
	$namamontir = $_POST['namamontir'];
	
	$namajasa = $_POST['namajasa'];
	$hargajasa = $_POST['hargajasa'];
	$totalgaji = $_POST['totalgaji'];
	

	
	
	$addtotable = mysqli_query($conn,"insert into penghasilanmontir (namamontir, namajasa, hargajasa, totalgaji) values ('$namamontir', '$namajasa','$hargajasa', '$totalgaji')");

	if($addtotable){
		header('location:penghasilanmontir.php');
	} else {
		echo 'gagal';
		header('location:penghasilanmontir.php');
	}
};


//penghasilan owner
	if(isset ($_POST['addowner'])){
	$namabarang = $_POST['namabarang'];
	$hargajual = $_POST['hargajual'];
	$namajasa = $_POST['namajasa'];
	$hargajasa = $_POST['hargajasa'];
	$laba = $_POST['laba'];
	$lababarang = $_POST['lababarang'];
	$hargablbrg = $_POST['hargablbrg'];
	$untung = $_POST['untung'];
	
	
	
	$addtotable = mysqli_query($conn,"insert into penghasilanowner (namabarang,hargablbrg, untung, hargajual, namajasa, lababarang, hargajasa,  laba) values ('$namabarang','$hargablbrg','$untung', '$hargajual','$namajasa','$lababarang', '$hargajasa','$laba')");

	if($addtotable){
		header('location:penghasilanowner.php');
	} else {
		echo 'gagal';
		header('location:penghasilanowner.php');
	}
};


//gaji
	if(isset ($_POST['addgaji'])){
	$keterangan = $_POST['keterangan'];
	$namamontir = $_POST['namamontir'];
	$gajitotal = $_POST['gajitotal'];
	
	
	
	$addtotable = mysqli_query($conn,"insert into gaji (keterangan, namamontir, gajitotal) values ('$keterangan','$namamontir', '$gajitotal')");

	if($addtotable){
		header('location:gaji.php');
	} else {
		echo 'gagal';
		header('location:gaji.php');
	}
};




//barang masuk
	if(isset($_POST['addbarangmasuk'])){
		$barangnya = $_POST['barangnya'];
		$penerima = $_POST['penerima'];
		$qty = $_POST['qty'];

		

		$cekstocksekarang = mysqli_query($conn,"select * from sisabarang where idbarang='$barangnya'");
		$ambildatanya = mysqli_fetch_array($cekstocksekarang);

		
		$stocksekarang = $ambildatanya['stocktersedia'];

		if($stocksekarang >= $qty){
			$tambahkanstocksekarangdenganquantity = $stocksekarang+$qty;

			$addtomasuk = mysqli_query($conn,"insert into barangmasuk (idbarang,keterangan,qty) values('$barangnya','$penerima','$qty')");
			$updatestockmasuk = mysqli_query($conn,"update sisabarang set stocktersedia	='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
			if($addtomasuk&&$updatestockmasuk){
				header('location:masuk.php');
			} else {
				echo 'gagal';
				header('location:masuk.php');
			}

		} else {
			echo '
			
			';
		}

		
	

}


//barang keluar
		if(isset($_POST['addbarangkeluar'])){
		$barangnya = $_POST['barangnya'];
		$penerima = $_POST['penerima'];
		$qty = $_POST['qty'];

		

		$cekstocksekarang = mysqli_query($conn,"select * from sisabarang where idbarang='$barangnya'");
		$ambildatanya = mysqli_fetch_array($cekstocksekarang);

		
		$stocksekarang = $ambildatanya['stocktersedia'];

		if($stocksekarang >= $qty){
			$tambahkanstocksekarangdenganquantity = $stocksekarang-$qty;

			$addtomasuk = mysqli_query($conn,"insert into barangkeluar (idbarang,keterangan,qty) values('$barangnya','$penerima','$qty')");
			$updatestockmasuk = mysqli_query($conn,"update sisabarang set stocktersedia	='$tambahkanstocksekarangdenganquantity' where idbarang='$barangnya'");
			if($addtomasuk&&$updatestockmasuk){
				header('location:keluar.php');
			} else {
				echo 'gagal';
				header('location:keluar.php');
			}

		} else {
			echo '
			<script>
			alert("Stock saat ini tidak cukup);
			window.location.href="keluar.php";
			</script>
			';
		}

		
	

}

//edit stock
if(isset($_POST['editbarang'])){
	$idb = $_POST['idb'];
	$namabarang = $_POST['namabarang'];
	$stocktersedia = $_POST['stocktersedia'];
	$deskripsi = $_POST['deskripsi'];
	$hargablbrg = $_POST['hargablbrg'];

	$update = mysqli_query($conn,"update sisabarang set namabarang='$namabarang', stocktersedia='$stocktersedia', deskripsi='$deskripsi', hargablbrg='$hargablbrg' where idbarang='$idb'");
	if($update){
				header('location:index.php');
	} else {
				echo 'gagal';
				header('location:index.php');
	}
}

//edit stock member
if(isset($_POST['editbarangmember'])){
	$idb = $_POST['idb'];
	$namabarang = $_POST['namabarang'];
	$stocktersedia = $_POST['stocktersedia'];
	$deskripsi = $_POST['deskripsi'];
	$hargajual = $_POST['hargajual'];

	$update = mysqli_query($conn,"update sisabarang set namabarang='$namabarang', stocktersedia='$stocktersedia', deskripsi='$deskripsi', hargablbrg='$hargablbrg' where idbarang='$idb'");
	if($update){
				header('location:indexmember.php');
	} else {
				echo 'gagal';
				header('location:indexmember.php');
	}
}

//hapus stock member
if(isset($_POST['hapusbarangmember'])){
	$idb = $_POST['idb'];

	$gambar = mysqli_query($conn,"select * from sisabarang where idbarang='$idb'");
	$get = mysqli_fetch_array($gambar);
	$img = 'image/'.$get['image'];
	unlink($img);

	$hapus = mysqli_query($conn,"delete from sisabarang where idbarang='$idb'");
	if($hapus){
				header('location:indexmember.php');
	} else {
				echo 'gagal';
				header('location:indexmember.php');
	}
}

//hapus stock
if(isset($_POST['hapusbarang'])){
	$idb = $_POST['idb'];

	$gambar = mysqli_query($conn,"select * from sisabarang where idbarang='$idb'");
	$get = mysqli_fetch_array($gambar);
	$img = 'image/'.$get['image'];
	unlink($img);

	$hapus = mysqli_query($conn,"delete from sisabarang where idbarang='$idb'");
	if($hapus){
				header('location:index.php');
	} else {
				echo 'gagal';
				header('location:index.php');
	}
}


//edit masuk
if(isset($_POST['editbarangmasuk'])){
	$idb = $_POST['idb'];
	$idm = $_POST['idm'];
	
	$keterangan = $_POST['keterangan'];
	$qty = $_POST['qty'];

	$lihatstock = mysqli_query($conn, "select * from sisabarang where idbarang='$idb'");
	$stocknya = mysqli_fetch_array($lihatstock);
	$stocksekarang = $stocknya['stocktersedia'];

	$qtysekarang = mysqli_query($conn,"select * from barangmasuk where idmasuk='$idm'");
	$qtynya = mysqli_fetch_array($qtysekarang);
	$qtysekarang = $qtynya['qty'];
	if($qty>$qtysekarang){
		$selisih = $qty-$qtysekarang;
		$kurangi = $stocksekarang+$selisih;
		$kurangistocknya = mysqli_query($conn,"update sisabarang set stocktersedia='$kurangi' where idbarang='$idb'");
		$updatenya = mysqli_query($conn,"update barangmasuk set qty='$qty', keterangan='$keterangan' where idmasuk='$idm'");
		if($kurangistocknyak&&$updatenya){
				header('location:masuk.php');
			} else {
				echo 'gagal';
				header('location:masuk.php');
			}
	} else {
		$selisih = $qtysekarang-$qty;
		$kurangi = $stocksekarang-$selisih;
		$kurangistocknya = mysqli_query($conn,"update sisabarang set stocktersedia='$kurangi' where idbarang='$idb'");
		$updatenya = mysqli_query($conn,"update barangmasuk set qty='$qty', keterangan='$keterangan' where idmasuk='$idm'");
		if($kurangistocknya&&$updatenya){
				header('location:masuk.php');
			} else {
				echo 'gagal';
				header('location:masuk.php');
			}
	}







}

 //hapus masuk
 if(isset($_POST['hapusbarangmasuk'])){
 	$idb = $_POST['idb'];
 	$qty = $_POST['qty'];
 	$idm = $_POST['idm'];

 	$getdatastock =  mysqli_query($conn,"select * from sisabarang where idbarang='$idb'");

 	$data = mysqli_fetch_array($getdatastock);
 	$stock = $data['stocktersedia'];
 	$selisih = $stock-$qty;

 	$update = mysqli_query($conn,"update sisabarang set stocktersedia='$selisih' where idbarang='$idb'");
 	$hapusdata = mysqli_query($conn,"delete from barangmasuk where idmasuk='$idm'");

 	if($update&&$hapusdata){
 		header('location:masuk.php');

 	} else {
 		header('location:masuk.php');
 	}
 }





//edit keluar
if(isset($_POST['editbarangkeluar'])){
	$idb = $_POST['idb'];
	$idk = $_POST['idk'];
	
	$keterangan = $_POST['keterangan'];
	$qty = $_POST['qty'];

	$lihatstock = mysqli_query($conn, "select * from sisabarang where idbarang='$idb'");
	$stocknya = mysqli_fetch_array($lihatstock);
	$stocksekarang = $stocknya['stocktersedia'];

	$qtysekarang = mysqli_query($conn,"select * from barangkeluar where idkeluar='$idk'");
	$qtynya = mysqli_fetch_array($qtysekarang);
	$qtysekarang = $qtynya['qty'];
	if($qty>$qtysekarang){
		$selisih = $qty-$qtysekarang;
		$kurangi = $stocksekarang-$selisih;
		$kurangistocknya = mysqli_query($conn,"update sisabarang set stocktersedia='$kurangi' where idbarang='$idb'");
		$updatenya = mysqli_query($conn,"update barangkeluar set qty='$qty', keterangan='$keterangan' where idkeluar='$idk'");
		if($kurangistocknyak&&$updatenya){
				header('location:keluar.php');
			} else {
				echo 'gagal';
				header('location:keluar.php');
			}
	} else {
		$selisih = $qtysekarang-$qty;
		$kurangi = $stocksekarang+$selisih;
		$kurangistocknya = mysqli_query($conn,"update sisabarang set stocktersedia='$kurangi' where idbarang='$idb'");
		$updatenya = mysqli_query($conn,"update barangkeluar set qty='$qty', keterangan='$keterangan' where idkeluar='$idk'");
		if($kurangistocknya&&$updatenya){
				header('location:keluar.php');
			} else {
				echo 'gagal';
				header('location:keluar.php');
			}
	}







}





//hapus keluar
if(isset($_POST['hapusbarangkeluar'])){
 	$idb = $_POST['idb'];
 	$qty = $_POST['qty'];
 	$idk = $_POST['idk'];

 	$getdatastock =  mysqli_query($conn,"select * from sisabarang where idbarang='$idb'");

 	$data = mysqli_fetch_array($getdatastock);
 	$stock = $data['stocktersedia'];
 	$selisih = $stock-$qty;

 	$update = mysqli_query($conn,"update sisabarang set stocktersedia='$selisih' where idbarang='$idb'");
 	$hapusdata = mysqli_query($conn,"delete from barangkeluar where idkeluar='$idk'");

 	if($update&&$hapusdata){
 		header('location:keluar.php');

 	} else {
 		header('location:keluar.php');
 	}
 }













?>
