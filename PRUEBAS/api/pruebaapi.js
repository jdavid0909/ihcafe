function mostrar() {
    var token='5c0f67cdfaf731da94c7a1394f5eff3476616aca';
    var url='https://kobo.kobotoolbox.org/assets/apimzXthGQsS5fSzohDoSt/submissions/?format=json';
    var headers = {'Authorization': 'token 5c0f67cdfaf731da94c7a1394f5eff3476616aca'}
    fetch(url,{
        mode: 'no-cors',
            method: "get",
            headers: {headers,
                "Content-Type": "application/json",
                "Access-Control-Allow-Origin": "*"
    
    },
     
    })
    .then(r => r.json())
    .then(data => {
        console.log(data.results[0])
           
    })
}