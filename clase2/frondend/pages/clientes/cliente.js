import { getClientes, nuevoCliente } from "./API.js";

addEventListener('DOMContentLoaded',()=>{
    cargaClientes()

})

async function cargaClientes(){
    const clientes = await getClientes();
    console.log(clientes);
    const cargaClientes = document.querySelector('#datosClientes')
    clientes.forEach(element => {

        const {id_constructora,nit_constructora,  nombre_constructora,nombre_representante,telefono_contacto,email_contacto} = element

        cargaClientes.innerHTML += `
                    <tr>
                      <th scope="row">${id_constructora}</th>
                      <td>${nombre_constructora}</td>
                      <td>${nit_constructora}</td>
                      <td>${nombre_representante}</td>
                      <td>${email_contacto}</td>
                      <td>${telefono_contacto}</td>
                    </tr>

        `
    });
}

const formulario = document.getElementById('registrar')
formulario.addEventListener('submit',nuevosCliente)


function nuevosCliente(e){
    e.preventDefault()




    const id_constructora = document.getElementById('idCtrct');
    const nit_constructora = document.getElementById('Constructora');
    const nombre_constructora = document.getElementById('NitCtrct');
    const nombre_representante = document.getElementById('Representante');
    const telefono_contacto = document.getElementById('Email');
    const email_contacto = document.getElementById('Telefono');

    const registro = {
        id_constructora,
        nombre_constructora,
        nit_constructora,
        nombre_representante,
        email_contacto,
        telefono_contacto,
    }

    nuevoCliente(registro)

}