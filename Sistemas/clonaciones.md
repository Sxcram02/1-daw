# **CONFIGURACIÓN DE SAMBA**
 ## sudo nano /etc/samba/smb.conf 


    [first]
   >* comment = "Our first shared directory with samba"
   >* browseable = yes
   >* path = /share/d1
   >* public = no
   >* read only = yes
   >* invalid users = @g1,student



    [second]

   >* comment = "Our second shared directory with samba"
   >* browseable = yes
   >* path = /share/d2
   >* guest ok = no
   >* writeable = yes
   >* valid users = user2,user3
   >* create mask = 0777
   >* directory mask = 0777

    [third]
   >* comment = "Our third shared directory with samba"
   >* browseable = yes
   >* read list = @g1
   >* write list = user2
   >* path = /share/d3
   >* public = no   
   >* create mask = 0600
   >* directory mask = 0550

    [fourth]
   >* comment = "Our Fourth shared directory with samba"
   >* browseable = yes
   >* path = /share/d4
   >* public = yes
   >* read only = no
   >* create mask = 0755
   >* directory mask = 0775

    [fifth]
   >* browseable = yes
   >* path = /share/d5
   >* public = no
   >* writeable = yes
   >* write list = user1,user2
   >* force user = user3
   >* force group = g3
   >* create mask = 0744
   >* directory mask = 0755

    [sixth]
   >* browseable = yes
   >* path = /share/d6
   >* guest ok = no
   >* read only = no
   >* write list = student
   >* create mask = 0600
   >* directory mask = 0540
   >* hide files = /f*/* f/F*/*F/
   >* veto files = /*x*/*X*/

    [seventh]
   >* browseable =yes
   >* path = /share/d7
   >* read only = yes
   >* public = no
   >* valid users = student,user1
   
    [eight]
   >* browseable = yes
   >* path = /share/d8
   >* read only = yes
   >* public = yes
   >* hosts allow = 192.168.8.0/21, 127.0.0.1, 192.168.15.120/21
   >* hosts deny =
   
    [exercise1]
   >* browseable = yes
   >* path = /share/d9
   >* read list = @g1
   >* write list = @g3
   >* valid users = @g1, @g3
   >* invalid users = 
   >* force users = user2
   >* force group = g3
   >* directory mask = 0755
   >* create mask = 0644
   >* hide files = /*.txt/
   
    [exercise2]
   >* browseable = yes
   >* path = /share/d10
   >* guest ok = yes
   >* write list = student, user3
   >* create mask = 0764
   >* directory mask = 0550
   >* veto files = /.*/*./
   >* hosts allow = 192.168.8.
   >* hosts deny = 192.168.8.1, 192.168.6.2

sudo service smbd restart

<br />

# **Aplicable a todos los sistemas operativos CLONACIONES**

> Existen 4 formas de hacer clonaciones: 
> + **Unicast ( SMB[1] , NFS[2] , SSH[3] , (clonezilla) )**: replicar una maquina en otra con la mismas características y montarla de nuevo.
> + **Multicast ( DRBL[4] )**: con una unica imagen clonar varias veces.
>
> Imagen iso clonezilla ( maquina1 (a clonar) , maquina2 (servidor) , maquina3 (clonación) )


## 1. **PRIMER MÉTODO**
> ### **Maquina 2 terminal**
>
>- ip a (recordar ip) en ajustes de red
>- sudo apt install samba
>- crear carpeta samba
>- sudo nano /etc/samba/smb.conf
>
>    * workgroup= SAMBA00
>    * ...
>    * [samba]
>        * comment = "Clonezilla and samba"
>        * browseable = yes
>        * public = yes
>        * read only = no
>        * path = /home/student/samba
>        * create mask = 0766
>        * directory mask = 0755
>        * force user = student
>        * force group = student
>- sudo service smbd restart 
>- sudo smbpasswd -a student
>- sudo service smbd restart 
    
> ### **Maquina 1, en red, adaptador puente y en almacenamiento IDE: clorozilla. Iniciar con normalidad y resetear con shutdown e iniciar con  F12**
>
>    - (c)CD ROM, other modes, clorozilla live, generic key 105 KMG nº3(
>        - start clorozilla
>        - device-image(
>            - local_dev(opcional)
>            - samba_server(
>                - static
>                IP: 192.168.8.1XX
>                Mask: 255.255.248.0
>                Default Gateway: 192.168.8.1
>                DNS: 8.8.8.8
>                - name server: SAMBA00
>                - samba server: ip recordada antes.
>                - superusuario: student.
>                - localizacion: /samba.
>                - out.
>                - out.
>                - password
>                - begginer, savedisk(
>                    name
>                - sfsck -y
>                - yes
>                -senc
>                - -p poweroff

> ### **Maquina 3 en red, adaptador puente y IDE: clorozille**
>    - other mode, 3(
>        - device-image(
>             - samba_server(
>                - static
>                   IP: 192.168.8.1XX
>                   Mask: 255.255.248.0
>                   Default Gateway: 192.168.8.1
>                   DNS: 8.8.8.8
>                - name server: SAMBA00
>                - samba server: ip recordada antes.
>                - superusuario: student.
>                - localizacion: /samba.
>                - out.
>                - out.
>                - password
>                - begginer, restoredisk
>                - scr
>                - perfect
>                - -p poweroff
maclonezilla nfts
ip en etc/exports
init clonezilla
device-image
nfs_server
static
IP 192.168.8.XX
Netmask
Default Gateway
DNS
nfs nFS2. v3
IP Maquina 2
/home/student/nfs

