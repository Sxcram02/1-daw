# **TEMA 3**
+ ## XML
> Es un lenguaje que permite la estructuración y la ordenación de la información que se compone como en html de etiquetas escalonadas en forma de árbol.

```xml
    <compania>
        <departamento>
            <trabajador>
                <nombre>Luisa</nombre>
                <apellido>Dominguez</apellido>
            </trabajador>
            <trabajador>
                <nombre>Juan</nombre>
                <apellido>Vazquez</apellido>
            </trabajador>
        </departamento>
        <departamento>
            <trabajador>
                <nombre>Marcos</nombre>
                <apellido>Dominguez</apellido>
            </trabajador>
        </departamento>
    </compania>
```
Editores: Notepad++, VS Code.

### **Estructura**
+ Prólogo

```xml
    <?xml version="1.0" encoding="UTF-8" standalone="yes" ?>
    <!DOCTYPE compania>
```
+ Ejemplar

```xml
    <compania>
        <departamento>
            <trabajador>
                <nombre>Mauro</nombre>
                <cargo>Supervisor</cargo>
                <dni>23090876T</dni>
            </trabajador>
        </departamento>
        <departamento>
            <trabajador>
                <nombre>Luisa</nombre>
                <cargo>Secretaria</cargo>
                <dni>09064356Y</dni>
            </trabajador>
            <trabajador>
                <nombre>Marcos</nombre>
                <cargo>Jefe de Seguridad</cargo>
                <dni>112454672L</dni>
            </trabajador>
        </departamento>
    </compania>
```









## EJERCICIOS 

> + **Ejercicio 1**: Realmente en Linux ni Notepad, ni Notepad++ esta disponible, sin embargo podemos encontrar alternativas como Notepadnext en el caso de Notepad++ o Notepadqq en el caso de Notepad.

<br />

> ### **Notepadqq**
> ![notepadqq](./media/notepadqq.png)

<br />

> ### **Notepadnext**
> ![notepadnext](./media/Notepadnext.png)

<br />

> ### **Visual Studio Code**
> ![visualstudio](./media/Visualstudio.png)

> Cada uno de estos editores de código son usados para codear en xml, sin embargo, a diferencia de las versiones originales estas no son compatibles con extensiones o no esta bien documentadas. Esto no impide su uso, es más en el caso de **notepadqq** si acepta extensiones aun que su configuración se compleja. 
>
> En mi opinión y desde mi punto de vista Visual Studio es de los mejores editores básicamente por su uso regular dada la comunidad de desarrolladores, tiene mas soporte y extensiones que permiten la edición de xml de forma mas sencilla. En VSCode existen las extensiones de XML Tools y XML creada por Red Hat 
, siendo la primera la  más antigua y por ende la mas desarrollada y perfecionada yo tengo claro que VSCode es el editor mas práctico porque consigue reunir todas las funcionalidades necesarias y más. Además de que visualmente es mas bonito a mi parecer.

<br />

> + **Ejercicio 2**:
Crea una tabla con la información dada.
<br />

```xml
    <?xml version="1.0" encoding="UTF-8" ?>
    <!DOCTYPE libreria>
    <libreria>
        <libro>
	        <titulo>El programadoir prágmatico</titulo>
	        <autor>David Thomas y Andrew Hunt</autor>
	        <anodepublicacion>2022</anoDePublicacion>
	        <editorial>Anaya Multimedia</editorial>
	        <paginas>339</paginas>
        </libro>
        <libro>
	        <titulo>Código Limpio</titulo>
	        <autor>Robert C. Martin</autor>
	        <anoDePublicacion>2012</anoDePublicacion>
	        <editorial>Anaya Multimedia</editorial>
	        <paginas>463</paginas>
        </libro>
        <libro>
	        <titulo>Aprendiendo JavaScript</titulo>
	        <autor>Carlos Azaustre</autor>
	        <anoDePublicacion>2016</anoDePublicacion>
	        <editorial>Publicacion independiente</editorial>
		    <paginas>99</paginas>
	    </libro>
    </libreria>
```
> + **Ejercicio 3**:
Crea una tabla con la información dada en xml como atributo.

```xml
    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE ciudades>
    <ciudades>
        <ciudad>
            <nombre>Ceuta</nombre>
            <pais continente="africa">espania</pais>
            <elevacion>10m</elevacion>
        </ciudad>
        <ciudad>
            <nombre>Mykonos</nombre>
            <pais continente="europa">Grecia</pais>
            <elevacion></elevacion>
        </ciudad>
        <ciudad>
            <nombre>Pekin</nombre>
            <pais continente="asia">China</pais>
            <elevacion>44m</elevacion>
        </ciudad>
        <ciudad>
            <nombre>Ciudad de México</nombre>
            <pais continente="america">mexico</pais>
            <elevacion>2240m</elevacion>
        </ciudad>
    </ciudades>
```

> + **Ejercicio 4**
Crea un documento en XML que almacene la información dada

```xml
    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE hechosHistoricos>
    <hechosHistoricos>
        <hecho descripcion="IBM da a conocer el PC">
            <fecha>
                <dia>12</dia>
                <mes>8</mes>
                <anio>1981</anio>
            </fecha>
        </hecho>
        <hecho descripcion="Se funda Google">
            <fecha>
                <dia>4</dia>
                <mes>9</mes>
                <anio>1998</anio>
            </fecha>
        </hecho>
        <hecho descripcion="Se funda Facebook">
            <fecha>
                <dia>4</dia>
                <mes>2</mes>
                <anio>2004</anio>
            </fecha>
        </hecho>
        <hecho descripcion="Steve Jobs presenta el iPhone">
            <fecha>
                <dia>29</dia>
                <mes>6</mes>
                <anio>2007</anio>
            </fecha>
        </hecho>
    </hechosHistoricos>
```

> + **Ejercicio 5**: Representa la infomación en un documento XML de3 páginas web.

```xml
    <?xml version="1.0" encoding="utf-8"?>
    <!DOCTYPE paginasWeb>
    <paginasWeb>
        <pagina>
            <nombre>MDN Web Docs</nombre>
            <utilidad>Resources for Developers, by Developers</utilidad>
            <dominio>https://developer.mozilla.org/es/</dominio>
        </pagina>
        <pagina>
            <nombre>W3Schools</nombre>
            <utilidad>Learn to code</utilidad>
            <dominio>https://www.w3schools.com</dominio>
        </pagina>
        <pagina>
            <nombre>Wikipedia</nombre>
            <utilidad>La enciclopedia libre</utilidad>
            <dominio>https://es.wikipedia.org/</dominio>
        </pagina>
    </paginasWeb>
```

> + **Ejercicio 6**: Representa la información de dos equipos en un documento de XML con un atributo.

```xml
    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE equipos>
    <equipos>
        <equipo>
            <nombreEquipo>Real Madrid</nombreEquipo>
            <ciudad>Comunidad de Madrid</ciudad>
            <entrenador></entrenador>
            <jugadores>
                <jugador posicion="delantero">
                       <nombreJugador>Karim Benzema</nombreJugador> 
                       <nacionalidad>Francesa, argelino</nacionalidad>
                </jugador>
                <jugador posicion="centrocampista">
                    <nombreJugador>Luka Modrić</nombreJugador> 
                    <nacionalidad>Croata</nacionalidad>
             </jugador>
            </jugadores>
        </equipo>
        <equipo>
            <nombreEquipo>Barcelona</nombreEquipo>
            <ciudad>Barcelona</ciudad>
            <entrenador></entrenador>
            <jugadores>
                <jugador posicion="delantero">
                       <nombreJugador>Robert Lewandowski</nombreJugador> 
                       <nacionalidad>Polaco</nacionalidad>
                </jugador>
                <jugador posicion="defensa">
                    <nombreJugador>Jules Koundé</nombreJugador> 
                    <nacionalidad>Francesa</nacionalidad>
            </jugador>
            </jugadores>
        </equipo>
    </equipos>
```

**Ejercicio 7**: Corrige el xml frutas.xml.

```xml
    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE frutas>
    <!--EN ESTE DOCUMENTO HAY UNA MALA SINTAXIS SIN CERRAR ETIQUETAS O MAL CIERRE, FALTA EL TIPO DE DOCUMENTO (!doctype) Y QUITAR EL ESPACIADO ENTRE ETIQUETAS, ADEMÁS PARA QUE LA INFORMACIÓN SEA MAS SENCILLA DE PROCESAR SERÍA NECESARIO CREAR UN ATRIBUTO-->
    <frutas>
        <fruta color="rojo">
            <nombre>cereza</nombre>
        </fruta>
        <fruta color="naranja">
            <nombre>naranja</nombre>
        </fruta>
    </frutas>
```

**Ejercicio 8:** Corrije los errores de vehiculos.xml.

```xml
    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE vehiculo>
    <!--EN ESTE DOCUMENTO HAY UNA MALA SINTAXIS SIN CERRAR ETIQUETAS O MAL CIERRE, FALTA EL TIPO DE DOCUMENTO (!doctype), MALA SEÑALIZACIÓN DE PARÁMETROS DE XML, ADEMÁS PARA QUE LA INFORMACIÓN SEA MAS SENCILLA DE PROCESAR SERÍA NECESARIO CREAR UN ATRIBUTO COMO TAMPOCO POSEE RAÍZ Y POR ÚLTIMO EL COMENTARIO ESTA MAL ESCRITO Y MAL POSICIONADO Y EL USO INDEBIDO DE LAS TILDES-->
    <!--Documento XML con errores de sintaxis.-->
    <vehiculo>
        <vehiculos medio="terrestre">
            <vehiculo>bicicleta</vehiculo>
            <vehiculo>coche</vehiculo>
            <vehiculo>tractor</vehiculo>
        </vehiculos>
        <vehiculos medio="acuático">
            <vehiculo>canoa</vehiculo>
        </vehiculos>
        <vehiculos medio="aéreo">
            <vehiculo>avion</vehiculo>
            <vehiculo>helicoptero</vehiculo>
        </vehiculos>
    </vehiculo>
```

**Ejercicio 9:** Corregir los errores figuras.xml.

```xml
    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE figuras>
    <!-- EN ESTE CASO TAMPOCO EXISTE RAIZ !DOCTYPE COMO TAMBIÉN EXISTE ESPACIADO EN LAS ETIQUETAS Y ALGUNAS ETIQUETAS NO ESTAN NI ABIERTAS, ADEMÁS SERIA NECESARIO IMPLANTAR UN ARIBUTO QUE HAGA MAS FÁCIL LA CLASIFICACIÓN DE INFORMACIÓN-->
    <figuras>
        <figuras forma="plana">
            <figuraPlana>
                <nombre>cuadrado</nombre>
                <lados>4</lados>
            </figuraPlana>
            <figuraPlana>
                <nombre>triangulo</nombre>
                <lados>3</lados>
            </figuraPlana>        
        </figuras>
        <figuras forma="tridimensional">
            <figura>
                <nombre>cubo</nombre>
                <aristas>12</aristas>
                <caras>6</caras>
            </figura>
        </figuras>
    </figuras>
```
**Ejercicio 10:** Hacer un dpocumento XML con <![CDATA[]]>

```xml
    <?xml version="1.0" encoding="UTF-8"?>
    <!DOCTYPE figuras>
    <figuras>
        <figuras forma="plana">
            <figuraPlana>
                <nombre>cuadrado</nombre>
                <lados>4</lados>
            </figuraPlana>
            <figuraPlana>
                <nombre>triangulo</nombre>
                <lados>3</lados>
            </figuraPlana>        
        </figuras>
        <figuras forma="tridimensional">
            <figura>
                <nombre>cubo</nombre>
                <aristas>12</aristas>
                <caras>6</caras>
            </figura>
            <![CDATA[
            <figura>
                <nombre>tetraedro</nombre>
                <aristas>6</aristas>
                <caras>4</caras>
            ]]>
        </figuras>
    </figuras>
```

**Ejercicio 11:** Haz un XML con DTD
```xml
    <?xml version="1.0" encoding="utf-8" standalone="no"?>
    <!DOCTYPE alumno [
        <!ELEMENT alumno(nombre, apellido)>
        <!ELEMENT nombre (#PCDATA)>
        <!ELEMENT apellido (#PCDATA)>
    ]>
    <alumno>
        <nombre>María</nombre>
        <apellido>Velarde García</apellido>
    </alumno>
```

**Ejercicio 12:** Hacer XML con DTD EMPTY
```xml

```

**Ejercicio 13:** Hacer XML con DTD
```xml

```

**Ejercicio 14:** Hacer un xml con DTD específico

```xml

```

**Ejercicio 15:**Haz un DTD 
```xml

```

**Ejercicio 16:** Haz un XML con DTD teniendo en cuenta los operadores(?, *, +, |)
```xml

```

**Ejercicio 17:** Haz un XML del ejercici 12 con algun operador
```xml

```

**Ejercicio 21:** añade un atributo al anterior xml
```xml

```

**>Ejercicio 22:** Haz un DTD de un XML
```xml

```

**Ejercicio 23:** Haz un DTD
```xml

```

**Ejercicio 24:** Haz un XML
```xml

```

**Ejercicio 25:** Haz un XML con  entidades
```xml
 
```