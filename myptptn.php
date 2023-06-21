
<script type="text/javascript">

function CheckNumeric(e)
{
    var charCode = e.charCode || e.keyCode;
    var character = String.fromCharCode(charCode);
     if(!character.match(/[0-9\t\b]+/))
    {
        if(window.event)
            event.returnValue = false;
        else
            e.preventDefault();
        return false;
    }
    return true;


	}
</script>

<script>
function disableRightClick(e)
{
  var message = "Right click Tidak Dibenarkan";

  if(!document.rightClickDisabled) // initialize
  {
    if(document.layers)
    {
      document.captureEvents(Event.MOUSEDOWN);
      document.onmousedown = disableRightClick;
    }
    else document.oncontextmenu = disableRightClick;
    return document.rightClickDisabled = true;
  }
  if(document.layers || (document.getElementById && !document.all))
  {
    if (e.which==2||e.which==3)
    {
      alert(message);
      return false;
    }
  }
  else
  {
    alert(message);
    return false;
  }
}
disableRightClick();
</script>

<script type='text/javascript'>

/*document.onkeydown = function(cc){
if ((cc.which == 86) || (cc.which == 85)){
return false;
}
}*/

</script>


<!DOCTYPE html>
<html lang="en">
<head>
<title> JomPAY </title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/time_date.js"></script>
<script type="text/javascript">

		function validate()
    	{
    		form = document.carian;
    		var str = document.getElementById('NoKpCari').value;
		    str = str.length;

    		if	(form.NoKpCari.value == null || form.NoKpCari.value=="")
    		{
    			alert("Sila isikan medan No. Kad Pengenalan");
    			form.NoKpCari.focus();
    			return;
    		}
    		else if(str != 12)
			{
				alert('No Kad Pengenalan Tidak Sah. No Kad Pengenalan Awam Mestilah 12 Aksara');
				form.NoKpCari.focus();
				return false;
			}
			form.submit();
		}

</script>

</head>

<body>

<div class="row" align="center">
  <div class="col-sm-12"><img src="images/logoptptn2.jpg"  width="229" height="87">
  <img src="images/JomPay_Black_10mm-01.jpg" width="80" height="80"></div>
</div>

<div class="container" align="center">
  <h1> JomPAY <abbr title="Perbadanan Tabung Pendidikan Tinggi Nasional">PTPTN</abbr></h1>
</div>

<div class="row" align="center">
  <div class="col-sm-12">
  	<span id="clockbox" class="style7"></span>
    <br>
	<br>
    <br>
	<br>
  <table align="center">
      <tr>
          <td width="510" align="center">
          <form name="carian" action="JomPay.php" method="post" class="form-group form-inline">
          <span class="glyphicon glyphicon-search" title="Contoh KP Awam : 90122902XXXX"></span>
          <input type="text" name="NoKpCari" id="NoKpCari" size="30" maxlength="12" class="text-uppercase form-control" onKeyUp="javascript:this.value=this.value.replace(/[^0-9.]/g,'');" placeholder="sila masukkan no kp awam" title="SILA MASUKKAN NO KP"/>&nbsp;
          <input type="button" name="" value="CARI"  class="btn btn-default" onClick="validate()"/>
          </form>
          </td>
      </tr>
  </table>

  </div>
</div>
<br>
<center>
*Bayaran  Balik  Pinjaman  ,  Simpan  <span style="font-size:12px;"><span style="font-size:14px;">SSPN  Prime</span></span>&nbsp;&nbsp;& Simpan  SSPN  Plus.
</center>
<div align="center"><br>
  <a href="Manual-Pengguna-Jompay.pdf" target="_blank">
  Manual Pengguna</a> &nbsp;&nbsp;||&nbsp;&nbsp;
  <a href="https://www.ptptn.gov.my/soalan-lazim/#bayaran-balik" target="_blank">
  Soalan Lazim</a><br>
  <br>
  <br>
  <br>
  <br>


</div>
<p>&nbsp;</p>
   </p>

        <p>&nbsp;</p>
        </div>
  	</div>
    <div class="container" style="background-color:#4169E1;">
        <div class="col-md-12" style="background-color:#4169E1;">
        <div class="modal-footer">Perbadanan Tabung Pendidikan Tinggi Nasional-2016</div>
        </div>
  	</div>
</div>
</body>
</html>
