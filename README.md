Bioequivalencia
===============

Componentes para aplicación de bioequivalencia de medicamentos para hackathon cxc2012


## Instalación

* Instalar LODSPeaKr. Por ejemplo, si `/var/www` es el directorio raíz del sitio web:
    * `mkdir /var/www/bioequivalencia`
    * `cd /var/www/bioequivalencia`
    * `bash < <(curl -sL http://lodspeakr.org/install)`
         * A la primera pregunta, responder cual será la URL del sitio (ej. `http://misitio.com/bioequivalencia`)
         * En la segunda pregunta, el espacio de nombre será `http://graves.cl/bioequivalencia` (no cambiar!)
         * En la tercera pregunta, hay que indicar la URL del SPARQL endpoint que se va a usar (ej: `http://localhost:8080/sparql`)
         * Dar los permisos neecesarios de escritura (seguir instrucciones)
     
* Clonar este repositorio 
    * `git clone https://github.com/alangrafu/bioequivalencia.git`
    * Cargar los datos disponibles en `data/todo.ttl` en el SPARQL endpoint
    * En la instalación de LODSPeaKr remover el directorio `components` y hacer un softlink al directorio `components` **de este repositorio** (en la instalación: `ln -s ../bioequivalencia/lodspeakr/components`)

## Demo

El demo está disponible en [http://graves.cl/bioequivalencia](http://graves.cl/bioequivalencia)
