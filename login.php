<html>
<head>
<title> Login </title>
<script src="SecurityManager.js"></script>
<script>
function main() {

    var btn=document.getElementById('btnLogin');
    btn.onclick = function() {
        var login=document.getElementById('txtLogin').value;
        var password=document.getElementById('txtPassword').value;
        var result=SecurityManager.ValidateAdmin(login,password);
        if(result==true)
        {
            window.location.href="adminHome.php";
        }
        else
        {
            alert("Invalid UserName/Password");
        }
        
    }
}
</script>
<head>

<body onload="main();">
    <div style="border:1px solid red; width:300px; float:left;">
        <h1>Admin Login</h1>
            <div>
                Login: <input id="txtLogin" /> <br>
                Password: <input id="txtPassword" type="password" /> <br>
                <input type="submit" id="btnLogin" value="Login" />
                <input type="reset" value="cancel" />
            </div>
    </div>
    <div style="border:1px solid red; width:300px; float:left;margin-left:20px;">
        <h1>User Login</h1>
            <div>
                Login: <input id="txtLogin1" /> <br>
                Password: <input id="txtPassword1" type="password" /> <br>
                <input type="submit" id="btnLogin1" value="Login" />
                <input type="reset" value="cancel" />
            </div>
    </div>

</body>
</html>