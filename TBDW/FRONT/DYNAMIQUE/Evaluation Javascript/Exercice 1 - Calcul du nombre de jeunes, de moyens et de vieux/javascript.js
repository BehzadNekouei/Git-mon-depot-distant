
var age = new Array();
var jeunes=0, moyens=0 ,vieux=0; 

for (i=0; ;i++) {
    age[i]= parseInt( prompt('entrez un age:'));
    if (age [i]>=100){
        break;
    }
    else if (20<=age[i] && age[i]<=40){
        moyens++;
    }
    else if (age [i]<20){
        jeunes++;
    }
    else if (age[i]>40){
        vieux++;
    }
    
    else{
        alert ("Error");
    }
}


alert("Vous avez entrez:\n" + 'jeunes: '+ jeunes + '\n' +'moyens: '+ moyens + '\n' + 'vieux: ' + vieux +"\n");
