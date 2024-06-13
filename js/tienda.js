const addtoShoppingCarButtom =document.querySelectorAll('.fa-shopping-basket');
const shoppingCartItemsContainer=  document.querySelector('.shoppingCartItemsContainer');

const comprarButton = document.querySelector('.comprarButton');

  comprarButton.addEventListener('click', comprarButtonClicked);



addtoShoppingCarButtom.forEach(addtocarbutton=>{
    addtocarbutton.addEventListener('click',addtocarclicked);

})
function addtocarclicked(event){
    const button =event.target;
    const item =button.closest('.platillo')
    const title=item.querySelector(".title").textContent;
    const price=item.querySelector('.precio').textContent;
    const image=item.querySelector('.img').src; 
additemtoshoppingcart(title,price,image);
}
function additemtoshoppingcart(title,price,image){
    const elementsTitle = shoppingCartItemsContainer.getElementsByClassName(
        'shoppingCartItemTitle'
      );
      for (let i = 0; i < elementsTitle.length; i++) {
        if (elementsTitle[i].innerText === title) {
          let elementQuantity = elementsTitle[
            i
          ].parentElement.parentElement.parentElement.querySelector(
            '.shoppingCartItemQuantity'
          );
          elementQuantity.value++;
          $('.toast').toast('show');
          updateshoppingcarttotal()

          return;
        }
      }
    const shoppingcartrow=document.createElement('div');
       const shoppingcartcontent= `
       <div class="row shoppingCartItem">
             <div class="col-6">
                 <div class="shopping-cart-item d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                     <img src=${image} class="shopping-cart-image">
                     <h6 class="shopping-cart-item-title shoppingCartItemTitle text-truncate ml-3 mb-0">${title}</h6>
                 </div>
             </div>
             <div class="col-2">
                 <div class="shopping-cart-price d-flex align-items-center h-100 border-bottom pb-2 pt-3">
                     <p class="item-price mb-0 shoppingCartItemPrice">${price}</p>
                 </div>
             </div>
             <div class="col-4">
                 <div
                     class="shopping-cart-quantity d-flex justify-content-between align-items-center h-100 border-bottom pb-2 pt-3">
                     <input class="shopping-cart-quantity-input shoppingCartItemQuantity" type="number"
                         value="1">
                     <button class="btn btn-danger buttonDelete" type="button">X</button>
                 </div>
             </div>
         </div>`;
                   
      shoppingcartrow.innerHTML=shoppingcartcontent;
      shoppingCartItemsContainer.append(shoppingcartrow);
      shoppingcartrow.querySelector('.buttonDelete').addEventListener('click',removeshoppingcartitem);
      shoppingcartrow.querySelector('.shoppingCartItemQuantity').addEventListener('change',quantityChanged);
      updateshoppingcarttotal()
                   

}
function updateshoppingcarttotal(){
    let total=0;
    const shoppingcarttotal=document.querySelector('.shoppingCartTotal');
    const shoppingcartitems=document.querySelectorAll('.shoppingCartItem')
    shoppingcartitems.forEach(shoppingCartItem=>{
        const shoppingcartitemelement =shoppingCartItem.querySelector(
            '.shoppingCartItemPrice');
            const shoppingCartItemPrice=Number(shoppingcartitemelement.textContent.replace('$',''));
       const shoppingcartitemquantityelement=     shoppingCartItem.querySelector('.shoppingCartItemQuantity');
       const shoppingcartitemquantity = Number(shoppingcartitemquantityelement.value);
         total=total+shoppingCartItemPrice*shoppingcartitemquantity;
    })
    shoppingcarttotal.innerHTML=total + '$';
}
function removeshoppingcartitem(event){
    const buttonclicked=event.target;  
        buttonclicked.closest('.shoppingCartItem').remove();
        updateshoppingcarttotal();
}
function quantityChanged(event) {
    const input = event.target;
    input.value <= 0 ? (input.value = 1) : null;
    updateshoppingcarttotal();
  }
  function comprarButtonClicked() {
    shoppingCartItemsContainer.innerHTML = '';
    updateshoppingcarttotal();

  }
 