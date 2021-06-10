AppCompra.component("mostrar-producto", {
    template:
    /*html*/
    `<div class="row">
            <div class="col-4">
                <img :src="poster" :style="styles">
            </div>
            <div class="col-8">
                <h1 class="mt-3" v-text="titulo"></h1>
                <p v-text="descripcion"></p>
                Precio: <h2 v-text="precio"></h2>
                <span v-if="disponibles>5">Disponible</span>
                <span v-else-if="disponibles<=5 && disponibles>0">Por Agotarse</span>
                <span v-else>Agotado</span>
                <p>
                    <button
                        :disabled="disponibles == 0" @click="contador += 1">Comprar
                    </button>
                </p>
            </div>
    </div>`,
    data() {
        return {
            poster: "http://app2.prueba/image/img.png",
            styles: {
                width: '350px'
            },
            titulo: "Liga de la Justicia",
            descripcion: "pelicula",
            precio: "$ 20",
            disponibles: 10,
            agotado: true
        }
    }
});

