window.onresize = resizeMainContent;
resizeMainContent();

function resizeMainContent()
{
    var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    var w = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
    document.getElementById("mainContent").style.width = (w - 300) + "px";
    document.getElementById("mainContent").style.height = (h - document.getElementById("mainNav").clientHeight) + "px";
}
