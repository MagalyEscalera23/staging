// se puede cambiar el nombre
fetch("https://imdb8.p.rapidapi.com/auto-complete?q=barbie", {
	"method": "GET",
	headers: {
        'X-RapidAPI-Key': 'bb26977234msh571c1d5d17a9684p10cfdbjsnc5fd1cdf6e55',
        'X-RapidAPI-Host': 'imdb8.p.rapidapi.com'
      }
    })
.then(response => response.json())
.then(data => {
    //console.log(data)
    const arrayMovies = data.d
    arrayMovies.map( (element) => {
        //console.log(element)
        const title = element.l
        const image = element.i.imageUrl
        const cast = element.s
        
        const poster = `
            <div>
                <img src="${image}" />
                <h2>${title}</h2>
                <small>${cast}</small>
            </div>            
        `
        document.getElementById('container').innerHTML += poster
    })
})
.catch(err => {
	console.error(err);
});