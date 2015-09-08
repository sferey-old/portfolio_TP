<img src="http://framework.zend.com/images/logos/ZendFramework-logo.png" alt="Zend Framework logo" width="250" height="66">
# INSTRUCTION

## [WIKIPEDIA](https://fr.wikipedia.org/wiki/Zend_Framework)

Le Zend Framework est un framework pour PHP 5 créé en mars 2006 par Zend Technologies.

Il est distribué sous la [Licence BSD Modifiée](https://fr.wikipedia.org/wiki/Licence_BSD).

Le Zend Framework, aussi nommé ZF, a été développé dans le but de simplifier le développement Web tout en recommandant 
les bonnes pratiques et la conception orientée objets en offrant des outils aux développeurs. ZF permet aussi
d'utiliser nativement le principe de [MVC (Modèle-Vue-Contrôleur)](https://fr.wikipedia.org/wiki/Mod%C3%A8le-vue-contr%C3%B4leur), mais n'y oblige pas.

# Utilisation du MVC ZendFramework 
## STRUCTURE

    Project  
      |-- library                       (Library External)
      |-- src
        |-- application                 (Application directory)
          |-- configs                   (Configuration directory)
            |-- application.ini         (Configuration static)
            |-- navigation.xml          (Configuration navigation)
            |-- routes.ini              (Configuration routing)
          |-- controllers
            |-- <Name>Controller.php    (Controller)
          |-- forms
            |-- <Name>.php              (Object Form)
          |-- layouts
            |-- scripts
              |-- layout.phtml          (View Layout)
          |-- models
            |-- DbTable
              |-- <Name>.php            (DbTable Model)
            |-- mappers
              |-- <Name>.php            (Mapper Model)
            |-- <Name>.php              (File Model)
          |-- plugins
            |-- <Name>.php              (File CustomPlugin)
          |-- services
            |-- <Name>.php              (Service Model)
          |-- views
            |-- filters
              |-- <Name>.php            (File CustomFilter)
            |-- helpers
              |-- <Name>.php            (File CustomHelper)
            |-- scripts
              |-- <name_controller>     (Directory Controller)
                |-- <action-name>.phtml (File Controller Action)
        |-- Bootstrap.php               (File Bootstrapping)
        |-- public                      (Public directory)
          |-- index.php                 
          |-- .htacess
      |-- vendor                        (Library Composer)
      |-- composer.json                 (File Composer)

## [CONTROLLER](http://framework.zend.com/manual/1.12/fr/zend.controller.html)

La création d'un contrôleur se fait dans le dossier spécifié par la configuration de 
`resources.frontController.controllerDirectory` dans le fichier application.ini

```php
    class NameController extends Zend_Controller_Action {
        
        public function init(){
            # Initialisation du controller.
        }
        
        public function indexAction(){
        
        }
    }
```
> Minimun d'un contrôleur, file : NameController.php


Un contrôleur se compose en principe de méthode précedée du terme `Action`.
 - Chaque contrôleur créé va générer un dossier dans `views/scripts`.
 - Chaque action du contrôleur va générer un fichier avec pour nom celui de l'action en minuscule, 
    n'est valable que pour les actions n'ayant pas désactivé le rendu de la vue.
 - Chaque action correspond à une vue affichable ou non.


### Envoyer des données à la vue

Le rôle du contrôleur est de faire parvenir des données à la vue.

```php
    $this->view->assign($specs, $value);
```

La méthode `assign` accepte un tableau ou une chaîne de caractères.
$specs est l'identifiant qui sera retrouvé dans la vue.
Si un tableau est passé en argument les clés serviront d'identifiant avec la valeur du tableau.

### [Aide d'action](http://framework.zend.com/manual/1.12/fr/zend.controller.actionhelpers.html)

Les aides d'action permettent aux développeurs d'injecter, en cours d'exécution et / ou à la demande, des fonctionnalités 
dans tout contrôleur d'action qui étend Zend_Controller_Action. 
Le but des aides d'action est de minimiser la nécessité d'étendre le contrôleur d'action abstrait en y injectant des 
fonctionnalités communes de contrôleur d'action.

Les actions et contrôleurs ont la possibilité de faire appel à ses outils afin de gérer des process en particulier.
La liste des aides d'action se situe dans `Zend/Controller/Action/Helper`.

Attention, les aides d'action peuvent être aussi des outils comme `Layout`.

```php
    $this->_helper->getExistingHelpers()
    #Instruction pour avoir la liste des helpers actif existant
```
 
### Instruction à connaitre

```php
    $this->forward($action, $controller = null, $module = null, array $params = null);
    #Instruction de Zend_Controller_Action qui permet la redirection vers une autre action
    $this->_helper->viewRenderer->setNoRender($flag = true);
    # Instruction de l'aide d'action ViewRenderer qui permet de désactiver le rendu de vues
    $this->_helper->viewRenderer->setRender($action = null, $name = null, $noController = null)
    # Instruction de l'aide d'action ViewRenderer qui permet d'attribuer une vue à une action
    $this->_helper->layout()->disableLayout();
    # Instruction de l'outil Layout qui permet désactiver le layout
```

## [VIEW](http://framework.zend.com/manual/1.12/fr/zend.view.html)

Zend_View est une classe qui permet de travailler avec la partie "Vue" du motif de conception Modèle-Vue-Contrôleur.
Elle existe pour aider à garder la vue séparée du modèle et des scripts du contrôleur.
Elle fournie un système d'aide, de filtres d'affichage, et d'échappement de variables.

La vue est un élément de Zend qui permet de retrouver les données que le contrôleur transmet 
et de les afficher dans un mélange d'HTML et de PHP.

```phtml
    <?php echo $this->specs ?>
```

### [Aide de vue](http://framework.zend.com/manual/1.12/fr/zend.view.helpers.html)

Dans vos scripts de vue, il est souvent nécessaire d'effectuer certaines actions complexes encore et encore : 
par exemple, formater une date, générer des éléments de formulaire, afficher des liens d'action. 
Vous pouvez utiliser des classes d'aide pour effectuer ce genre de tâches.

Les vues possèdent ces aides, appelées `Helper_Views`, elles sont retrouvables dans le dossier `Zend/View/Helper`


### Instruction à connaitre

```phtml
    <?php echo $this->partial($path); ?>
    <ul>
        <?php echo $this->partialLoop($path, $this->data); ?>
    </ul>
```

## [LAYOUT](http://framework.zend.com/manual/1.12/fr/zend.layout.html)

Zend_Layout utilise le design pattern Two Step View, ce qui permet d'encapsuler le contenu d'une vue dans une autre, 
généralement appelée template. D'autres projets les appellent aussi layouts, ainsi Zend Framework utilise ce terme.

```ini
    ; Add to [production] section:
    resources.layout.layoutPath = APPLICATION_PATH "/layouts/scripts"
```
> application/configs/application.ini

Par défaut le fichier se nomme layout.phtml

```phtml
    <?php echo $this->doctype() ?>
    <html>
    <head>
      <?php echo $this->headMeta()?>
      <?php echo $this->headTitle()?>
      <?php echo $this->headLink()->appendStylesheet('/css/global.css') ?>
    </head>
    <body>
        <?php echo $this->layout()->content ?>
    </body>
    </html>
```
> application/layouts/scripts/layout.phtml

Notez aussi l'utilisation du placeholer headLink(), headMeta(), headTitle(). Référer vous auprès des aides d'actions.
