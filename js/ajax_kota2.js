    var ajaxku;
    //siswa
function ajaxkota(id){
    ajaxku = buatajax();
    var url="include/select_kota.php";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChanged;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

//sekolah
function ajaxkota_sek(id){
    ajaxku = buatajax();
    var url="include/select_kota.php";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChanged_sek;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

//orangtua
function ajaxkota_ortu(id){
    ajaxku = buatajax();
    var url="include/select_kota.php";
    url=url+"?q="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChanged_ortu;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

//siswa
function ajaxkec(id){
    ajaxku = buatajax();
    var url="include/select_kota.php";
    url=url+"?kec="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedKec;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

//sekolah
function ajaxkec_sek(id){
    ajaxku = buatajax();
    var url="include/select_kota.php";
    url=url+"?kec="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedKec_sek;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

//orangtua
function ajaxkec_ortu(id){
    ajaxku = buatajax();
    var url="include/select_kota.php";
    url=url+"?kec="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedKec_ortu;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function ajaxkel(id){
    ajaxku = buatajax();
    var url="include/select_kota.php";
    url=url+"?kel="+id;
    url=url+"&sid="+Math.random();
    ajaxku.onreadystatechange=stateChangedKel;
    ajaxku.open("GET",url,true);
    ajaxku.send(null);
}

function buatajax(){
    if (window.XMLHttpRequest){
    return new XMLHttpRequest();
    }
    if (window.ActiveXObject){
    return new ActiveXObject("Microsoft.XMLHTTP");
    }
    return null;
}

//siswa
function stateChanged(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kab").innerHTML = data
    }else{
    document.getElementById("kab").value = "<option selected>Pilih Kota/Kab</option>";
    }
    }
}

//sekolah
function stateChanged_sek(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kab_sek").innerHTML = data
    }else{
    document.getElementById("kab_sek").value = "<option selected>Pilih Kota/Kab</option>";
    }
    }
}

//ortu
function stateChanged_ortu(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kab_ortu").innerHTML = data
    }else{
    document.getElementById("kab_ortu").value = "<option selected>Pilih Kota/Kab</option>";
    }
    }
}

//siswa
function stateChangedKec(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kec").innerHTML = data
    }else{
    document.getElementById("kec").value = "<option selected>Pilih Kecamatan</option>";
    }
    }
}

//sekolah
function stateChangedKec_sek(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kec_sek").innerHTML = data
    }else{
    document.getElementById("kec_sek").value = "<option selected>Pilih Kecamatan</option>";
    }
    }
}

//ortu
function stateChangedKec_ortu(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kec_ortu").innerHTML = data
    }else{
    document.getElementById("kec_ortu").value = "<option selected>Pilih Kecamatan</option>";
    }
    }
}

function stateChangedKel(){
    var data;
    if (ajaxku.readyState==4){
    data=ajaxku.responseText;
    if(data.length>=0){
    document.getElementById("kel").innerHTML = data
    }else{
    document.getElementById("kel").value = "<option selected>Pilih Kelurahan/Desa</option>";
    }
    }
}