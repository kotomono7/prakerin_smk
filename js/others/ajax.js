   var xmlHttp = buatObjekXmlHttp();
   
   function buatObjekXmlHttp()
   {
      var obj = null;
      if (window.ActiveXObject)
         obj = new ActiveXObject("Microsoft.XMLHTTP");   
      else 
         if (window.XMLHttpRequest)
            obj = new XMLHttpRequest();
          
      // Cek isi xmlHttp
      if (obj == null)
         document.write(
            "Browser tidak mendukung XMLHttpRequest");      
      return obj;    
   }
           
   function ambilData(sumber_data, id_elemen)
   { 
      if (xmlHttp != null)
      {
         var obj = document.getElementById(id_elemen);
         xmlHttp.open("GET", sumber_data, true);

         xmlHttp.onreadystatechange = function ()
         {
            if (xmlHttp.readyState == 4 &&
                xmlHttp.status == 200)
            {
               obj.innerHTML = xmlHttp.responseText;
            }
         }  
         
         xmlHttp.send(null);
      }
   }
