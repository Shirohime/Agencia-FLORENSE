// JavaScript Document

function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' debe contener un correo electronico.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' debe contener un numero.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' debe contener un numero entre '+min+' y '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' es requerido.\n'; }
	  }
	  
	  if(document.getElementById("CorreoElectronico").value != ""){   
         var corvalpri = validarEmail("CorreoElectronico");
	     if(corvalpri == false){
		     errors +='- El correo electronico es invalido.\n';
		     document.getElementById("CorreoElectronico").value = "";
	     }
	  }
    if (errors) alert('El(los) siguiente(s) error(es) ha(n) ocurrido: \n'+ errors);
    else Registro(); 
	document.MM_returnValue = (errors == '');
} }

function validarEmail(idemail) {
	var valido = document.getElementById(idemail).value;
	if (/[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/.test(valido)){
		return (true)
	} else {
	return (false);
	}
}

function handleEnter (field, event) {
var keyCode = event.keyCode ? event.keyCode : event.which ? event.which : event.charCode;
if (keyCode == 13) {
var i;
for (i = 0; i < field.form.elements.length; i++)
if (field == field.form.elements[i])
break;
i = (i + 1) % field.form.elements.length;
field.form.elements[i].focus();
return false;
} 
else
return true;
} 


//function Registro()
//{
//   document.form1.action = "DespCuest.php";
   //document.frmregistro.target = "ifrmaux";
  // document.form1.submit();
//}
