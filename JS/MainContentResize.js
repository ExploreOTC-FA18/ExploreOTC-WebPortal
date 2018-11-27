var h = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

window.onresize = resizeMainContent;
resizeMainContent();

function resizeMainContent()
{
    document.getElementById("mainContent").style.height = (h - document.getElementById("mainNav").clientHeight) + "px";
}
