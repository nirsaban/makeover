 let orders = [];
function generate(name) {
     let dropdown = document.getElementById(name);
     let selected = dropdown.options[dropdown.selectedIndex];
     let product = selected.value;
     let price = selected.dataset.price;
     let form = new Form(product, price);
         form.create()

 }

 function addOrder() {

let namePro = document.querySelector('.product-name').innerHTML;
let colorPro = document.querySelector('.color').value;
let sizePro = document.querySelector('.size').value;
let pricePro = document.querySelector('.product-price').innerHTML;

     orders.push({
    name:namePro,
    color:colorPro,
    size:sizePro,
    price:pricePro
})
     document.querySelector('.section').style.display = 'none'
}

function displaySummery(data){
    let table =  document.createElement('table');
    table.innerHTML += `<thead>
                 <tr style="border:1px solid black">
               <th>Name</th>
               <th>Price</th>
               <th>Color</th>
               <th>Size</th>
               </tr>
                </thead>
                     <tbody>`

   let content = JSON.parse( data.content)
    content.map((product) => {
        table.innerHTML += `<tr><td><span>Name</span>${product.name}</td><td><span>Price</span>${product.price}</td><td><span>Color</span>${product.color}</td><td><span>Size</span>${product.size}</td></tr>`
           });
      table.innerHTML += `</tbody>`
    table.style.border = '1px solid black';
    document.querySelector('.insertTable').appendChild(table);
    let button = document.querySelector('.saveAll');
    button.setAttribute('disabled', true);
    button.classList.remove('is-success');
    button.classList.add('is-danger');
    button.classList.add('is-danger');
    button.innerText = 'Refresh To buy more'

}

function saveOrder(){
    let ord = JSON.stringify(orders)
    axios.post('/orders', {
        order: ord
    }).then(({data})=>{
        displaySummery(data)
    });
}

class Form {
    constructor(product, price) {
        this.product = product;
        this.price = price;
    }

    create(){
        axios.get('/form').then(({data}) => {
            document.querySelector('.section').style.display = 'block'
            document.querySelector('.form').innerHTML = data
            document.querySelector('.product-name').innerHTML = this.product
            document.querySelector('.product-price').innerHTML = this.price
        })
    }
}
