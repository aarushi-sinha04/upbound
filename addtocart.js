const product = [
    {
        id: 0,
        image: src="https://rukminim2.flixcart.com/image/612/612/xif0q/shirt/z/q/r/40-43935pink-multi-hancock-original-imagqfgdwg2gvwjm.jpeg?q=70",
        title: 'MENs T-SHIRT',
        price: 520,
    },
    {
        id: 1,
        image: src="https://images.pexels.com/photos/8839887/pexels-photo-8839887.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
        title: 'WATCH',
        price: 1999,
    },
    {
        id: 2,
        image:  src="https://images.pexels.com/photos/5552789/pexels-photo-5552789.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
        title: 'TELEVISION',
        price: 230,
    },
    {
        id: 3,
        image: 'black.png',
        title: 'HEAD PHONES',
        price: 900,
    },
    {
        id: 4,
        image: src="https://images.pexels.com/photos/4295985/pexels-photo-4295985.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        title: 'HOODIES',
        price: 800,
    },
    {
        id: 5,
        image: src="https://rukminim2.flixcart.com/image/832/832/xif0q/dinner-set/u/r/p/-original-imaggcm9g6wm2fuh.jpeg?q=70",
        title: 'DINNER SET',
        price: 1000,
    },
    {
        id: 6,
        image: src="https://images.pexels.com/photos/2659939/pexels-photo-2659939.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500",
        title: 'LAPTOP',
        price: 89000,
    },
    {
        id: 7,
        image: src="https://rukminim2.flixcart.com/image/312/312/k0r15e80/microwave-new/c/c/m/hil2001mwph-haier-original-imafkexqcgfkqzqt.jpeg?q=70",
        title: 'MICROWAVE',
        price: 90000,
    }
];
const categories = [...new Set(product.map((item)=>
    {return item}))]
    let i=0;
document.getElementById('root').innerHTML = categories.map((item)=>
{
    var {image, title, price} = item;
    return(
        `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>$ ${price}.00</h2>`+
        "<button onclick='addtocart("+(i++)+")'>Add to cart</button>"+
        `</div>
        </div>`
    )
}).join('')

var cart =[];

function addtocart(a){
    cart.push({...categories[a]});
    displaycart();
}
function delElement(a){
    cart.splice(a, 1);
    displaycart();
}

function displaycart(){
    let j = 0, total=0;
    document.getElementById("count").innerHTML=cart.length;
    if(cart.length==0){
        document.getElementById('cartItem').innerHTML = "Your cart is empty";
        document.getElementById("total").innerHTML = "$ "+0+".00";
    }
    else{
        document.getElementById("cartItem").innerHTML = cart.map((items)=>
        {
            var {image, title, price} = items;
            total=total+price;
            document.getElementById("total").innerHTML = "$ "+total+".00";
            return(
                `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>$ ${price}.00</h2>`+
                "<i class='fa-solid fa-trash' onclick='delElement("+ (j++) +")'></i></div>"
            );
        }).join('');
    }

    
}