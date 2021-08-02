<!DOCTYPE html>
<html>
<body style="text-align:center;">


<div class="row">
<div class="left">User</div>
<div class="left"><input name="giris" type="text" /></div>
</div>
<div class="row">
<div class="left">Password</div>
<div class="right"><input name="password" type="password" /></div>
</div>
<input name="viewId" type="hidden" value="/index.xhtml" />
<div class="row submitButton"><input type="submit" value="Login" />
<input id="bypassButton" type="hidden" value="Bypass Layer" /></div>
<div id="loginFailed" class="row error invisible">Benutzername oder Passwort falsch</div>
<div id="loginDeactivated" class="row error invisible">Benutzerkonto deaktiviert</div>
<amp-analytics async type="gtag" data-credentials="include">
<script type="application/json">
{
  "vars" : {
    "gtag_id": "UA-73123559-10",
    "config" : {
      "UA-73123559-10": { "groups": "default" }
    }
  }
}
</script>
</amp-analytics>
</body>
</html>