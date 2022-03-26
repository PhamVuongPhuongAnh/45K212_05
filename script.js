const btm=document.querySelectorAll("button")
//console.log(btm) Kiem tra xem ket noi chua
btm.forEach(function(button,index){
//console.log(button,index)
button.addEventListener("click",function(event){{
    var btmItem = event.target
    var product = btmItem.parentElement
    var productImg = product.querySelector("img").src
    var productName = product.querySelector("h1").innerText
    var productPrice = product.querySelector("span").innerText

    //console.log(productPrice,productImg,productName)
    addcart(productPrice,productImg,productName)

}})

})
function addcart(productPrice,productImg,productName) {
    var addtr = document.createElement("tr")
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i=0;i<cartItem.length;i++){
        var productT = document.querySelectorAll(".title")
        if(productT[i].innerHTML==productName){
            alert("Sản phẩm này đã có trong giỏ hàng")
            return
        }
    }
    var trcontent = ' <tr><td style="display: flex;align-items: center;"><img style="width:70px" src="'+productImg+'" alt=""><span class="title">'+productName+'</span></td><td><p><span class="price">'+productPrice+'</span><sup>đ</sup></p></td><td><input style="width: 30px;outline: none;text-align: center;" type="number" value="1" min="1"></td><td style="cursor:pointer;"><span class="cart-delete">Xóa</span></td></tr>'
    addtr.innerHTML = trcontent
    var cartTable = document.querySelector("tbody")
    //console.log(cartTable)
    //append them addtr vao tbody,
    cartTable.append(addtr)
    carttotal()
    deletecart()
}
//---------------------TOTAL PRICE -------------------//
//-------------carttotal tính giá của các sp--------------//
function carttotal(){
    var cartItem = document.querySelectorAll("tbody tr")
    var totalC = 0
    //console.log(cartItem.length) cartItem la cac the tr
    for (var i=0;i<cartItem.length;i++){
        var inputValue = cartItem[i].querySelector("input").value
        //console.log(inputValue)
        var productPrice = cartItem[i].querySelector(".price").innerHTML
        //console.log(productPrice)
        totalA = inputValue*productPrice*1000
        //totalB = totalA.toLocaleString('de-DE') them dau cham truoc 000
        //console.log(totalB)
        totalC = totalC + totalA
        //console.log(totalC)
        //totalD = totalC.toLocaleString('de-DE')
    }
    var carttotalA = document.querySelector(".price-total span")
    var cartPrice = document.querySelector(".cart-icon span") 
    carttotalA.innerHTML = totalC.toLocaleString('de-DE')
    cartPrice.innerHTML = totalC.toLocaleString('de-DE')
    inputchange()
    //console.log(carttotalA)

}
//---------------------------DELETE cart-------------
function deletecart(){
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i=0;i<cartItem.length;i++){
        var productT = document.querySelectorAll(".cart-delete")
        productT[i].addEventListener("click",function(event){
            var cartDelete = event.target
            var cartItemXoa = cartDelete.parentElement.parentElement
            cartItemXoa.remove()
            carttotal()
            //console.log(cartItemXoa)  
        })
                
        }
}
function inputchange(){
    var cartItem = document.querySelectorAll("tbody tr")
    for (var i=0;i<cartItem.length;i++){
        var inputValue = cartItem[i].querySelector("input")
         inputValue.addEventListener("change",function(){
             carttotal()
         })
        
                
        }
}
const cartxoa = document.querySelector(".fa-times")
const cartshow = document.querySelector(".fa-shopping-cart")
cartshow.addEventListener("click",function(){
    console.log(cartshow)
   document.querySelector(".cart").style.right = "0"

})
cartxoa.addEventListener("click",function(){
    //console.log(cartshow)
   document.querySelector(".cart").style.right = "-100%"
   
})