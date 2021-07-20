var age = document.querySelector('age');
var income = document.querySelector('anualincome');
s
var requestOptions = {
  method: 'GET',
  redirect: 'follow'
};
fetch("https://31j0q0noye.execute-api.us-east-1.amazonaws.com/hackathon/creditscore?age='+age+'&annualIncome=+'anualincome'+",requestOptions)
.then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));
