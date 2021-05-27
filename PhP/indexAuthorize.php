<meta http-equiv="Content-Type" content="text/html; charset=utf-8">


<div id="result_div_id" style="position: absolute; top: 35%; left: 42%; color: #FF0000;  font-size: 100%;  "     > </div>





<div style='position: absolute; top: 5%; left: 42%;  font-size: 130%; '>
    Formularz autoryzacyjny
</div>




<form action="Authorize.php" method="post" style='position: absolute; top: 10%; left: 42%; ' >

<input type="text"  name="login"  onblur="if(this.value=='')this.value='Login';" onfocus="if(this.value=='Логин')this.value='';" value="Login"  />

<input type="password" id="pass" name="password"  style='position: absolute; top: 200%; left: 0'  />



<input type='button'  style='position: absolute; top: 400%; left: 15%;'   value='Cancel'  onclick="window.location.href='index.php'  ">

<input type="submit" id="submit" value="ОК"  style= "position: absolute; top: 400%; left: 57%; "    />

</form>
