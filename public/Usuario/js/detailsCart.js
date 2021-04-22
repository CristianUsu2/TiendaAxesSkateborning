
let tbody = document.getElementById("tbodyC");
let botonFinalizar=document.getElementById("btnFinalizarC");
let productos = JSON.parse(localStorage.getItem("productos"));
let tbodyfinalizarc=document.getElementById("tbodyFinalizarCompra");
let formFinalizar=document.getElementById("formFinalizar");
let botonContraEntrega= document.getElementById("contraEntrega");
let botonDetalleCompra=document.getElementById("btnProcederPagar");

let MostrarProductosDetalle = () => {
  if (tbody != null) {
    tbody.innerHTML = '';
    if (productos != null) {
      productos.forEach(Element => {
        tbody.innerHTML += `
        <tr>
        <td class="pro-thumbnail"><a href="#"><img class="img-fluid" src="${Element.imgP}" alt="Product"/></a></td>
        <td class="pro-title"><a href="#">${Element.nombreP}</a></td>
        <td class="pro-price"><span>$${Element.precioP}</span></td>
        <td class="pro-quantity">
            <div class="pro-qty">
            <div class="col-1">
            <input type="hidden" value="${Element.itemP}"/>
            </div>
                <input type="text" value="${Element.cantidadP}" />
            </div>
           
        </td>
        <td class="pro-remove" onclick="EliminarProducto(${Element.itemP})"><a href="#"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
             
     `;
      });
      CalculoCompraD();
    }
  }
  
}

if(botonFinalizar!=null){
  botonFinalizar.addEventListener('click',()=>{
    window.location="/Productos/finalizarCompra";
  })
}

if(tbody!=null){
tbody.addEventListener('click',(e)=>{
  AumentarValor(e)
});
}
if(botonContraEntrega!=null){
  botonContraEntrega.addEventListener("click",()=>{
    localStorage.removeItem("productos");
  });
}

let CalculoCompraD=()=>{
  let subtotalD = document.getElementById("subtotalD");
  let totalD = document.getElementById("totalD");
  if (productos != null) {
    let envio=10000;
    let valorSubtotal = productos.reduce((e, i) => e + Number(i.precioP) * Number(i.cantidadP), 0);
    subtotalD.textContent = '$' + valorSubtotal;
    let valorTotal = Number(valorSubtotal)+envio;
    totalD.textContent = '$' + valorTotal;
    if(formFinalizar !=null){
      formFinalizar.innerHTML+=`
      <input type="hidden" name="subtotal" value="${valorSubtotal}" />
     <input type="hidden" name="total" value="${valorTotal}" id="totalCompra" /> `;
    }
  }
}

let AumentarValor=(e)=>{
  let card=e.target.parentElement
  let itemB=card.querySelector('input[type="hidden"]').value;
  if(itemB!=null){
    let busqueda=productos.findIndex(i=>i.itemP==itemB);
    if(busqueda!=-1){
      let valor=card.querySelector('input[type="text"]').value;
       productos[busqueda].cantidadP=valor;
       localStorage.setItem("productos", JSON.stringify(productos));  
       CalculoCompraD();
    }  
  }
}


let ValidacionDeItemsCard=()=>{
  /*productos.reduce((e,i,o)=>{
    console.log(i,o)
    
  },[])*/ 
}

if(tbodyfinalizarc !== null){
  if(productos != null){
    tbodyfinalizarc.innerHTML="";
    productos.forEach(p=>{
     tbodyfinalizarc.innerHTML+=`
     <tr>
     <td><a href="/Productos/detalleProducto${p.itemP}">${p.nombreP} <strong>x: ${p.cantidadP}</strong></a></td>
     <td>$${p.precioP}</td>
     </tr>
     `;
     formFinalizar.innerHTML+=`<input type="hidden"  name="idProducto[]" value="${p.itemP}" />
     <input type="hidden" name="talla[]" value="${p.tallaP}"/>
     <input type="hidden" name="cantidad[]" value="${p.cantidadP}" />`;
    });  
    CalculoCompraD();
  }
}
ValidacionDeItemsCard()
MostrarProductosDetalle();