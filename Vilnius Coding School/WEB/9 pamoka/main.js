let body = document.getElementsByTagName("body")[0];

let data = [
    ['mammal', 'tiger', '1', 26],
    ['mammal', 'lion', '0', 4],
    ['reptile', 'geko', '1', 0.3],
    ['fish', 'goldfish', '0', 0.6],
    ['mammal', 'wolf', '1', 3],
    ['mammal', 'cat', '0', 4],
    ['fish', 'pike-perch', '1', 26],
    ['insect', 'stick-bug', '0', 0.2],
];

let HTML = "";

HTML += `<div class="container">
<table class="table table-striped table-dark">
<thead>
  <tr>
    <th scope="col">Class</th>
    <th scope="col">Species</th>
    <th scope="col">BBŽ</th>
    <th scope="col">BBŽ2</th>
  </tr>
</thead>
<tbody>`;



for (let i = 0; i < data.length; i++) {
    HTML += '<tr>';
    for (let a = 0; a < data[i].length; a++) {

        HTML += '<td>' + data[i][a] + '</td>';

    }
    HTML += '</tr>';

}




HTML += `
</tbody>
</table>
</div>`;
body.innerHTML += HTML;