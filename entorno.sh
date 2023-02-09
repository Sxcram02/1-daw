#!/bin/bash

# PRIMERA PARTE
rm -rf Master/

echo "Esta es tu planificacion"
echo " ###################################################################################################################################################
#                                                        llevamos la cuenta de la rama master                                                     #
# ------------------------------------------------------------------------------------------------------------------------------------------------#
#                                                                                                                                                 #
# MASTER ---> lenguaje >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                            #
#   |------------------> entorno >>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                                                                 #
#   |-------> programacion >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                                                 #
#   |---------------------> base de datos>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                           #
#   |---------------------------------------> sistemas >>>>>>>>>>>>>>>>(materiales, ejercicios)                                                   #
#   |------------------> formacion y orientacion laboral >>>>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                                       #
###################################################################################################################################################
"
echo "Desas crear los repositorios"
read respuesta0
if [[ $respuesta0 = "si" ]]
then
	mkdir Master && cd Master/
	git init .
	touch README.md && echo "Este es el principio de mi proyecto la rama **MASTER**" >> README.md
	touch actualizacion.sh && chmod 700 actualizacion.sh && echo "#!bin/bash" >> actualizacion.sh && echo 'git add . -A && git commit -m "Nuevos cambios"' >> actualizacion.sh && echo "git status" >> actualizacion.sh
	mv ./actualizacion.sh ./actualizacion && sudo cp ./actualizacion /usr/local/bin && sudo sed -i "122d" ~/.bashrc && sudo echo "alias act='/usr/local/bin/actualizacion'" >> ~/.bashrc && source ~/.bashrc
	git add . && git commit -m "Añadida rama principal"
	echo "----------------------------"
	echo "Añadida rama master"
	echo "----------------------------"
	echo " "
	echo " "
	git branch LMSGI && git checkout LMSGI






# creo la rama de lenguaje y hago su primer commit a la vez que creo
# las carpetas de materiales y ejercicios para tambien hacer commit de ella

	mkdir LMSGI && cd LMSGI/ && touch README.md && echo "# Esta es la asignatura de Lenguaje" >> README.md && mkdir materiales ejercicios
	cd materiales/ && touch README.md && echo "materiales de la asignatura" >> README.md 
	cd ../ejercicios/ && touch README.md && echo "ejercicios de la asignatura" >> README.md
# RETORNO A MASTER
	cd ../../

##################################################################################################################################################################################################################################################################################################################################################################################################################################################################

	git add . && git commit -m "Añadida rama de lenguaje"
	echo "----------------------------"
	echo "Añadido Lenguaje"
	echo "----------------------------"
	echo " "
	echo " "
	git checkout master && git branch ERD && git checkout ERD

# vuelvo a la rama master para desde ella crear otra rama de entorno
# y generar su material y ejercicios haciendo commit de todo ello

	mkdir ERD && cd ERD/ && touch README.md && echo "# Esta es la asignatura de Entorno" >> README.md && mkdir materiales ejercicios
	cd materiales/ && touch README.md && echo "materiales de la asignatura" >> README.md
	cd ../ejercicios/ && touch README.md && echo "ejercicios de la signatura" >> README.md
# RETORNO A MASTER/
	cd ../../

##################################################################################################################################################################################################################################################################################################################################################################################################################################################################

	git add . && git commit -m "Añadida rama ERD"
	echo "----------------------------"
	echo "Añadido Entorno"
	echo "----------------------------"
	echo " "
	echo " "
	git checkout master && git branch PROG && git checkout PROG

# se retorna a la rama master y se crea la rama de programacion
# a partir de aqui se genera los materiales y ejercicios y
# se realiza un commit de todo ello en el directorio principal

	mkdir PROG && cd PROG/ && touch README.md && echo "# Esta es la asignatura de Programación" >> README.md && mkdir materiales ejercicios
	cd materiales/ && touch README.md && echo "materiales de la asignatura" >> README.md
	cd ../ejercicios/ && touch README.md && echo "ejercicios de la signatura" >> README.md
# RETORNO A MASTER/
	cd ../../
##################################################################################################################################################################################################################################################################################################################################################################################################################################################################

	git add . && git commit -m "Añadida rama PROG"
	echo "----------------------------"
	echo "Añadido Programacion"
	echo "----------------------------"
	echo " "
	echo " "
	git checkout master && git branch BBDD && git checkout BBDD

# De vueta en la rama master creamos la rama de base de datos
# y generamos sus respectivos archivos

	mkdir BBDD && cd BBDD && touch README.md && echo "# Esta es la asignatura de Base de datos" >> README.md && mkdir materiales ejercicios
	cd materiales/ &&  touch README.md && echo "materiales de la asignatura" >> README.md
	cd ../ejercicios/ &&  touch README.md && echo "ejercicios de la asignatura" >> README.md
# RETORNO A MASTER/
	cd ../../
##################################################################################################################################################################################################################################################################################################################################################################################################################################################################

	git add . && git commit -m "Añadida rama BBDD"
	echo "----------------------------"
	echo "Añadido Base de datos"
	echo "----------------------------"
	echo " "
	echo " "
	git checkout master && git branch SIS && git checkout SIS

# A partir de master generamos la rama de sistema nos introducimos en ella
# y creamos las carpetas de ejercicios y materiales

	mkdir SIS && cd SIS && touch README.md && echo "# Esta es la asignatura de Sistemas" >> README.md && mkdir materiales ejercicios
	cd materiales/ && touch README.md && echo "materiales de la asignatura" >> README.md
	cd ../ejercicios/ && touch README.md && echo "ejercicios de la asignatura" >> README.md
# RETORNO A MASTER/
	cd ../../
##################################################################################################################################################################################################################################################################################################################################################################################################################################################################

	git add . && git commit -m "Añadida rama SIS"
	echo "----------------------------"
	echo "Añadido Sistemas"
	echo "----------------------------"
	echo " "
	echo " "
	git checkout master && git branch FOL && git checkout FOL

# Por último creamos la rama de fol desde master
# y dentro de ella creamos los materiales y ejercicios
# con su commit incial

	mkdir FOL && cd FOL/ && touch README.md && echo "# Esta es la asignatura de Formación de orientacion laboral" >> README.md && mkdir materiales ejercicios
	cd materiales/ && echo "materiales de la asignatura" >> README.md
	cd ../ejercicios/ && echo "ejercicios de la signatura" >> README.md
# RETORNO A MASTER/
	cd ../../

##################################################################################################################################################################################################################################################################################################################################################################################################################################################################

	git add . && git commit -m "Añadida rama FOL"
	echo "----------------------------"
	echo "Añadido Formacion y orientacion Laboral"
	echo "----------------------------"
	echo " "

###################################################################################################################################################
#                                                        llevamos la cuenta de la rama master                                                     #
# ------------------------------------------------------------------------------------------------------------------------------------------------#
#                                                                                                                                                 #
# MASTER ---> lenguaje >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                            #
#   |------------------> entorno >>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                                                                 #
#   |-------> programacion >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                                                 #
#   |---------------------> base de datos>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                           #
#   |---------------------------------------> sistemas >>>>>>>>>>>>>>>>(materiales, ejercicios)                                                   #
#   |------------------> formacion y orientacion laboral >>>>>>>>>>>>>>>>>>>>>>>>> (materiales, ejercicios)                                       #
###################################################################################################################################################
#
# REVISAMOS QUE LA EJECUCION HA SIDO NORMAL
# Y QUE POSEEMOS ESAS RAMAS

	git checkout master
	git branch -av
	echo "-------------------------------------------------------"
	echo "-------------------------------------------------------"
	
else
	echo "¿Deseas Actualizar?"
	read respuesta3
	if [[ $respuesta3 = "si" ]]
	then
		echo Escriba el commit
		read commit
		git add . -A && git commit -m "$commit"
	fi
fi

echo "¿Deseas fusionar las ramas?"

read respuesta
if [[ $respuesta = "si" ]]
then
	git merge -m "Fusion de Lenguaje" LMSGI && echo "----------Fusion 1----------"
	git merge -m "Fusion de Entorno" ERD && echo "----------Fusion 2----------"
	echo " "
	git merge -m "Fusion de Proramacion" PROG && echo "----------Fusion 5----------"
	git merge -m "Fusion de Base de datos" BBDD && echo "----------Fusion 4----------"
	echo " "
	git merge -m "Fusion de Sistemas" SIS && echo "----------Fusion 5----------"
	git merge -m "Fusion de Formacion y orientacion Laboral" FOL && echo "----------Fusion 6----------"
	echo " "
	echo "----------------------------"
	echo "Repositorios Fusionados con éxito"
	echo "----------------------------"
fi

echo "¿Deseas actualizar el repositorio?"
read respuesta4
if [[ $respuesta4 = "si" ]]
then
act
fi

echo "Todos los repositorios creados" >> README.md
echo " "
echo " "
echo " "

echo "¿visalizar historial?"
read respuesta2
if [[ $respuesta2 = "si" ]]
then	
	git log --all --oneline --graph --pretty --decorate --stat
else
	echo "Disfruta de tu repositorio"
fi
