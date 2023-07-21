const urlClientes = "http://localhost/NODE%20JS/Estudio%20prueba/clase2/backend/controller.php?op=getAll"
const urlNuevoCliente = "http://localhost/NODE%20JS/Estudio%20prueba/clase2/backend/controller.php?op=insert"

export const getClientes = async ()=>{
    try {
        const clientes = await fetch(urlClientes);
        const datosClientes = await clientes.json();
        return datosClientes
    } catch (error) {
        console.log(error);
    }
}

export const nuevoCliente = async (registro)=>{
    try {
        await fetch(urlNuevoCliente),{
            method:"POST",
            body: JSON.stringify(registro),
            headers:{
                'Content-Type': 'application/json'
            }
        }
    } catch (error) {
        console.log(error);
    }
}