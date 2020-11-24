function onSelectChange() {
    var value = document.getElementById("gd").value;    
    if ( value == 'of') {
        document.getElementById('ofc').style.display = 'block';
        document.getElementById('j1').style.display = 'none';
        document.getElementById('j2').style.display = 'none';
        document.getElementById('j3').style.display = 'none';
        document.getElementById('default').style.display = 'none';  
        document.getElementById('TFJ2').style.display = 'none';

    } else if (value == 'jk1') {
      document.getElementById('j1').style.display = 'block';
      document.getElementById('ofc').style.display = 'none';
      document.getElementById('j2').style.display = 'none';
      document.getElementById('j3').style.display = 'none';
      document.getElementById('default').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';

    }
    else if (value == 'jk2') {
      document.getElementById('j2').style.display = 'block';
      document.getElementById('ofc').style.display = 'none';
      document.getElementById('j1').style.display = 'none';
      document.getElementById('j3').style.display = 'none';
      document.getElementById('default').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';

    }
    else if (value == 'jk3') {
      document.getElementById('j2').style.display = 'none';
      document.getElementById('ofc').style.display = 'none';
      document.getElementById('j1').style.display = 'none';
      document.getElementById('j3').style.display = 'block';
      document.getElementById('default').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';

    }
}


function onSelectOffice() {
    var value = document.getElementById("ofc").value;    
    if ( value == 'Basement') {
        document.getElementById('BS').style.display = 'block';
        document.getElementById('GF').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('ofc_default').style.display = 'none';  
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('MZJ1').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('SFJ1').style.display = 'none';
        document.getElementById('TFJ1').style.display = 'none';
        document.getElementById('RFJ1').style.display = 'none';
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('SFJ2').style.display = 'none';
        document.getElementById('TFJ2').style.display = 'none';

    } else if (value == 'Ground Floor') {
      document.getElementById('GF').style.display = 'block';
      document.getElementById('BS').style.display = 'none';
      document.getElementById('FF').style.display = 'none';
      document.getElementById('default').style.display = 'none';  
      document.getElementById('GFJ1').style.display = 'none';
      document.getElementById('MZJ1').style.display = 'none';
      document.getElementById('FFJ1').style.display = 'none';
      document.getElementById('SFJ1').style.display = 'none';
      document.getElementById('TFJ1').style.display = 'none';
      document.getElementById('RFJ1').style.display = 'none';
      document.getElementById('GFJ2').style.display = 'none';
      document.getElementById('SFJ2').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';


    }
    else if (value == 'First Floor') {
      document.getElementById('FF').style.display = 'block';
      document.getElementById('BS').style.display = 'none';
      document.getElementById('GF').style.display = 'none';        
      document.getElementById('default').style.display = 'none';  
      document.getElementById('GFJ1').style.display = 'none';
      document.getElementById('MZJ1').style.display = 'none';
      document.getElementById('FFJ1').style.display = 'none';
      document.getElementById('SFJ1').style.display = 'none';
      document.getElementById('TFJ1').style.display = 'none';
      document.getElementById('RFJ1').style.display = 'none';
      document.getElementById('GFJ2').style.display = 'none';
      document.getElementById('SFJ2').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';


    }
 
}

function onSelectJK1() {
    var value = document.getElementById("j1").value;    
    if ( value == 'Mezzanine Floor') {
        document.getElementById('MZJ1').style.display = 'block';
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('ofc_default').style.display = 'none';  
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';   
        document.getElementById('SFJ1').style.display = 'none';
        document.getElementById('TFJ1').style.display = 'none';
        document.getElementById('RFJ1').style.display = 'none';       
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('SFJ2').style.display = 'none';
        document.getElementById('TFJ2').style.display = 'none';


    } else if (value == 'Ground Floor') {
      document.getElementById('GFJ1').style.display = 'block';
      document.getElementById('MZJ1').style.display = 'none';
      document.getElementById('FF').style.display = 'none';
      document.getElementById('default').style.display = 'none';  
      document.getElementById('BS').style.display = 'none';
      document.getElementById('GF').style.display = 'none';  
      document.getElementById('FFJ1').style.display = 'none';
      document.getElementById('SFJ1').style.display = 'none';
      document.getElementById('TFJ1').style.display = 'none';
      document.getElementById('ofc_default').style.display = 'none';  
      document.getElementById('RFJ1').style.display = 'none';
      document.getElementById('GFJ2').style.display = 'none';
      document.getElementById('SFJ2').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';
    }
    else if (value == 'First Floor') {
      document.getElementById('FFJ1').style.display = 'block';
      document.getElementById('BS').style.display = 'none';
      document.getElementById('GF').style.display = 'none';
      document.getElementById('MZJ1').style.display = 'none';
      document.getElementById('FF').style.display = 'none';
      document.getElementById('default').style.display = 'none';  
      document.getElementById('BS').style.display = 'none';
      document.getElementById('GF').style.display = 'none';   
      document.getElementById('ofc_default').style.display = 'none';  
      document.getElementById('GFJ1').style.display = 'none';
      document.getElementById('default').style.display = 'none'; 
      document.getElementById('SFJ1').style.display = 'none';
      document.getElementById('TFJ1').style.display = 'none';
      document.getElementById('RFJ1').style.display = 'none';
      document.getElementById('GFJ2').style.display = 'none';
      document.getElementById('SFJ2').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';

    }
    else if (value == 'Second Floor') {
        document.getElementById('SFJ1').style.display = 'block';
        document.getElementById('TFJ1').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';
        document.getElementById('ofc_default').style.display = 'none';  
        document.getElementById('MZJ1').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('default').style.display = 'none';  
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';   
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('RFJ1').style.display = 'none';
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('SFJ2').style.display = 'none';
        document.getElementById('TFJ2').style.display = 'none';

      }
      else if (value == 'Third Floor') {
        document.getElementById('TFJ1').style.display = 'block';
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('SFJ1').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('MZJ1').style.display = 'none';
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('ofc_default').style.display = 'none';  
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('default').style.display = 'none';  
        document.getElementById('RFJ1').style.display = 'none';
        document.getElementById('SFJ2').style.display = 'none';
        document.getElementById('TFJ2').style.display = 'none';

      }
      else if (value == 'Roof Floor') {
        document.getElementById('RFJ1').style.display = 'block';
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('MZJ1').style.display = 'none';
        document.getElementById('TFJ1').style.display = 'none';
        document.getElementById('SFJ1').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('GF').style.display = 'none'; 
        document.getElementById('default').style.display = 'none';  
        document.getElementById('ofc_default').style.display = 'none';
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('SFJ2').style.display = 'none';
        document.getElementById('TFJ2').style.display = 'none';

      }
}
function onSelectJK2() {
    var value = document.getElementById("j2").value;    
    if ( value == 'Mezzanine Floor') {
        document.getElementById('MZJ2').style.display = 'block';
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('ofc_default').style.display = 'none';  
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';   
        document.getElementById('SFJ1').style.display = 'none';
        document.getElementById('TFJ1').style.display = 'none';
        document.getElementById('RFJ1').style.display = 'none';
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('FFJ2').style.display = 'none';
        document.getElementById('MZJ1').style.display = 'none';
        document.getElementById('SFJ2').style.display = 'none';
        document.getElementById('TFJ2').style.display = 'none';
        document.getElementById('RFJ2').style.display = 'none';

    } else if (value == 'Ground Floor') {
      document.getElementById('GFJ2').style.display = 'block';
      document.getElementById('GFJ1').style.display = 'none';
      document.getElementById('MZJ1').style.display = 'none';
      document.getElementById('FFJ1').style.display = 'none';
      document.getElementById('SFJ1').style.display = 'none';
      document.getElementById('TFJ1').style.display = 'none';
      document.getElementById('RFJ1').style.display = 'none';
      document.getElementById('MZJ2').style.display = 'none';
      document.getElementById('FFJ2').style.display = 'none';
      document.getElementById('FF').style.display = 'none';
      document.getElementById('BS').style.display = 'none';
      document.getElementById('GF').style.display = 'none';  
      document.getElementById('ofc_default').style.display = 'none';  
      document.getElementById('default').style.display = 'none';  
      document.getElementById('SFJ2').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';
      document.getElementById('RFJ2').style.display = 'none';

    }
    else if (value == 'First Floor') {
      document.getElementById('FFJ2').style.display = 'block';
      document.getElementById('GFJ2').style.display = 'none';
      document.getElementById('MZJ2').style.display = 'none';
      document.getElementById('default').style.display = 'none';  
      document.getElementById('ofc_default').style.display = 'none';  
      document.getElementById('SFJ2').style.display = 'none';
      document.getElementById('TFJ2').style.display = 'none';
      document.getElementById('RFJ2').style.display = 'none';

    }
    else if (value == 'Second Floor') {
        document.getElementById('SFJ2').style.display = 'block';
        document.getElementById('TFJ1').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';
        document.getElementById('SFJ1').style.display = 'none';
        document.getElementById('ofc_default').style.display = 'none';  
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('MZJ1').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('default').style.display = 'none';  
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';   
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('RFJ1').style.display = 'none';
        document.getElementById('TFJ2').style.display = 'none';
        document.getElementById('RFJ2').style.display = 'none';

      }
      else if (value == 'Third Floor') {
        document.getElementById('TFJ2').style.display = 'block';
        document.getElementById('TFJ1').style.display = 'none';
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('SFJ1').style.display = 'none';
        document.getElementById('SFJ2').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('MZJ1').style.display = 'none';
        document.getElementById('MZJ2').style.display = 'none';
        document.getElementById('RFJ1').style.display = 'none';
        document.getElementById('RFJ2').style.display = 'none';
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('ofc_default').style.display = 'none';    
        document.getElementById('default').style.display = 'none';  

      }
      else if (value == 'Roof Floor') {
        document.getElementById('RFJ2').style.display = 'block';
        document.getElementById('GFJ1').style.display = 'none';
        document.getElementById('RFJ1').style.display = 'none';
        document.getElementById('MZJ1').style.display = 'none';
        document.getElementById('TFJ1').style.display = 'none';
        document.getElementById('SFJ1').style.display = 'none';
        document.getElementById('FFJ1').style.display = 'none';
        document.getElementById('BS').style.display = 'none';
        document.getElementById('GF').style.display = 'none';
        document.getElementById('FF').style.display = 'none';
        document.getElementById('GF').style.display = 'none'; 
        document.getElementById('default').style.display = 'none';  
        document.getElementById('ofc_default').style.display = 'none';           
        document.getElementById('GFJ2').style.display = 'none';
        document.getElementById('MZJ2').style.display = 'none';
        document.getElementById('TFJ2').style.display = 'none';
        document.getElementById('SFJ2').style.display = 'none';
        document.getElementById('FFJ2').style.display = 'none';
      }
}