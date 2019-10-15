# Protokoll App in Laravel

08.10.2019

Routes und Views angelegt:
  - dashboard => Startseite, die Liste mit Protokollen zeigt
  - create => bekommt später Formular für Erstellung eines neuen Protokolls
  - update => bekommt später Formular für Bearbeitung eines Protokolls
  
Die Views haben wir dem Template welcome.blade.php zugeordnet.
Dynamische Seitentitel und Inhalte mit @section angelegt und mit @yield eingebunden.
Navigation mit @include eingebunden.

14.10.2019

Resource Controller und entsprechende Routes dazu angelegt

15.10.2019

Ordner Views aufgeräumt

create.blade.php File angelegt, Formular zum Anlegen eines neuen Protokolls angelegt

Formularvalidierung eingerichtet (FormRequest ValidateCreateForm angelegt) und in Controller Methode store() eingebunden

Controller Methode create() definiert
