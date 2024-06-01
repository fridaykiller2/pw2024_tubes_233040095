let left_btn = document.getElementsByClassName('bi-chevron-left')[0];
let right_btn = document.getElementsByClassName('bi-chevron-right')[0];
let cards = document.getElementsByClassName('cards')[0];

left_btn.addEventListener('click', () => {
  cards.scrollLeft -= 140;
});
right_btn.addEventListener('click', () => {
  cards.scrollLeft += 140;
});

let json_url = "movie.json";

fetch(json_url)
  .then((Response) => Response.json())
  .then((data) => {
    data.forEach((ele, i) => {
      let { nama, imdb, date, sposter, bposter, genre, url } = ele;
      let card = document.createElement("a");
      card.classList.add('card');
      card.href = url;
      card.innerHTML = '
      <img src="${sposter}" alt="${nama}" class="poster">
      <div class="rest_card">
        <img src="${bposter}" alt="" />
        <div class="cont">
          <h4>${nama}</h4>
          <div class="sub">
            <p>${genre}, ${date}</p>
            <h3><span>IMDB</span><i class="bi bi-star-fill"></i> ${imdb}</h3>
          </div>
        </div>
      </div>
      '
      cards.appendChild(card);
    });

    document.getElementById('title').innerText = date[0].nama;
    document.getElementById('gen').innerText = date[0].genre;
    document.getElementById('date').innerText = date[0].date;
    document.getElementById('rate').innerHTML = '<span>IMDB</span><i class="bi bi-star-fill"></i> ${date[0].imdb}'

  });
