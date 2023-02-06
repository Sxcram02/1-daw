# Entornos de desarrollo

> Git es un repositorio de control de versiones que permite la creación, seguimiento y azctuaización de tus trabajos de forma local o remoto que permite una serie de características:


**Ejercicio 2 y 3:**

> Nosotros empezamos configurando git tanto el usuario com el email, seguido de la inicialización del primer repositorio:

```bash
    sudo apt install git
    git config --global user.name "string"
    git config --global user.email example@example.com
    git config --global color.ui auto
    git config --list
    git init "example" o "/../../"
```

![configuracion](/media/git.png)
![configuracion](/media/initgit.png)


**Ejercicio 4 y 5:**(añade y haz un commit)
> Mas adelante empezamos con la edición de archivos:

```bash
    git status
    git add **fichero**
    git add **carpeta**
    git add
    git rm **fichero**
    git rm --cached **fichero**
    git -mv **fichero** **nuevo-fichero** 
    git commit -m "comentario"
    git commit --amend "comentario"
```
![archivo](/media/archivo1.png)
![status](/media/gitstatus.png)
![commit](/media/gitcommit.png)

**Ejercicio 6 y 7:**
> cambia el archivo indice.txt muestra los cambios y haga un commit, muestre la diferencia y los cambios 
```bash
    git status
    git diff 
    git diff --cached
    git diff HEAD~1
    git add indice.txt
    git commit -m "mensaje"
    git show
    git show <añadido capítulo 3 sobre la gestión de ramas.>
    git show HEAD~X
```

![diff](/media/gitdiff.png)
![diferencia](/media/diferencias.png)

**Ejercicio 8** Muestra los cambios con git log y agrega una carpeta ademas de un archivo de texto.
```bash
    git log 
    mkdir capitulos
    nano capitulos/capitulos.txt
    git add .
    git commit -m "Añadido capitulo 1"
    git log
```

![gitLog](/media/gitLog.png)

**Ejercicio 9:** Crear un fichero en la carpeta.
```bash
    git log
    nano capitulos/capitulo2.txt
    git add .
    git commit -m "Añadidio capitulo 2"
    git diff HEAD~2..HEAD
```

![gitDiff](/media/gitDiffHead.png)

**Ejercicio 10:** Crea un capitulo 3
```bash
    git log
    nano capitulos/capitulo3.txt
    git add .
    git commit -m "Añadido capítulo 3."
   git diff ac42d19a5c97c2387852e9df7ebd5fe1bf1ab583: HEAD
```

![gitDiff2](/media/gitDiffHash.png)

**Ejercicio 11:** Muestra el autor de los cambios
```bash
    nano capitulos/indice.txt
    git add .
    git commit -m "Añadido capitulo 3"
    git annotate/blame
```

![gitAnnotateBlame](/media/gitannotate-blame.png)