const data = [
  { name: "Ptilopsis", score: "9:00", accepted: true },
  { name: "Gnophkeh", score: "11:00", accepted: true },
  { name: "Nodens", score: "12:00", accepted: true },
  { name: "Shathak", score: "12:03", accepted: false },
  { name: "Zoth-Ommog", score: "12:10", accepted: true },
  { name: "Quachil Uttaus", score: "13:00", accepted: false },
  { name: "Rhan-Tegoth", score: "14:00", accepted: false },
  { name: "Serpent people", score: "14:10", accepted: false },
  { name: "Being of Ib", score: "15:50", accepted: false },
  { name: "Cthulhi", score: "16:00", accepted: false },
  { name: "Knygathin Zhaum", score: "19:00", accepted: false },
];

const tempalteTd = ({ index, name, score, status }) => `<tr>
        <th scope="row">${index}</th>
        <td>${name}</td>
        <td>${score}</td>
        <td>
            <span class="badge rounded-pill ${
              status ? "bg-success" : "bg-danger"
            }">${
                status ? "Accepted" : "Rejected"
              }</span>
        </td>
    </tr>`;

const tbody = document.querySelector("#tabel-body");
const player_card = document.querySelector("#featured_player_card");

data.forEach((d, i) => {
  tbody.innerHTML += tempalteTd({
    index: i + 1,
    name: d.name,
    score: d.score,
    status: d.accepted,
  });
});

player_card.querySelector(".card-title").innerHTML = data[0].name;
player_card.querySelector(".card-subtitle #time").innerHTML = data[0].score;
