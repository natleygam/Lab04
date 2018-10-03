<script type="text/javascript">
function Checker(){
   let checker = false;
  var formelement = document.getElementById("form1");
 	/*var name = formelement.elements[0].value;
 	var pword = formelement.elements[1].value;
  var apple = formelement.elements[2].value;
  var pears = formelement.elements[3].value;
  var peach = formelement.elements[4].value;
  var ship = formelement.elements[5].value;*/

  if(if(is_numeric(apples)==false||is_numeric(peaches)==false||is_numeric(pears)==false|| empty(username||pword||apples||pears||peaches||ship)){
    return false;
  }
  for(i=0;i<username.size();i++){
    if(username[i]=="@"){
      checker = true;
      break;
    }
  }
  if(checker==false){
    return false;
  }
  checker = false;
  for(j=i;j<username.size();j++){
    if(username[j]=="."){
      checker = true;
      return true;
    }
  }
  return checker;
}
</script>
