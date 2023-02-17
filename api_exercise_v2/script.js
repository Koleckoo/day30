const button = document.getElementById("button");
const ul = document.getElementById("list");


const load_movies = async () => {
    const response = await fetch("http://www.cbp-exercises.test/day30/api_exercise/")
    const movies = await response.json()
    console.log(movies);
    movies.forEach(movie => {
        ul.innerHTML += `<li>${movie}</li>`
    });
}

button.addEventListener(("click"), () => {
    load_movies();

} )

