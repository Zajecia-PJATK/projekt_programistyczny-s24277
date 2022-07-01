document.getElementById("twitterbutton").onclick = () => {
    const link = document.getElementById("String").value.split('/')[5];
    fetch("https://api.twitter.com/2/tweets/"+link,{
        mode: "no-cors",
        headers: {
            "Authorization": "Bearer AAAAAAAAAAAAAAAAAAAAAElzeQEAAAAAjTWg%2BdBSB4lJ%2BidiB54RZx8cby8%3DFOung9hHkThmBRfnt43bF7xShk6gYv5oYwhVVeKbr13eAGeYn1",
        },
    }).then(response => {
        if(response.status === 200){
            response.json().then(data=>{
                document.getElementById('String').value = data['data']['text'];
            })
        }console.log(response.status);
    })
}
