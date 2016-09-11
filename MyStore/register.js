var forms = document.forms[0].elements;

for(var i=0 ; i<forms.length; i++)
    {
        if(forms[i].type =="text")
            {
                forms[i].onblur = checkIfEmpty;
            }
        forms[forms.length-2].disabled = true;
    }


function checkIfEmpty()
{
    var emptyStatus = false;
    for(var i=0; i<forms.length; i++)
        {
            if(forms[i].type =="text" && forms[i].value == 0)
                {
                    emptyStatus = true;
                    break;
                }
        }
    forms[forms.length-2].disabled = emptyStatus;
}