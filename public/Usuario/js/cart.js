
let botonCompra = document.getElementById("botonCarrito");
let id = document.getElementById("idProducto");
let imgE = document.getElementById("img");
let articulo = document.getElementById("titulo");
let precio = document.getElementById("precio");
let cantidad=document.getElementById("cantidad");
let DivTallas = document.getElementById("seccionTallas");
let color = document.getElementById("color");
let listaProductos = document.getElementById("carrito");
let tallaP;

if (botonCompra != null && DivTallas != null) {
  botonCompra.addEventListener("click", () => {
    AñadirElementoLocalStorage();
  });

  DivTallas.addEventListener("click", (e) => {
    SacarTalla(e);
  });
}


let SacarTalla = (e) => {
  let talla = e.target.textContent;
  tallaP = talla;
}


let AñadirElementoLocalStorage = () => {
  if (tallaP != null) {
    let itemP = id.value;
    let nombreP =articulo.textContent;
    let precioS = precio.textContent;
    let imgP =imgE.src;
    let colorP = color.textContent;
    let precioP =precioS.substring(1);
    let cantidadP = cantidad.value;
    if(cantidadP == 0){
         cantidadP=1;
    }
    console.log(imgP)
    const producto = {
      itemP,
      nombreP,
      precioP,
      colorP,
      imgP,
      tallaP,
      cantidadP
    }
    if (localStorage.getItem("productos") == null) {
      let Productos = [];
      Productos.push(producto);
      localStorage.setItem("productos", JSON.stringify(Productos));
    } else {
      let ProductosAgregados = JSON.parse(localStorage.getItem("productos"));
      ProductosAgregados.push(producto);
      localStorage.setItem("productos", JSON.stringify(ProductosAgregados));
    }
    tallaP = null;
    MostrarProductos();
  } else {
    alert("selecciona la talla");
  }
}


let MostrarProductos = () => {
  let productos = JSON.parse(localStorage.getItem("productos"));
  listaProductos.innerHTML = '';
  if (productos != null) {
    productos.forEach(Element => {
      listaProductos.innerHTML += `
      <li>
      <div class="cart-img">
          <a><img src="${Element.imgP}"
                  alt=""></a>
      </div>
      <div class="cart-info">
          <h4><a>${Element.nombreP}</a></h4>
          <span>${Element.precioP}</span>
      </div>
      <div class="del-icon">
          <i class="fa fa-times" onclick="EliminarProducto(${Element.itemP})"></i>
      </div>
   `;
    });
  }
  MostrarFinalLista();
  NumeroProductos();
  CalculoCompra();
}

const MostrarFinalLista=()=>{
  listaProductos.innerHTML+=`
  <li class="mini-cart-price">
  <span class="subtotal">subtotal : </span>
  <span class="subtotal-price" id="subtotalC"></span>
</li>
<li class="checkout-btn">
  <a href="/Productos/detalleCompra">Detalle Pedido</a>
</li>
  `;
}

let NumeroProductos = () => {
  let objetos = JSON.parse(localStorage.getItem("productos"));
  if (objetos != null) {
    let array = Object.keys(objetos);
    let cantidadP = array.length;
    if (cantidadP != 0) {
      let iconoTotal = document.getElementById("iconoTotal");
      iconoTotal.textContent = cantidadP;
    } else {
      iconoTotal.innerHTML = '';
    }
  }
}

let EliminarProducto = (e) => {
  let objetos = JSON.parse(localStorage.getItem("productos"));
  let indice = objetos.findIndex(elemt => elemt.itemP == e);
  objetos.splice(indice, 1);
  localStorage.setItem("productos", JSON.stringify(objetos));
  MostrarProductos();
  CalculoCompra();
}

let CalculoCompra = () => {
  let subtotal = document.getElementById("subtotalC");
  let total = document.getElementById("totalC");
  let objetos = JSON.parse(localStorage.getItem("productos"));
  if (objetos != null) {
    let valorSubtotal = objetos.reduce((e, i) => Number(i.precioP) * Number(i.cantidadP),0);
   subtotal.textContent= '$' + valorSubtotal;
    total.textContent= '$' + valorSubtotal;
  }
}

MostrarProductos();
NumeroProductos();

