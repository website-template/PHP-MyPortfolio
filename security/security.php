<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>İSMAİL TAŞDELEN | Web Application Security Page</title>
</head>
<body bgcolor="red" onkeydown="return false" oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<div style="background-color:black; color:white; padding:20px;">
<center><h4>İSMAİL TAŞDELEN | Web Application Security Page</h4></center>
</div>
<div style="background-color:white;">
<center><img src="img/t-mobile.png" alt=""><img src="img/Symantec.png" alt=""><img src="img/McAfee.png" alt=""></center>
</div>
<script language="Javascript">
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
var EnableRightClick = 0;
if(isNS)
document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
if(EnableRightClick==1){ return true; }
else {return false; }
}
function mousehandler(e){
if(EnableRightClick==1){ return true; }
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
function keyhandler(e) {
var myevent = (isNS) ? e : window.event;
if (myevent.keyCode==96)
EnableRightClick = 1;
return;
}
document.oncontextmenu = mischandler;
document.onkeypress = keyhandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
<script language="JavaScript">
    document.onkeypress = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
    document.onmousedown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
document.onkeydown = function (event) {
        event = (event || window.event);
        if (event.keyCode == 123) {
            return false;
        }
    }
</script>
<script type="text/javascript">
var omitformtags=["input", "textarea", "select"]
omitformtags=omitformtags.join("|")
function disableselect(e){
if (omitformtags.indexOf(e.target.tagName.toLowerCase())==-1)
return false
}
function reEnable(){
return true
}
if (typeof document.onselectstart!="undefined")
document.onselectstart=new Function ("return false")
else{
document.onmousedown=disableselect
document.onmouseup=reEnable
}
</script>
</body>
</html>
