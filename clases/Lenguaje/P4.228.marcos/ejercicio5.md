# **PRÁCTICA 4**
## EJERCICIO 1

En este caso se pide redactar un DTD que tiene un elemento como raiz "pedido" dos atributos requeridos y varios elementos hijos como cliente, articulos y rl total, que a su vez son padre de los elementos hijo de; nombre, apellido, articulo respectivamente siendo articulo otro padre de una descripción, una cantidad y un precio. El total se representa con un atributo de valor y se mantiene el espacio en blanco.

[!EJERCICIO1](/XML/pedido.xml)

```xml
    <?xml version="1.0" encoding="utf-8" standalone="yes"?>
    <!DOCTYPE pedido [
        <!ELEMENT pedido (cliente+,articulos*,total+)+>
            <!ATTLIST pedido numero CDATA #REQUIRED>
            <!ATTLIST pedido dia NMTOKEN #REQUIRED>
        <!ELEMENT cliente (nombre,apellido+)>
            <!ATTLIST cliente codigo CDATA #REQUIRED>
            <!ELEMENT nombre (#PCDATA)>
            <!ELEMENT apellido (#PCDATA)>
        <!ELEMENT articulos (articulo+)>
            <!ELEMENT articulo (descripcion,cantidad*,precio+)>
                <!ELEMENT descripcion (#PCDATA)>
                <!ELEMENT cantidad (#PCDATA)>
                <!ELEMENT precio (#PCDATA)>
        <!ELEMENT total EMPTY>
            <!ATTLIST total valor NMTOKEN #REQUIRED>
    ]>
    <pedido numero="26" dia="2023-12-01">
        <cliente codigo="20">
            <nombre>Felipe</nombre>
            <apellido>Garcia</apellido>
        </cliente>
        <articulos>
            <articulo>
                <descripcion>Yoda Mimobot USB Flash Drive 8GB</descripcion>
                <cantidad>5</cantidad>
                <precio>38.99</precio>
            </articulo>
            <articulo>
                <descripcion>Darth Vader Half Helmet Case for iPhone</descripcion>
                <cantidad>2</cantidad>
                <precio>29.95</precio>
            </articulo>
        </articulos>
        <total valor="254.85"></total>
    </pedido>
```

## EJERCICIO 2

En este caso se pide otro DTD aunque mas complejo que posee una raiz denominada factura que posee unos atributos de numero y fecha, además este elemento es padre de los datos del emisor el cual posee elementos hijos como: el nombre, el cif, y el número de teléfono, los datos del cliente que posee los mismo elementos, los detalles de la factura que tienen unos atributos del código de ese artículo y un tipo en concreto más elementos hijos de una descripción, una cantidad, una oferta que debe estar vacia, y un pvp. Y por último un importe que se representa como un atributo de los articulos.

[!EJERCICIO2](XML/factura.xml)

```xml
    <?xml version="1.0" encoding="UTF-8" standalone="yes"?>
    <!DOCTYPE factura[
        <!ELEMENT factura (datosEmisor, datosCliente, detallesFactura)>
            <!ATTLIST factura numero CDATA #REQUIRED>
            <!ATTLIST factura fecha NMTOKEN #REQUIRED>
        <!ELEMENT datosEmisor (nombre+, apellidos, cif, telefono)>
            <!ELEMENT nombre (#PCDATA)>
            <!ELEMENT apellidos (#PCDATA)>
            <!ELEMENT cif (#PCDATA)>
            <!ELEMENT telefono (#PCDATA)>
        <!ELEMENT datosCliente (nombre, cif, telefono)>
        <!ELEMENT detallesFactura (articulo+)>
            <!ATTLIST detallesFactura importe CDATA #REQUIRED>
            <!ATTLIST articulo codigoArticulo ID #REQUIRED>
            <!ATTLIST articulo tipo (Libro|Manual|Varios) #IMPLIED>
        <!ELEMENT articulo (descripcion?, cantidad*, oferta?, pvp)>
            <!ELEMENT descripcion (#PCDATA)>
            <!ELEMENT cantidad (#PCDATA)>
            <!ELEMENT oferta EMPTY>
            <!ELEMENT pvp (#PCDATA)>
        
    ]>
    <factura numero="27" fecha="18-12-2022">
        <datosEmisor>
            <nombre>Pérez</nombre>
            <apellidos>Librería</apellidos>
            <cif>44556677Y</cif>
            <telefono>9566529943</telefono>
        </datosEmisor>
        <datosCliente>
            <nombre>Biblioteca CIFP</nombre>
            <cif>45895623T</cif>
            <telefono>956513490</telefono>
        </datosCliente>
        <detallesFactura importe="85$">
            <articulo codigoArticulo="T3C" tipo="Libro">
                <descripcion>Trilogía de los 3 cuerpos</descripcion>
                <cantidad>1</cantidad>
                <oferta>SI</oferta>
                <pvp>25$</pvp>
            </articulo>
            <articulo codigoArticulo="CLR" tipo="Manual">
                <descripcion>Código limpio</descripcion>
                <cantidad>2</cantidad>
                <oferta></oferta>
                <pvp>30$</pvp>
            </articulo>
        </detallesFactura>
    </factura>
```

## EJERCICIO 3

En este ejercicio realizamos XML SCHEMA el cual parte de un elemento compuesto, persona que posee una secuencia de elementos como nombre, nacimiento que a su vez es un elemento compuesto que posee atributos, direccion que es un elemento complejpo que posee una secuencia de elementos hijo como calle, población, provincia y código postal. Y por último un elemento varon. Cada uno de estos posee sus propias restricciones siendo algunas de estas variadas.

[!EJERCICIO3](XML/persona.xml)

```xml
    <?xml version="1.0" encoding="UTF-8" standalone="no"?>
    <persona xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="../XSD/persona.xsd">
        <nombre>Juan Pardo</nombre>
        <nacimiento dia="10" mes="Abril" anyo="1982"></nacimiento>
        <direccion>
            <calle>Caoba, 1</calle>
            <poblacion>Madrid</poblacion>
            <provincia>Madrid</provincia>
            <cpostal>28005</cpostal>
        </direccion>
        <genero>Varon</genero>
    </persona>
```
```xml
    <?xml version="1.0" encoding="UTF-8" standalone="no"?>
    <xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema">
        <xs:element name="persona">
            <xs:complexType>
                <xs:sequence>
                    <xs:element name="nombre" type="tipoNombre"></xs:element>
                    <xs:element name="nacimiento">
                        <xs:complexType>
                                <xs:attribute name="dia" type="dia" use="optional"></xs:attribute>
                                <xs:attribute name="mes" type="mes" use="optional"></xs:attribute>
                                <xs:attribute name="anyo" type="anyo" use="optional"></xs:attribute>
                        </xs:complexType>
                    </xs:element>
                    <xs:element name="direccion">
                        <xs:complexType>
                            <xs:sequence>
                                <xs:element name="calle" type="tipoNombre"></xs:element>
                                <xs:element name="poblacion" type="tipoNombre"></xs:element>
                                <xs:element name="provincia" type="tipoNombre"></xs:element>
                                <xs:element name="cpostal" type="cpostal"></xs:element>
                            </xs:sequence>
                        </xs:complexType>
                    </xs:element>
                    <xs:element name="genero" type="genero"></xs:element>
                </xs:sequence>
            </xs:complexType>
        </xs:element>
        <xs:simpleType name="tipoNombre">
            <xs:restriction base="xs:string">
                <xs:pattern value="(([A-Z]+[a-z]+)+([/s]*)+(\D*)+[0-9]*)+"></xs:pattern>
                <xs:maxLength value="50"></xs:maxLength>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="dia">
            <xs:restriction base="xs:integer">
                <xs:minInclusive value="1"></xs:minInclusive>
                <xs:maxInclusive value="31"></xs:maxInclusive>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="mes">
            <xs:restriction base="xs:string">
                <xs:enumeration value="Enero"></xs:enumeration>
                <xs:enumeration value="Febrero"></xs:enumeration>
                <xs:enumeration value="Marzo"></xs:enumeration>
                <xs:enumeration value="Abril"></xs:enumeration>
                <xs:enumeration value="Mayo"></xs:enumeration>
                <xs:enumeration value="Junio"></xs:enumeration>
                <xs:enumeration value="Julio"></xs:enumeration>
                <xs:enumeration value="Agosto"></xs:enumeration>
                <xs:enumeration value="Septiembre"></xs:enumeration>
                <xs:enumeration value="Octubre"></xs:enumeration>
                <xs:enumeration value="Noviembre"></xs:enumeration>
                <xs:enumeration value="Diciembre"></xs:enumeration>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="anyo">
            <xs:restriction base="xs:integer">
                <xs:maxExclusive value="2012"></xs:maxExclusive>
                <xs:minExclusive value="1899"></xs:minExclusive>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="cpostal">
            <xs:restriction base="xs:integer">
                <xs:totalDigits value="5"></xs:totalDigits>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="genero">
            <xs:restriction base="xs:string">
                <xs:pattern value="(([A-Z]+[a-z]*)+[/s]*)+"></xs:pattern>
                <xs:enumeration value="Varon"></xs:enumeration>
                <xs:enumeration value="Hembra"></xs:enumeration>
            </xs:restriction>
        </xs:simpleType>
    </xs:schema>
```

## EJERCICIO 4 

Este ejercicio consiste en hacer un DTD y dos XML SCHEMA de los anteriores ejercicio.

+ FACTURA XSD

```xml
    <?xml version="1.0" encoding="UTF-8" standalone="no"?>
    <xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema">
        <xs:element name="factura">
            <xs:complexType>
                <xs:sequence>
                    <xs:element name="factura">
                        <xs:complexType>
                            <xs:sequence>
                                <xs:element name="datosEmisor">
                                    <xs:complexType>
                                        <xs:sequence>
                                            <xs:element name="nombre" type="xs:string"></xs:element>
                                            <xs:element name="apellidos" type="xs:string"></xs:element>
                                            <xs:element name="cif" type="cif"></xs:element>
                                            <xs:element name="telefono" type="telefono"></xs:element>
                                        </xs:sequence>
                                    </xs:complexType>
                                </xs:element>
                                <xs:element name="datosCliente">
                                    <xs:complexType>
                                        <xs:sequence>
                                            <xs:element name="nombre" type="xs:string"></xs:element>
                                            <xs:element name="cif" type="cif"></xs:element>
                                            <xs:element name="telefono" type="telefono"></xs:element>
                                        </xs:sequence>
                                    </xs:complexType>
                                </xs:element>
                                <xs:element name="detallesFactura">
                                    <xs:complexType>
                                        <xs:sequence>
                                            <xs:element name="articulo" minOccurs="1" maxOccurs="unbounded">
                                                <xs:complexType>
                                                    <xs:sequence>
                                                        <xs:element name="descripcion" type="xs:string"></xs:element>
                                                        <xs:element name="cantidad" type="xs:integer"></xs:element>
                                                        <xs:element name="oferta" type="oferta"></xs:element>
                                                        <xs:element name="pvp" type="pvp"></xs:element>
                                                    </xs:sequence>
                                                    <xs:attribute name="codigoArticulo" type="codigoArticulo" use="required"></xs:attribute>
                                                    <xs:attribute name="tipo" type="tipo" use="required"></xs:attribute>
                                                </xs:complexType>
                                            </xs:element>
                                        </xs:sequence>
                                        <xs:attribute name="importe" type="xs:string" use="required"></xs:attribute>
                                    </xs:complexType>
                                </xs:element>
                            </xs:sequence>
                            <xs:attribute name="numero" type="xs:int" use="required"></xs:attribute>
                            <xs:attribute name="fecha" type="xs:date" use="required"></xs:attribute>
                        </xs:complexType>
                    </xs:element>
                </xs:sequence>
            </xs:complexType>
        </xs:element>
        <xs:simpleType name="telefono">
            <xs:restriction base="xs:integer">
                <xs:totalDigits value="10"></xs:totalDigits>
                <xs:pattern value="[0-9]*"></xs:pattern>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="cif">
            <xs:restriction base="xs:string">
                <xs:maxLength value="9"></xs:maxLength>
                <xs:pattern value="([0-9]*)+[A-Z]+"></xs:pattern>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="codigoArticulo">
            <xs:restriction base="xs:string">
                <xs:maxLength value="3"></xs:maxLength>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="tipo">
            <xs:restriction base="xs:string">
                <xs:pattern value="(([A-z]+[a-z]*)+[/s]*)*"></xs:pattern>
                <xs:enumeration value="Manual"></xs:enumeration>
                <xs:enumeration value="Libro"></xs:enumeration>
                <xs:enumeration value="Varios"></xs:enumeration>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="oferta">
            <xs:restriction base="xs:string">
                <xs:enumeration value="SI"></xs:enumeration>
                <xs:enumeration value="NO"></xs:enumeration>
            </xs:restriction>
        </xs:simpleType>
        <xs:simpleType name="pvp">
            <xs:restriction base="xs:integer">
                <xs:totalDigits value="5"></xs:totalDigits>
            </xs:restriction>
        </xs:simpleType>
    </xs:schema>
```

+ PEDIDO XSD

```xml
    <?xml version="1.0" encoding="UTF-8" standalone="no"?>
    <xs:schema xmlns:xs="http://www.w3.org/2001/XMLSchema">
        <xs:element name="pedido">
            <xs:complexType>
                <xs:sequence>
                    <xs:element name="pedido">
                        <xs:complexType>
                        <xs:sequence>
                            <xs:element name="cliente" minOccurs="1" maxOccurs="unbounded">
                                <xs:complexType>
                                    <xs:sequence>
                                        <xs:element name="nombre" type="xs:string"></xs:element>
                                        <xs:element name="apellido" type="xs:string"></xs:element>
                                    </xs:sequence>
                                    <xs:attribute name="codigo" type="xs:int"></xs:attribute>
                                </xs:complexType>
                            </xs:element>
                            <xs:element name="articulos" minOccurs="1" maxOccurs="unbounded">
                                <xs:complexType>
                                    <xs:sequence>
                                        <xs:element name="articulo" minOccurs="1" maxOccurs="unbounded">
                                            <xs:complexType>
                                                <xs:sequence>
                                                    <xs:element name="descripcion" type="xs:string"></xs:element>
                                                    <xs:element name="cantidad" type="xs:int"></xs:element>
                                                    <xs:element name="precio" type="xs:float"></xs:element>
                                                </xs:sequence>
                                            </xs:complexType>
                                        </xs:element>
                                    </xs:sequence>
                                </xs:complexType>
                            </xs:element>
                            <xs:element name="total" minOccurs="1" maxOccurs="1">
                                <xs:complexType>
                                    <xs:attribute name="valor" type="xs:float"></xs:attribute>
                                </xs:complexType>
                            </xs:element>
                        </xs:sequence>
                            <xs:attribute name="numero" type="xs:int" use="required"></xs:attribute>
                            <xs:attribute name="dia" type="xs:date" use="optional"></xs:attribute>
                        </xs:complexType>
                    </xs:element>
                </xs:sequence>
            </xs:complexType>
        </xs:element>
    </xs:schema>
```

+ PERSONA DTD

```xml
    <?xml version="1.0" encoding="UTF-8" standalone="yes"?>
    <!DOCTYPE persona[
        <!ELEMENT persona (nombre+, nacimiento?, direccion+, genero)>
            <!ELEMENT nombre (#PCDATA)>
            <!ELEMENT nacimiento (#PCDATA)>
                <!ATTLIST nacimiento dia CDATA #IMPLIED>
                <!ATTLIST nacimiento mes CDATA #IMPLIED>
                <!ATTLIST nacimiento anyo CDATA #IMPLIED>
            <!ELEMENT direccion (calle, poblacion, provincia, cpostal)+>
                <!ELEMENT calle (#PCDATA)>
                <!ELEMENT poblacion (#PCDATA)>
                <!ELEMENT provincia (#PCDATA)>
                <!ELEMENT cpostal (#PCDATA)>
            <!ELEMENT genero (#PCDATA)>
    ]>
    <persona>
        <nombre>Juan Pardo</nombre>
        <nacimiento dia="10" mes="Abril" anyo="1982"></nacimiento>
        <direccion>
            <calle>Caoba, 1</calle>
            <poblacion>Madrid</poblacion>
            <provincia>Madrid</provincia>
            <cpostal>28005</cpostal>
        </direccion>
        <genero>Varon</genero>
    </persona>
```