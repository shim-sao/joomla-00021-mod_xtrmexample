---
id: 307
permalink: /docs/fr/04-fichier-manifest.html
lang: fr-FR
langISOlower: fr
layout: content-only
title: XtrmAddons | Joomla Module Example
comments: true
---

## Le fichier Manifest

<p>
  Nom du fichier: <a href="https://github.com/shim-sao/joomla-00021-mod_xtrmexample/blob/master/dist/mod_xtrmexample.xml" target="_blank"><code><span class="nc">mod_xtrmexample.xml</span></code></a>
</p>

<p class="text-justify">
  Le fichier <code>manifest.xml</code> est un fichier commun analysé par Joomla lors de l'installation, la configuuration ou encore l'affichage d'une extension.<br />
  Il permet de gérer et de personnaliser de façon générale les différentes informations relatives à une extension ainsi que ses paramètres d'initialisation et de configuration.<br />
  Vous allez apprendre ici comment définir un module de façon simple et lui apporter les elements dont vous pourriez avoir besoin pour personnaliser votre développement.
</p>

<p class="text-justify alert alert-info">
  Pour un module, le fichier manifest doit porter le nom du module: mod_nom_du_module.xml<br />
  Pour notre exemple, le fichier sera mod_xtrmaddons.xml
</p>

### Déclaration d'un fichier xml

```xml
<?xml version="1.0" encoding="UTF-8" ?>
```

### Déclaration d'une extension Module

```xml
<extension type="module" version="3.9" method="upgrade">
```

### Informations concernant l'extension

```xml
<name>Module ☆ Example</name>
<element>mod_xtrmexample</element>
<version>4.0.01.03.1411358</version>
<creationDate>21 May. 2019</creationDate>
<description>MOD_XTRMEXAMPLE_XML_DESCRIPTION</description>
```

### Informations sur l'auteur et la licence

```xml
<author>example</author>
<authorName>example</authorName>
<authorEmail>example@example.com</authorEmail>
<authorUrl>https://www.example.com/</authorUrl>
<packager>example.com</packager>
<packagerurl>https://www.example.com/</packagerurl>
<copyright>Copyright 2019-2019 example.com. All rights reserved.</copyright>
<license>https://www.gnu.org/licenses/gpl-3.0.html GNU/GPL</license>
```

### Définir l'espace de nom du module

```xml
<!-- Set module namespace -->
<namespace>Joomla\Module\XtrmExample</namespace>
```

### Définir le fichier Script d'installation

```xml
<!-- Runs on install/uninstall/update -->
<scriptfile>script.php</scriptfile>
```

### Définir les fichiers composant le module

```xml
<!-- Main File Copy -->
<files>
  <folder>Helper</folder>
  <folder>tmpl</folder>
  <filename module="mod_xtrmexample">mod_xtrmexample.php</filename>
  <filename>mod_xtrmexample.xml</filename>
</files>
```

### Définir les fichiers langue

```xml
<!-- Language File Copy -->
<languages folder="language">
  <language tag="en-GB">en-GB/en-GB.mod_xtrmexample.ini</language>
  <language tag="en-GB">en-GB/en-GB.mod_xtrmexample.sys.ini</language>
  <language tag="fr-FR">fr-FR/fr-FR.mod_xtrmexample.ini</language>
  <language tag="fr-FR">fr-FR/fr-FR.mod_xtrmexample.sys.ini</language>
</languages>
```

### Définir les fichiers assets ou media

```xml
<!-- Media files -->
<media folder="media" destination="mod_xtrmexample">
  <folder>css</folder>
  <folder>image</folder>
  <folder>js</folder>
</media>
```

### Configuration du module

```xml
<!-- Configuration of the module -->
<config>
  <!-- Declare parameters of the module -->
  <fields name="params">

    <!-- Basic parameters of the module -->
    <fieldset name="basic">
      
    </fieldset>
    
    <!-- Advanced parameters of the module -->
    <fieldset name="advanced">
      <field
        name="tag_id"
        type="text"
        description="MOD_XTRMEXAMPLE_FIELD_TAG_ID_DESC"
        label="MOD_XTRMEXAMPLE_FIELD_TAG_ID_LABEL"
      />

      <!-- see source for complete code -->

    </fieldset>
  </fields>
</config>
```

### Définir un serveur de mise à jour

```xml
<!-- Extension Update Specification -->
<updateservers>
  <server name="XtrmAddons - Module Xtrm Example Update" priority="1" type="extension">https://github.joomla.mod-xtrmexample.xtrmaddons.com/download/release/update-4.0.xml</server>
</updateservers>

```

### Fin de notre extension ou module

```xml
</extension>
```