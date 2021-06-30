<script>
//function myapi() {
    // var token = '5c0f67cdfaf731da94c7a1394f5eff3476616aca';
    // var url = 'https://kf.kobotoolbox.org/token/?format=json';
    // const customHeaders = new Headers({

    //     'Authorization': 'token '+token,
    // });


    // fetch(url, {
    //         mode: 'no-cors',
    //         headers: customHeaders,
    //     })
    //     .then((response) => response.json())
    //     .then((json) => {
    //         console.log("response :- ", json);

    //     })

    
//     var token = '5c0f67cdfaf731da94c7a1394f5eff3476616aca';
//    var url = 'https://kc.kobotoolbox.org/api/v1/data/702222';
//     fetch(url, {

//         mode: 'no-cors',
//         credentials: 'include',
//             method: "GET",
//             headers: {
//             "credentials":"true",
//   "origin":"kc.kobotoolbox.org",
//                 "Accept":"application/json",
//                 "Authorization": "token 5c0f67cdfaf731da94c7a1394f5eff3476616aca"
//             }
//         })
//         .then(resp => resp.json())
//         .then(function(data) {
//             console.log(data);
//         })
//         .catch(function(error) {
//             console.log(error);
//         });


//}



async function userExists(rut) {
    var token = '5c0f67cdfaf731da94c7a1394f5eff3476616aca';
 var url = 'https://kc.kobotoolbox.org/api/v1/data/702222';
    var url = url,
      params = {
        method: 'GET',
        mode: 'cors',
        //body: JSON.stringify({ 'parametro': valorDelParametro }),
        headers: { 'Content-Type': 'application/json',
            'Authorization': 'token '+token, },
      };

    var request = new Request(url, params);
    var resp_aux

    fetch(request)
      .then(res => resp_aux = res.clone())
      .then(res => res.json())
      .then(res => {

        console.log(resp_aux.status)
        //si el usuario existe.
        if (resp_aux.status === 200) {
          console.log('estado(200) --> el usuario existe') 
          console.log(res['user']._id)
          console.log('el usuario existe ,solo se debe registrar la iniciativa')

        }
        else {

        }

      })
      .catch((err) => {
        console.log(err)
        return "error";
      })
    }
    userExists();
// myapi();
</script>