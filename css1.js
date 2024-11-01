var i=1;
function myFunction_smsbals4() {
if(i<1){
 document.getElementsByClassName("fa fa-close smsbals4")[0].setAttribute("class", "fa fa-share-alt smsbals4");
i=1;
  document.getElementById("shareiconsaeed").style.display = "none";

}else{
  document.getElementsByClassName("fa fa-share-alt smsbals4")[0].setAttribute("class", "fa fa-close smsbals4"); 
document.getElementById("shareiconsaeed").style.display = "block";

  i=0;}
}