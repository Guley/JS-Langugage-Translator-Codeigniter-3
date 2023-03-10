function file_get_contents(pagename,selectedLang) {
return new Promise(function(resolve, reject) {
     $.ajax({
       url: 'https://example.com/translation/getdata?page='+pagename+'&lng='+selectedLang,
       type: 'GET',
       async: true,
       dataType: "json",
       crossDomain:true,
       success: function(json) {
         resolve(json)
       },error: function(err){
         reject(err)
       }
     });
   });
}
function selectLang(e,page){
       const selectedLang = e.options[e.selectedIndex].value
       localStorage.setItem('lng',selectedLang)
       getLanguage(page,selectedLang)

}

function getLanguage(page,selectedLang){
  document.getElementById('language-chooser').value = selectedLang;
    file_get_contents(page,selectedLang).then(function(translateData) {
              if(translateData.code == 0){
                  let arr = translateData.data
                  for (var tr in arr) {
                        if (tr.includes('placeholder')) {
                             $('[data-translate-placeholder='+tr+']').attr('placeholder',arr[tr]);
                        }else{
                            $('[data-translate='+tr+']').html(arr[tr]) ;
                        }
                        console.log(tr)
                        console.log(arr[tr])
                    }
              }
            }).catch(function(err) {
              // Run this when promise was rejected via reject()
              console.log(err)
     })
}
